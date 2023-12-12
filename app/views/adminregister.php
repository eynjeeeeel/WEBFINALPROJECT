<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head.php'; ?>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <div class="container-fluid service py-6">
            <div class="container">
                <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                    <a href="<?= base_url() ?>/" class="navbar-brand">
                        <img src="<?= base_url() ?>/public/img/acmcl-logo.png" alt="" class="logo pb-4 mb-4" style="width: 200px;">
                    </a>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm-12 wow bounceInUp" data-wow-delay="0.1s">
                        <div class="card bg-success text-white">
                            <div class="card-body p-4">
                                <div class="service-content d-flex align-items-center justify-content-center">
                                    <div class="container">
                                        <h2 class="text-emerald-600">ACMCL Admin Registration</h2>
                                        <form action="<?= site_url('adminregAuth') ?>" method="POST">
                                            <div class="mb-2">
                                                <label for="inputUsername" class="form-label">Username</label>
                                                <input type="text" class="form-control" id="inputUsername" placeholder="Enter your username" required
                                                    name="username">
                                            </div>
                                            <div class="mb-2">
                                                <label for="inputPassword" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="inputPassword" placeholder="Enter your password" required
                                                    name="password">
                                            </div>
                                            <div class="mb-2">
                                                <label for="inputPassword" class="form-label">Confirm Password</label>
                                                <input type="password" class="form-control" id="inputConfirmPassword"
                                                    aria-describedby="passwordHelpInline" required name="confirmpassword">
                                            </div>
                                            <div class="mb-2">
                                                <label for="inputTechId" class="form-label">Tech ID</label>
                                                <input type="text" class="form-control" id="inputTechId" placeholder="Enter your Tech ID" required
                                                    name="tech_id">
                                            </div>
                                            <div class="mb-2">
                                                <label for="inputFname" class="form-label">First Name</label>
                                                <input type="text" class="form-control" id="inputFname" placeholder="Enter your first name" required
                                                    name="fname">
                                            </div>
                                            <div class="mb-2">
                                                <label for="inputMname" class="form-label">Middle Name</label>
                                                <input type="text" class="form-control" id="inputMname" placeholder="Enter your middle name"
                                                    name="mname">
                                            </div>
                                            <div class="mb-2">
                                                <label for="inputLname" class="form-label">Last Name</label>
                                                <input type="text" class="form-control" id="inputLname" placeholder="Enter your last name" required
                                                    name="lname">
                                            </div>
                                            <div class="mb-2">
                                                <label for="inputGender" class="form-label">Gender</label>
                                                <select class="form-select" id="inputGender" required name="gender">
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                            <div class="mb-2">
                                                <label for="inputDob" class="form-label">Date of Birth</label>
                                                <input type="date" class="form-control" id="inputDob" required name="dob">
                                            </div>
                                            <div class="mb-2">
                                                <label for="inputCnum" class="form-label">Contact Number</label>
                                                <input type="text" class="form-control" id="inputCnum" placeholder="Enter your contact number"
                                                    required name="cnum">
                                            </div>
                                            <div class="mb-2">
                                                <label for="inputEmail" class="form-label">Email Address</label>
                                                <input type="email" class="form-control" id="inputEmail" placeholder="Enter your email address" required
                                                    name="email">
                                            </div>
                                            <div class="mb-2">
                                                <label for="inputHomeadd" class="form-label">Home Address</label>
                                                <input type="text" class="form-control" id="inputHomeadd" placeholder="Enter your home address"
                                                    required name="homeadd">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Register</button>
                                        </form>
                                        <p class="mt-4 text-center text-lg text-gray-700" style="color: white; font-size: 17px">
                                            Already have an account? <a href="<?= site_url('adminlogin') ?>"
                                                style="color: aqua; text-decoration: underline">Login</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of card -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'scriptLT.php'; ?>
</body>

</html>
