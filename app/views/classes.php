<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="keywords">
    <meta content="" name="description">

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
            background-color: #f8f9fa; /* Light background color */
        }

        .classes-item {
            border: 2px solid #17a2b8; /* Border color */
            border-radius: 15px; /* Rounded corners */
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
            margin-bottom: 20px;
        }

        .classes-item:hover {
            transform: scale(1.05); /* Scale on hover */
        }

        .rounded-circle-img {
            width: 300px;
            height: 175px;
            border-radius: 50%;
            object-fit: cover;
        }

        .class-title {
            color: #17a2b8; /* Title color */
        }

        .teacher-info {
            color: #6c757d; /* Teacher info color */
        }

        .border-primary {
            border-color: #17a2b8 !important; /* Border color */
        }

        .border-success {
            border-color: #28a745 !important; /* Border color */
        }

        .border-warning {
            border-color: #ffc107 !important; /* Border color */
        }
    </style>
</head>

<body>
<div class="container-xxl bg-white p-0">
    <?php include 'navbarhome.php';?>

    <!-- Classes Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3 class-title">Fun Classes for Kids</h1>
                <p>Exciting classes designed for young minds!</p>
            </div>
            <div class="row g-4">
             <!-- Classes Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
        <?php foreach ($classes as $class): ?>
<div class="col-lg-4 col-md-6 wow fadeInUp">
    <div class="classes-item">
        <div class="bg-light rounded-circle w-75 mx-auto p-3">
            <img class="img-fluid rounded-circle" src="<?=site_url('public/img/' . ($class['Image'])) ?>" alt="Class Image">
        </div>
        <div class="bg-light rounded p-4 pt-5 mt-n5">
            <a class="d-block text-center h3 mt-3 mb-4" href="#"><?= ($class['SubjectName']); ?></a>
            <div class="d-flex align-items-center justify-content-between mb-4">
                <img class="rounded-circle" src="<?=site_url('public/img/' . ($class['ProfilePicPath'])) ?>" alt="" style="width: 45px; height: 45px;">
                <div class="ms-3">
                    <h6 class="mb-1">Teacher: <?= ($class['TeacherName']); ?></h6>
                    <small>Age Group: <?= ($class['AgeGroup']); ?></small>
                </div>
            </div>
            <div class="border-top border-3 pt-2">
                <h6 class="mb-1">Time: <?= ($class['Time']); ?></h6>
                <small>Capacity: <?= ($class['Capacity']); ?> Kids</small>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>


        </div>
    </div>
</div>
<!-- Classes End -->

    </div>
</body>

</html>
