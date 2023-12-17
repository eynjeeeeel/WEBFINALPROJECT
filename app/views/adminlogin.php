<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'head.php';
    ?>
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
                    <div class="col-lg-4 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.1s">
                        <div class="card bg-success text-white">
                            <div class="card-body p-4">
                                <div class="service-content d-flex align-items-center justify-content-center">
                                    <div class="service-content-icon text-center">
                                        <h5 class="mb-3">ACMCL Admin Login</h5>
                                        <form action="<?= site_url('adminloginAuth') ?>" method="post" class="row g-3">
                                            <div class="col-12">
                                                <input type="email" name="email" placeholder="Email" id="email"
                                                    class="form-control" required>
                                            </div>
                                            <div class="col-12">
                                                <input type="password" name="password" placeholder="Password" id="password"
                                                    class="form-control" required>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-light px-4 py-2 rounded-pill">Login</button>
                                            </div>
                                        </form>

                                        <p class="mt-4 text-center text-lg text-gray-700" style="color: white; font-size: 17px">Don't have an
                                        account?
                                        <a href="<?= site_url('adminregister') ?>"
                                    style="color: aqua; text-decoration: underline">Sign up</a>
                                        </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php
    include 'scriptLT.php';

    // Validate form data
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Check if fields are not empty
        if (empty($email) || empty($password)) {
            echo "<script>alert('Email and Password are required.');</script>";
        } else {
            // Your login logic goes here
            // Example: Check credentials in the database

            // Redirect to home page
            header("Location: /home");
            exit();
        }
    }
    ?>

</body>

</html>