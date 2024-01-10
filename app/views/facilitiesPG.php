<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- Favicon -->
    <link href="public/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="public/lib/animate/animate.min.css" rel="stylesheet">
    <link href="public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="public/css/style.css" rel="stylesheet">
    
    <style>
        /* Add your custom styles here */
        body {
            font-family: 'Heebo', sans-serif;
        }
        
        .container-xxl {
            padding: 0;
        }

        .facility-item {
            margin-bottom: 30px;
        }

        .facility-icon {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100px;
            background-color: #f8f9fa; /* Use Bootstrap color or your custom color */
            border-radius: 50%;
        }

        .facility-icon i {
            color: #007bff; /* Use Bootstrap color or your custom color */
        }

        .facility-text {
            padding: 20px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="container-xxl bg-white p-0">
        <?php include 'navbarhome.php';
        $icons = [
            'palette' => 'fa-palette',
            'futbol' => 'fa-futbol',
            'home' => 'fa-home',
            'puzzle-piece' => 'fa-puzzle-piece',
            // Add more icons as needed
        ];$colors = [
            'primary',
            'success',
            'warning',
            'info',
            // Add more color classes as needed
        ];
        ?>
    
        <!-- Facilities Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">School Facilities</h1>
            <p>A safe facility for children</p>
        </div>
        <div class="row g-4">
        <?php foreach ($facilities as $facility): ?>
                <?php
                // Randomly select an icon and color for each facility
                $randomIconKey = array_rand($icons);
                $iconClass = $icons[$randomIconKey];
                $randomColorKey = array_rand($colors);
                $colorClass = $colors[$randomColorKey];
                ?>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="facility-item">
                        <div class="facility-icon bg-<?= $colorClass; ?>">
                            <i class="fa <?= $iconClass; ?> fa-3x text-<?= $colorClass; ?>"></i>
                        </div>
                        <div class="facility-text bg-<?= $colorClass; ?>">
                            <h3 class="text-<?= $colorClass; ?> mb-3"><?= htmlspecialchars($facility['Name']); ?></h3>
                            <p class="mb-0"><?= htmlspecialchars($facility['Description']); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Facilities End -->

        
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <?php include 'scriptLT.php'; ?>
</body>
</html>
