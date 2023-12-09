<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php' ?>
    <style>
        /* Add your custom styles here */
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            background-color: #f8f9fa; /* Light gray background */
            margin: auto; /* Remove default margin */
            margin-top: -30px;
            padding: 50px; /* Remove default padding */
            width: 1200px;
            height: 700px;
        }
        .navbar-brand {
            color: #28a745; /* Green color for the company name */
            font-weight: bold;
            font-size: 24px;
        }
        .navbar {
            background-color: #ffffff; /* White background for the navbar */
            border-bottom: 2px solid #28a745; /* Green border at the bottom */
            height: 100px;
        }
        .btn-login {
            background-color: #28a745; /* Green color for the login button */
            border-color: #28a745;
            color: #ffffff; /* White text color */
        }
        /* Add styles for the kindergarten picture */
        .kindergarten-picture {
            width: 80%;
            max-height: 400px;
            object-fit: cover;
            border-radius: 10px; /* Rounded corners */
            margin-top: 10px;
            margin-bottom: 1px;
            margin-left: 135px;
        }
        /* Add styles for the About Us section */
        .about-section {
            background-color: #ffffff; /* White background */
            padding: 30px;
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Light shadow */
        }
        .card-title{
            font-size: 30px;
            text-align: center;
        }

        .card-text{
            font-size: 15px;
            text-align: center;
        }
        /* Add background color to the contact section */
        .contact-section {
            background-color: #f8f9fa; /* Light gray background */
            padding: 50px;
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Light shadow */
        }
    </style>
</head>
<body>
    <div class="container-xxl bg-white p-0">
        <div class="navbar navbar-expand-lg navbar-light">
            <img src="public/img/acmcl-logo.png" alt="" style="margin-left: 60px" height="90">
            <a href="index.html" class="navbar-brand" >
                <h1 class="m-0" style="margin-left: 60px">ACMCL</h1>
            </a>
            <div class=" justify-content-end align-items-center w-100" style="margin-left: 600px">
                <a href="login" class="btn btn-primary btn-login rounded-pill px-3">Login / Sign Up<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </div>

        <!-- Kindergarten Picture -->
        <div class="container-fluid">
            <img src="public/img/Slide2.PNG" class="img-fluid kindergarten-picture" alt="Kindergarten">
        </div>

        <!-- About the Company -->
        <div class="container about-section">
            <div class="row">
                <div class="col-sm-8 mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Welcome to ACMCL Kindergarten!</h5>
                            <p class="card-text">At ACMCL Kindergarten, we provide a nurturing and creative environment for your little ones to explore, learn, and grow. Our dedicated team ensures a joyful learning experience with a focus on building a strong foundation for a bright future.</p>
                            <h5 class="card-title">Our Values</h5>
                            <p class="card-text">We are committed to fostering a love for learning, creativity, and holistic development in every child. Discover the unique approach that sets ACMCL Kindergarten apart.</p>
                            <a href="login" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Contact Us!</h5>
                            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Poblacion I, Victoria, Oriental Mindoro</p>
                            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>09662057494</p>
                            <p class="mb-2"><i class="fa fa-envelope me-3"></i>acmontessori@gmail.com</p>
                            <div class="d-flex pt-2">
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter" style="color: black;"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f" style="color: black;"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube" style="color: black;"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in" style="color: black;"></i></a>
                            </div>
                            <a href="login" class="btn btn-primary">Contact Now</a>
                        </div>
                    </div>
                </div>
            </div> 

        </div>

    </div>  
    <?php include 'scriptLT.php' ?>
</body>
</html>
