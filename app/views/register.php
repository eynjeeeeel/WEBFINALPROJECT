<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    // Include head.php
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
                <div class="col-lg-6 col-md-8 col-sm-12 wow bounceInUp" data-wow-delay="0.1s">
                    <div class="card bg-success text-white">
                        <div class="card-body p-4">
                            <div class="service-content d-flex align-items-center justify-content-center">
                            <div class="container">
                                <h2 class="text-emerald-600">ACMCL Registration</h2>
                                <form action="<?= site_url('registerAuth') ?>" method="POST">
                                    <div class="mb-2">
                                        <label for="inputFirstname" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="inputFirstname" placeholder="Enter your first name" required
                                            name="firstname">
                                    </div>
                                    <div class="mb-2">
                                        <label for="inputLastname" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="inputLastname" placeholder="Enter your last name" required
                                            name="lastname">
                                    </div>
                                    <div class="mb-2">
                                        <label for="inputEmail" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="inputEmail" placeholder="name@example.com" required
                                            name="email">
                                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                    </div>
                                    <div class="mb-2">
                                        <label for="inputPassword" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="inputPassword" aria-describedby="passwordHelpInline"
                                            required name="password">
                                        <!-- <div id="passwordHelpInline" class="form-text">
                                            Must be 8-20 characters long. 1 uppercase, 1 lowercase, and add special characters.
                                        </div> -->
                                    </div>
                                    <div class="mb-2">
                                        <label for="inputPassword" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" id="inputConfirmPassword"
                                            aria-describedby="passwordHelpInline" required name="confirm-password">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Register</button>
                                </form>
                                <p class="mt-4 text-center text-lg text-gray-700" style="color: white; font-size: 17px">
                                    Already have an account? <a href="<?= site_url('login') ?>"
                                    style="color: aqua; text-decoration: underline">Login</a>
                                </p>
                            </div>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
                            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
                            crossorigin="anonymous"></script>
                            </div>
                        </div>
                    </div>
                    <!-- End of card -->
                </div>
            </div>
        </div>
    </div>
</div>
    <?php
    // Include scriptLT.php
    include 'scriptLT.php';
    ?>

</body>

</html>
