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
                <!-- Class item for Art & Drawing -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="classes-item">
                        <div class="bg-light rounded-circle w-75 mx-auto p-3">
                            <img class="img-fluid rounded-circle rounded-circle-img" src="public/img/classes-1.jpg" alt="Class Image">
                        </div>
                        <div class="bg-light rounded p-4 pt-5 mt-n5">
                            <a class="d-block text-center h3 mt-3 mb-4 class-title" href="">Art & Drawing</a>
                            <div class="d-flex align-items-center justify-content-between mb-4 teacher-info">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle flex-shrink-0" src="public/img/user.jpg" alt="" style="width: 45px; height: 45px;">
                                    <div class="ms-3">
                                        <h6 class="mb-1">Teacher: Jhon Doe</h6>
                                        <small>Age: 3-5 Years</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-1">
                                <div class="col-6">
                                    <div class="border-top border-3 border-primary pt-2">
                                        <h6 class="mb-1">Time: 9-10 AM</h6>
                                        <small>Capacity: 30 Kids</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Class item for Math -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="classes-item">
                        <div class="bg-light rounded-circle w-75 mx-auto p-3">
                            <img class="img-fluid rounded-circle rounded-circle-img" src="public/img/math.jpeg" alt="Class Image">
                        </div>
                        <div class="bg-light rounded p-4 pt-5 mt-n5">
                            <a class="d-block text-center h3 mt-3 mb-4 class-title" href="">Math</a>
                            <div class="d-flex align-items-center justify-content-between mb-4 teacher-info">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle flex-shrink-0" src="public/img/user.jpg" alt="" style="width: 45px; height: 45px;">
                                    <div class="ms-3">
                                        <h6 class="mb-1">Teacher: Jane Smith</h6>
                                        <small>Age: 4-6 Years</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-1">
                                <div class="col-6">
                                    <div class="border-top border-3 border-primary pt-2">
                                        <h6 class="mb-1">Time: 10-11 AM</h6>
                                        <small>Capacity: 25 Kids</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                    <!-- Class item for Language -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle rounded-circle-img" src="public/img/lang.jpg" alt="Class Image">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4 class-title" href="">Language</a>
                                <div class="d-flex align-items-center justify-content-between mb-4 teacher-info">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle flex-shrink-0" src="public/img/user.jpg" alt="" style="width: 45px; height: 45px;">
                                        <div class="ms-3">
                                            <h6 class="mb-1">Teacher: Maria Rodriguez</h6>
                                            <small>Age: 4-6 Years</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-1">
                                    <div class="col-6">
                                        <div class="border-top border-3 border-primary pt-2">
                                            <h6 class="mb-1">Time: 11-12 AM</h6>
                                            <small>Capacity: 25 Kids</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Class item for Science -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle rounded-circle-img" src="public/img/science.jpg" alt="Class Image">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4 class-title" href="">Science</a>
                                <div class="d-flex align-items-center justify-content-between mb-4 teacher-info">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle flex-shrink-0" src="public/img/user.jpg" alt="" style="width: 45px; height: 45px;">
                                        <div class="ms-3">
                                            <h6 class="mb-1">Teacher: Robert Johnson</h6>
                                            <small>Age: 5-7 Years</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-1">
                                    <div class="col-6">
                                        <div class="border-top border-3 border-primary pt-2">
                                            <h6 class="mb-1">Time: 1-2 PM</h6>
                                            <small>Capacity: 20 Kids</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Add class items for Social Science, Music, Health and Safety, and Physical Education similarly -->


                
            </div>
        </div>
    </div>
    <!-- Classes End -->
    </div>
</body>

</html>
