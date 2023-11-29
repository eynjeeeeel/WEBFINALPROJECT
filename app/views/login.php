<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head.php'; ?>
</head>

<body>

    <div class="container">
        <?php if (!empty($_SESSION['errors'])): ?>
            <div class="alert alert-danger mt-3" role="alert">
                <strong class="font-weight-bold">Error!</strong>
                <span class="d-block">
                    <?php
                    // Ensure $_SESSION['errors'] is an array
                    $errorMessages = is_array($_SESSION['errors']) ? $_SESSION['errors'] : [$_SESSION['errors']];
                    echo implode('<br>', $errorMessages);
                    ?>
                </span>
            </div>
        <?php endif; ?>

        <?php if (!empty($_SESSION['success'])): ?>
            <div class="alert alert-success mt-3" role="alert">
                <strong class="font-weight-bold">Success!</strong>
                <span class="d-block">
                    <?php echo $_SESSION['success']; ?>
                </span>
            </div>
        <?php endif; ?>

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
                                        <h4 class="mb-3">Gamer Login</h4>
                                        <form action="<?= site_url('loginAuth') ?>" method="post" class="row g-3">
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

                                        <p class="mt-4 text-center text-sm text-gray-700">
                                            Don't have an account? <a href="<?= site_url('register') ?>"
                                                class="text-emerald-600 hover:text-emerald-500">Register</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'scriptLT.php'; ?>
    </div>

</body>

</html>
