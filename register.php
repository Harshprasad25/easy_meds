<?php include('<includes/header.php'); ?>
<?php include('includes/conn.php'); ?>

<!-- INSERT FOR PATIENTS   -->
<?php
if (isset($_POST['patient_submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];

    if ($password !== $cpassword) {
        echo "<script>alert('password do not match !'); window.location='registration.php';</script>";
        exit;
    }
    $query = "SELECT * FROM patients WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('This email is already registered!'); window.location='registration.php';</script>";
        exit;
    }
    $query = "INSERT INTO patients (name,email,password,gender, age,contact,address)
            values('$name','$email','$password','$gender','$age','$contact','$address')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "data inserted";
    } else {
        echo "error:" . mysqli_error($conn);
    }
}

?>
<!-- INSERT FOR DOCTORS   -->
<?php
if (isset($_POST['doctor_submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $specialization = $_POST['specialization'];
    $contact = $_POST['contact'];
    $availability = $_POST['availability'];




    $query = "INSERT INTO doctors (name,email,password, specialization,contact,availability)
            values('$name','$email','$password','$specialization','$contact','$availability')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "data inserted";
    } else {
        echo "error:" . mysqli_error($conn);
    }
}

?>
<!-- INSERT FOR ADMIN  -->
<?php
if (isset($_POST['admin_submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $role = $_POST['role'];


    $query = "INSERT INTO admin (name,email,password, role)
            values('$name','$email','$password','$role')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "data inserted";
    } else {
        echo "error:" . mysqli_error($conn);
    }
}


?>

<main class="min-vh-100 d-flex my-5 align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-5">
                <!-- Card -->
                <div class="card shadow-lg rounded">
                    <div class="card-body p-5">

                        <!-- Title -->
                        <h3 class="text-center mb-4 fw-bold text-primary">Sign Up</h3>

                        <!-- Pills navigation -->
                        <ul class="nav nav-pills nav-justified mb-4" id="authTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link active"
                                    id="tab-patient"
                                    data-bs-toggle="pill"
                                    data-bs-target="#pills-patient"
                                    type="button"
                                    role="tab"
                                    aria-controls="pills-patient"
                                    aria-selected="true">
                                    Patient
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link"
                                    id="tab-doctor"
                                    data-bs-toggle="pill"
                                    data-bs-target="#pills-doctor"
                                    type="button"
                                    role="tab"
                                    aria-controls="pills-doctor"
                                    aria-selected="false">
                                    Doctor
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link"
                                    id="tab-admin"
                                    data-bs-toggle="pill"
                                    data-bs-target="#pills-admin"
                                    type="button"
                                    role="tab"
                                    aria-controls="pills-admin"
                                    aria-selected="false">
                                    Admin
                                </button>
                            </li>
                        </ul>
                        <!-- End Pills navigation -->

                        <!-- Pills content -->
                        <div class="tab-content">

                            <!-- Patient Form -->
                            <div class="tab-pane fade show active" id="pills-patient" role="tabpanel" aria-labelledby="tab-patient">
                                <form action="#" method="post">
                                    <div class="mb-3">
                                        <label for="patientName" class="form-label">Full Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="patientName" name="name" placeholder="Enter your full name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="patientEmail" class="form-label">Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="patientEmail" name="email" placeholder="Enter your email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="patientPassword" class="form-label">Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="patientPassword" name="password" placeholder="Enter your password" minlength="6" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="patientCPassword" class="form-label">Confirm Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="patientCPassword" name="cpassword" placeholder="Re-enter your password" minlength="6" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label me-3">Gender: <span class="text-danger">*</span></label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="patientMale" value="male" required>
                                            <label class="form-check-label" for="patientMale">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="patientFemale" value="female">
                                            <label class="form-check-label" for="patientFemale">Female</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="patientOther" value="other">
                                            <label class="form-check-label" for="patientOther">Other</label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="patientAge" class="form-label">Age <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" id="patientAge" name="age" placeholder="Enter your age" min="1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="patientContact" class="form-label">Contact Number <span class="text-danger">*</span></label>
                                        <input type="tel" class="form-control" id="patientContact" name="contact" placeholder="Enter your contact number" pattern="\d{10}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="patientAddress" class="form-label">Address <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="patientAddress" name="address" placeholder="Enter your address">
                                    </div>
                                    <div>
                                        <input type="submit" name="patient_submit" class="form-control bg-primary mt-2 text-white" value="Register as Patient">
                                    </div>
                                </form>
                            </div>
                            <!-- End Patient Form -->

                            <!-- Doctor Form -->
                            <div class="tab-pane fade" id="pills-doctor" role="tabpanel" aria-labelledby="tab-doctor">
                                <form action="#" method="post">
                                    <div class="mb-3">
                                        <label for="doctorName" class="form-label">Full Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="doctorName" name="name" placeholder="Enter your full name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="doctorEmail" class="form-label">Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="doctorEmail" name="email" placeholder="Enter your email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="doctorPassword" class="form-label">Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="doctorPassword" name="password" placeholder="Enter your password" minlength="6" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="doctorCPassword" class="form-label">Confirm Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="doctorCPassword" name="cpassword" placeholder="Re-enter your password" minlength="6" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="doctorSpecialization" class="form-label">Specialization <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="doctorSpecialization" name="specialization" placeholder="Enter your specialization" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="doctorContact" class="form-label">Contact Number <span class="text-danger">*</span></label>
                                        <input type="tel" class="form-control" id="doctorContact" name="contact" placeholder="Enter your contact number" pattern="\d{10}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="doctorAvailability" class="form-label">Availability <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="doctorAvailability" name="availability" placeholder="Enter your availability">
                                    </div>
                                    <div>
                                        <input type="submit" name="doctor_submit" class="form-control bg-success mt-2 text-white" value="Register as Doctor">
                                    </div>
                                </form>
                            </div>
                            <!-- End Doctor Form -->

                            <!-- Admin Form -->
                            <div class="tab-pane fade" id="pills-admin" role="tabpanel" aria-labelledby="tab-admin">
                                <form action="#" method="post">
                                    <div class="mb-3">
                                        <label for="adminName" class="form-label">Full Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="adminName" name="name" placeholder="Enter admin full name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="adminEmail" class="form-label">Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="adminEmail" name="email" placeholder="Enter admin email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="adminPassword" class="form-label">Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="adminPassword" name="password" placeholder="Enter admin password" minlength="6" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="adminCPassword" class="form-label">Confirm Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="adminCPassword" name="cpassword" placeholder="Re-enter admin password" minlength="6" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="Role" class="form-label">Role <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="role" name="role" value="admin" readonly>
                                    </div>
                                    <div>
                                        <input type="submit" name="admin_submit" class="form-control bg-warning mt-2 text-white" value="Register as Admin">
                                    </div>
                                </form>
                            </div>
                            <!-- End Admin Form -->

                        </div>
                        <!-- End Pills content -->

                    </div>
                </div>
                <!-- End Card -->

            </div>
        </div>
    </div>
</main>

<?php include('includes/footer.php'); ?>cl