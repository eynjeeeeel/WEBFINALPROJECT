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

    <!-- Add your custom styles for improved aesthetics -->
<style>
    .container-xxl {
        background-color: #f8f9fa; /* Light background color */
    }

    .profile-item {
        border: 2px solid #28a745; /* Border color - Green */
        border-radius: 15px; /* Rounded corners */
        overflow: hidden;
        transition: transform 0.3s ease-in-out;
        margin-bottom: 20px;
    }

    .profile-item:hover {
        transform: scale(1.05); /* Scale on hover */
    }

    .rounded-circle-img {
        width: 100%;
        height: auto;
        border-radius: 50%;
        object-fit: cover;
    }

    .profile-title {
        color: #28a745; /* Title color - Green */
        font-size: 24px; /* Larger font size */
    }

    .profile-info {
        color: #6c757d; /* Profile info color */
    }

    .bg-light {
        background-color: #fff; /* White background */
        box-shadow: 0 4px 8px rgba(40, 167, 69, 0.1); /* Green shadow */
        padding: 20px;
    }

    .border-top {
        border-top: 2px solid #28a745; /* Green border */
        margin-top: 15px;
        padding-top: 10px;
    }

    .profile-item .profile-info small {
        color: #dc3545; /* Red color for info */
    }
</style>

</head>

<body>
    <div class="container-xxl bg-white p-0">


        <!-- User Profile Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">

                    <!-- Student information on the left -->
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="profile-item">
                            <div class="bg-light">
                                <img class="img-fluid rounded-circle rounded-circle-img" src="public/img/studprof.jpg" alt="Profile Image">
                            </div>
                            <div class="bg-light rounded p-4">
                                <div class="d-block text-center h3 mt-3 mb-4 profile-title">Charlomie Salvie</div>
                                <div class="d-flex align-items-center justify-content-between mb-4 profile-info">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-calendar-event me-2"></i>
                                        <div class="ms-2">
                                            <h6 class="mb-1">Age: 5</h6>
                                            <small style="color: #dc3545;">Birthday: March 10, 2018</small>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person me-2"></i>
                                        <div class="ms-2">
                                            <h6 class="mb-1">Gender: Male</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <h6 class="mb-1">Address: 123 ABC Street, Cityville</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                   <!-- Additional information on the right in a 2x2 grid -->
<div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">

<div class="row g-4">

    <!-- Emergency Contact -->
    <div class="col-md-6">
        <div class="profile-item">
            <div class="bg-light rounded p-4">
                <div class="d-block text-center h3 mt-3 mb-4 profile-title">Emergency Contact</div>
                <div class="border-top">
                    <h6 class="mb-1">Name: Leynard</h6>
                    <small>Contact: 09999999999</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Health Information -->
    <div class="col-md-6">
        <div class="profile-item">
            <div class="bg-light rounded p-4">
                <div class="d-block text-center h3 mt-3 mb-4 profile-title">Health Information</div>
                <div class="border-top">
                    <h6 class="mb-1">Blood Type: O+</h6>
                    <small>Allergies: Sinus</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Behavioral and Social Development -->
    <div class="col-md-6">
        <div class="profile-item">
            <div class="bg-light rounded p-4">
                <div class="d-block text-center h3 mt-3 mb-4 profile-title">Behavioral & Social Development</div>
                <div class="border-top">
                    <h6 class="mb-1">Behavior: Cognitive</h6>
                    <small>Social Skills: Developing</small> 
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Photograph -->
    <div class="col-md-6">
        <div class="profile-item">
            <div class="bg-light rounded p-4">
                <div class="d-block text-center h3 mt-3 mb-4 profile-title">Recent Photograph</div>
                <div class="border-top">
                    <!-- Add an image or link to the recent photograph here -->
                    <img class="img-fluid" src="public/img/studprof2.jpg" alt="Recent Photograph">
                    
                </div>
            </div>
        </div>
    </div>

</div>
</div>


                </div>
            </div>
        </div>
        <!-- User Profile End -->
    </div>
</body>

</html>
