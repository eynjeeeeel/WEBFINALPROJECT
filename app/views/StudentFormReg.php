<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    
    <?php
    include 'head.php';
    ?>

    <link rel="stylesheet" href="path/to/your/styles.css">
</head>

<body class="bg-light">
    <div class="container-xxl">
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
                                        <h2 class="text-emerald-600">Student Registration</h2>
                                        <?php if (isset($errors)) { // Check if $errors is set before looping through it ?>
                                            <?php foreach ($errors as $error) { ?>
                                                <div class="alert alert-danger" role="alert">
                                                    <?= $error ?>
                                                </div>
                                            <?php } ?>
                                        <?php } ?>
                                        <form action="<?= site_url('upload/do_upload') ?>" method="post" enctype="multipart/form-data">
                                            <!-- Add your form fields here -->
                                            <div class="mb-3">
                                                <label for="idnumber" class="form-label">ID Number</label>
                                                <input type="text" class="form-control" id="idnumber" name="idnumber" required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="fullname" class="form-label">Full Name</label>
                                                <input type="text" class="form-control" id="fullname" name="fullname" required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="age" class="form-label">Age</label>
                                                <input type="text" class="form-control" id="age" name="age">
                                            </div>

                                            <div class="mb-3">
                                                <label for="birthday" class="form-label">Birthday</label>
                                                <input type="text" class="form-control" id="birthday" name="birthday">
                                            </div>

                                            <div class="mb-3">
                                                <label for="gender" class="form-label">Gender</label>
                                                <input type="text" class="form-control" id="gender" name="gender">
                                            </div>

                                            <div class="mb-3">
                                                <label for="address" class="form-label">Address</label>
                                                <input type="text" class="form-control" id="address" name="address">
                                            </div>

                                            <div class="mb-3">
                                                <label for="section" class="form-label">Section</label>
                                                <input type="text" class="form-control" id="section" name="section">
                                            </div>

                                            <label for="file" class="form-label">Upload Picture</label>
                                            <input type="file" class="form-control" id="file" name="file" size="" required>

                                            <button type="submit" class="btn btn-primary mt-3">Register</button>
                                        </form>

                                        <p class="mt-4 text-center text-lg text-gray-700" style="color: white; font-size: 17px">
                                            Already have an account? <a href="<?= site_url('login') ?>" style="color: aqua; text-decoration: underline">Login</a>
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

    <!-- Include your JS scripts here -->
    <script src="path/to/your/scripts.js"></script>
</body>

</html>
