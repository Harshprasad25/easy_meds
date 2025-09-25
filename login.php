<?php include('includes\header.php'); ?>
<?php include('includes\conn.php'); ?>


<main class="vh-100 d-flex align-items-center" style="background: #f0f2f5;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-5">

        <!-- Card -->
        <div class="card shadow-lg rounded">
          <div class="card-body p-5">

            <!-- Title -->
            <h3 class="text-center mb-4 fw-bold text-primary">Login </h3>

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
                <form>
                  <div class="mb-4">
                    <label for="patientEmail" class="form-label">Email </label>
                    <input type="email" id="patientEmail" class="form-control" placeholder="Enter your email ">
                  </div>
                  <div class="mb-4">
                    <label for="patientPassword" class="form-label">Password</label>
                    <input type="password" id="patientPassword" class="form-control" placeholder="Enter your password">
                  </div>
                  <button type="submit" class="btn btn-primary w-100 py-2">Sign in</button>
                </form>
              </div>
              <!-- End Patient Form -->

              <!-- Doctor Form -->
              <div class="tab-pane fade" id="pills-doctor" role="tabpanel" aria-labelledby="tab-doctor">
                <form>
                  <div class="mb-4">
                    <label for="doctorEmail" class="form-label">Email </label>
                    <input type="email" id="doctorEmail" class="form-control" placeholder="Enter your email ">
                  </div>
                  <div class="mb-4">
                    <label for="doctorPassword" class="form-label">Password</label>
                    <input type="password" id="doctorPassword" class="form-control" placeholder="Enter your password">
                  </div>
                  <button type="submit" class="btn btn-success w-100 py-2">Register as Doctor</button>
                </form>
              </div>
              <!-- End Doctor Form -->

              <!-- Admin Form -->
              <div class="tab-pane fade" id="pills-admin" role="tabpanel" aria-labelledby="tab-admin">
                <form>
                  <div class="mb-4">
                    <label for="adminEmail" class="form-label">Email</label>
                    <input type="email" id="adminEmail" class="form-control" placeholder="Enter admin email">
                  </div>
                  <div class="mb-4">
                    <label for="adminPassword" class="form-label">Password</label>
                    <input type="password" id="adminPassword" class="form-control" placeholder="Enter admin password">
                  </div>
                  <button type="submit" class="btn btn-warning w-100 py-2">Admin Login</button>
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

<?php include('includes\footer.php'); ?>
