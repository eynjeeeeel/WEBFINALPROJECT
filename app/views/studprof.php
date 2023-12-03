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
            margin: auto;
            padding: 0;
            
        }



        .student-profile-container {
            margin: 50px 0;
        }

        .profile-section {
            margin-bottom: 30px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .profile-section h2 {
            color: #17a2b8; /* Heading color */
        }

        .update-btn {
            background-color: #17a2b8; /* Button background color */
            color: #fff; /* Button text color */
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>
<div class="container-xxl bg-white p-0">
    <!-- Navbar Start -->
<?php include 'navbarhome.php' ?>

<div class="container-xxl py-5 student-profile-container">
        <div class="container">
            <!-- Dashboard Section -->
            <div class="dashboard-section">
                <div class="row">
                    <!-- Academic Progress -->
                    <div class="col-md-3">
                        <div class="dashboard-item">
                            <h3>Academic Progress</h3>
                            <!-- Placeholder content -->
                            <p>Your academic progress will be displayed here.</p>
                        </div>
                    </div>

                    <!-- Grades -->
                    <div class="col-md-3">
                        <div class="dashboard-item">
                            <h3>Grades</h3>
                            <!-- Placeholder content -->
                            <p>Your grades will be displayed here.</p>
                        </div>
                    </div>

                    <!-- Schedules -->
                    <div class="col-md-3">
                        <div class="dashboard-item">
                            <h3>Schedules</h3>
                            <!-- Placeholder content -->
                            <p>Your schedules will be displayed here.</p>
                        </div>
                    </div>

                    <!-- Alerts -->
                    <div class="col-md-3">
                        <div class="dashboard-item">
                            <h3>Alerts</h3>
                            <!-- Placeholder content -->
                            <p>Any alerts or notifications will be displayed here.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Student Profile Section -->
            <div class="profile-section">
                <!-- Add your existing student profile content here -->
                <!-- For example, the Children's Information, Contacts, and Academic History sections -->
            </div>

            <!-- Financials Section -->
            <div class="profile-section">
                <h2 class="mb-3 class-title">Financials</h2>
                <!-- Add elements for financials -->
                <!-- Review tuition fees, payments, manage finances -->
                <!-- Placeholder content -->
                <p>Review tuition fees, payments, and manage finances will be available in this section.</p>
            </div>

            <!-- Campus Involvement Section -->
            <div class="profile-section">
                <h2 class="mb-3 class-title">Campus Involvement</h2>
                <!-- Add elements for campus involvement -->
                <!-- Browse student clubs/orgs/groups, RSVP for events -->
                <!-- Placeholder content -->
                <p>Browse student clubs/orgs/groups and RSVP for events will be accessible in this section.</p>
            </div>

        </div>
    </div>
    <!-- Student Profile End -->

    <!-- Footer Start -->
    <footer class="bg-green text-center py-3">
        <p class="m-0 text-white">&copy; 2023 ACMCL. All rights reserved.</p>
    </footer>
    </div>
    <!-- Footer End -->

    <!-- Bootstrap Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
