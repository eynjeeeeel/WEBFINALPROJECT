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
                                        <form id="registrationForm" action="<?= site_url('adminregAuth') ?>" method="POST"
                                            onsubmit="return validateForm()">
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
                                                <label for="inputConfirmPassword" class="form-label">Confirm Password</label>
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

                                            <!-- Add other form fields as needed -->
                                            <button type="submit" class="btn btn-primary">Register</button>
                                        </form>
                                        <div id="successNotification" class="mt-3 text-center text-lg text-gray-700" style="color: white; font-size: 17px; display: none;">
                                            Registration Successful. You have filled in all required fields.
                                        </div>

                                        <div id="errorNotification" class="mt-3 text-center text-lg text-gray-700" style="color: white; font-size: 17px; display: none;">
                                            Please fill in all required fields and ensure the password matches.
                                        </div>
                                        <p class="mt-4 text-center text-lg text-gray-700" style="color: white; font-size: 17px">
                                            Already have an account? <a href="<?= site_url('adminlogin') ?>" style="color: aqua; text-decoration: underline">Login</a>
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
    <script>
        function validateForm() {
            var username = document.getElementById('inputUsername').value;
            var password = document.getElementById('inputPassword').value;
            var confirmPassword = document.getElementById('inputConfirmPassword').value;
            var inputTechId  = document.getElementById('inputTechId').value;
            var inputFname  = document.getElementById('inputFname').value;
            var inputMname  = document.getElementById('inputMname').value;
            var inputLname  = document.getElementById('inputLname').value;
            var inputGender  = document.getElementById('inputGender').value;
            var inputDob  = document.getElementById('inputDob').value;
            var inputCnum  = document.getElementById('inputCnum').value;
            var inputEmail  = document.getElementById('inputEmail').value;
            var inputHomeadd  = document.getElementById('inputHomeadd').value;
            // Add validation for other fields as needed

            // Check for empty fields
            if (!username || !password || !confirmPassword || !inputTechId || !inputFname || !inputMname || !inputLname || !inputGender || !inputDob || !inputCnum || !inputEmail || !inputHomeadd ) 
            {
                document.getElementById('errorNotification').style.display = 'block';
                document.getElementById('successNotification').style.display = 'none';
                return false;
            }

            // Add more validation logic as needed

            // If all validations pass
            document.getElementById('successNotification').style.display = 'block';
            document.getElementById('errorNotification').style.display = 'none';
            return true;
            return true;
        }
    </script>
</body>

</html>
