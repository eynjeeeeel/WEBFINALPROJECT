<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
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
        /* Custom styles for the about section */

        .about-section {
            background-color: #f8f9fa; /* Light background color */
            padding: 50px 0;
        }

        .about-heading {
            color: #007bff; /* Primary color for heading */
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 30px;
        }

        .about-content {
            line-height: 1.6;
            color: #495057; /* Text color */
        }

        .director-info {
            background-color: #007bff; /* Primary color for director info */
            color: #fff; /* Text color for director info */
            padding: 15px;
            border-radius: 10px;
            margin-top: 30px;
        }

        .director-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
        }

        .about-images img {
            width: 100%;
            height: auto; /* Adjusted height property */
            border-radius: 15px;
            margin-bottom: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <?php include 'navbarhome.php';?>

    <!-- Redesigned About Section -->
    <div class="about-section">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="about-heading mb-4">Discover Our Enriching Cultural Programs</h1>
                    <p class="about-content">At our kindergarten, we go beyond traditional education. We immerse children in a world of cultural activities designed to stimulate their minds and foster creativity. Through engaging drama programs, music activities, and visual arts projects, we aim to ignite the spark of imagination and build confidence in every child.</p>
                    <p class="about-content">Our unique approach includes hosting special events that connect children with local traditions, from harvest festivals to holiday celebrations. These events allow kids to try traditional foods, play historic games, and participate in cultural experiences, creating lasting memories and a sense of community.</p>
                    <p class="about-content">We believe in the power of diversity and inclusion. Our dedicated team, led by Mr. & Mrs. Dolor, Directors of our kindergarten, is committed to providing an enriching environment that goes beyond letters and numbers. Join us on this exciting journey of learning and cultural exploration!</p>
                    <div class="director-info">
                        <div class="d-flex align-items-center">
                            <img class="director-image" src="public/img/user.jpg" alt="Director Image">
                            <div class="ms-3">
                                <h6 class="mb-1">Mr. & Mrs. Dolor</h6>
                                <small>Directors of the Kindergarten</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 about-images wow fadeInUp" data-wow-delay="0.5s">
                    
                    <div class="row">
                       
                        <div class="col-6"> <img class="img-fluid" src="public/img/about-1.jpg" alt="About Image 1">
                            <img class="img-fluid" src="public/img/about-2.jpg" alt="About Image 2">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid" src="public/img/about-3.jpg" alt="About Image 3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>