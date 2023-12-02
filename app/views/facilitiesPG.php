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
        <?php include 'navbarhome.php' ?>
    
        <!-- Facilities Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">School Facilities</h1>
                    <p>A safe facility for children</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="facility-item">
                            <div class="facility-icon bg-primary">
                                <i class="fa fa-palette fa-3x text-primary"></i>
                            </div>
                            <div class="facility-text bg-primary">
                                <h3 class="text-primary mb-3">Art and Creativity Spaces</h3>
                                <p class="mb-0">Explore creativity at our kindergarten's Art and Creativity Spaces, where kids have fun in colorful art rooms and play areas. These special places are designed for little learners to discover and showcase what's in their imagination.</p>
                                <p class="mb-0"><strong>Details:</strong> Equipped with painting easels, crafting materials, and a dedicated space for imaginative play.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Continue the pattern for the other facilities -->
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="facility-item">
                            <div class="facility-icon bg-success">
                                <i class="fa fa-futbol fa-3x text-success"></i>
                            </div>
                            <div class="facility-text bg-success">
                                <h3 class="text-success mb-3">Playground</h3>
                                <p class="mb-0">Our playground features age-appropriate equipment like slides, swings, and climbing structures where kids can play, explore, and be active. There's plenty of space for games, running around, and using their imaginations outdoors.</p>
                                <p class="mb-0"><strong>Details:</strong> Safety-certified equipment including a mini obstacle course and a dedicated area for imaginative play.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="facility-item">
                            <div class="facility-icon bg-warning">
                                <i class="fa fa-home fa-3x text-warning"></i>
                            </div>
                            <div class="facility-text bg-warning">
                                <h3 class="text-warning mb-3">Healthy Canteen</h3>
                                <p class="mb-0">Our canteen offers wholesome, nutritious meal options for kids made from locally-sourced ingredients. We provide tasty, energizing foods to power young minds and growing bodies while instilling healthy eating habits.</p>
                                <p class="mb-0"><strong>Details:</strong> Menu includes balanced meals with a focus on fresh, locally-sourced produce. Comfortable seating area for kids to enjoy their meals.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="facility-item">
                            <div class="facility-icon bg-info">
                                <i class="fa fa-puzzle-piece fa-3x text-info"></i>
                            </div>
                            <div class="facility-text bg-info">
                                <h3 class="text-info mb-3">Learning Resources</h3>
                                <p class="mb-0">Discover and have fun in our kindergarten's special learning zone, filled with things perfect for your age. It's a cool place where you can learn and play with interesting stuff!</p>
                                <p class="mb-0"><strong>Details:</strong> Educational materials, interactive displays, and a dedicated reading corner to foster a love for learning.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <?php include 'scriptLT.php'; ?>
</body>
</html>
