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

<div class="container-xxl bg-white p-0">
        <!-- User Profile Start -->
        <div class="container-xxl py-5">
        <?php if (!empty($_SESSION['errors'])): ?>
            <div class="alert alert-danger" role="alert">
                <strong class="font-weight-bold">Error!</strong>
                <span class="d-block">
                    <?php
                    $errorMessages = is_array($_SESSION['errors']) ? $_SESSION['errors'] : [$_SESSION['errors']];
                    echo implode('<br>', $errorMessages);
                    ?>
                </span>
            </div>
        <?php endif; ?>

        <?php if (!empty($_SESSION['success'])): ?>
            <div class="alert alert-success" role="alert">
                <strong class="font-weight-bold">Success!</strong>
                <span class="d-block">
                    <?php echo $_SESSION['success']; ?>
                </span>
            </div>
        <?php endif; ?>
            <div class="container">
                <form action="<?= site_url('studprofone') ?>" method="POST">
                    <div class="row g-4">
                        <!-- Select Child Dropdown -->
                        <div class="col-12 mb-4">
                            <select id="childSelect" class="form-select" name="child_id" onchange="this.form.submit()">
                                <?php foreach($children as $child): ?>
                                    <option value="<?= $child['ChildID']; ?>" <?= isset($selectedChild) && $selectedChild['ChildID'] == $child['ChildID'] ? 'selected' : ''; ?>>
                                        <?= $child['Name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        
                        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
    <div class="profile-item">
        <div class="bg-light">
            <img class="img-fluid rounded-circle rounded-circle-img" src="public/uploads/children/<?= !empty($selectedChild['PhotoPath']) ? $selectedChild['PhotoPath'] : 'default-image.jpg'; ?>" alt="Profile Image">
        </div>
        <div class="bg-light rounded p-4">
            <?php if (!empty($selectedChild['Name'])): ?>
                <div class="d-block text-center h3 mt-3 mb-4 profile-title"><?= $selectedChild['Name']; ?></div>
            <?php endif; ?>

            <div class="d-flex align-items-center justify-content-between mb-4 profile-info">
                <div class="d-flex align-items-center">
                    <i class="bi bi-calendar-event me-2"></i>
                    <div class="ms-2">
                        <?php if (!empty($selectedChild['Age'])): ?>
                            <h6 class="mb-1">Age: <?= $selectedChild['Age']; ?></h6>
                        <?php endif; ?>
                        <?php if (!empty($selectedChild['Birthday'])): ?>
                            <small style="color: #dc3545;">Birthday: <?= date("F d, Y", strtotime($selectedChild['Birthday'])); ?></small>
                        <?php endif; ?>
                    </div>
                </div>

                <?php if (!empty($selectedChild['Gender'])): ?>
                    <div class="d-flex align-items-center">
                        <i class="bi bi-person me-2"></i>
                        <div class="ms-2">
                            <h6 class="mb-1">Gender: <?= $selectedChild['Gender']; ?></h6>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <?php if (!empty($selectedChild['Address'])): ?>
                <div class="border-top">
                    <h6 class="mb-1">Address: <?= $selectedChild['Address']; ?></h6>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>


                        <!-- Additional Information on the Right -->
                        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="row g-4">
                                <!-- Emergency Contact -->
                                <div class="col-md-6">
                                    <div class="profile-item">
                                        <div class="bg-light rounded p-4">
                                            <div class="d-block text-center h3 mt-3 mb-4 profile-title">Emergency Contact</div>
                                            <div class="border-top">
                                            <?php if (!empty($emergencyContact)): ?>
    <h6 class="mb-1">Name: <?= $emergencyContact['Name']; ?></h6>
    <small>Contact: <?= $emergencyContact['ContactNumber']; ?></small>
<?php else: ?>
    <p>No emergency contact information available.</p>
<?php endif; ?>
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
                                            <?php if (!empty($healthInfo)): ?>
    <h6 class="mb-1">Blood Type: <?= $healthInfo['BloodType']; ?></h6>
    <small>Allergies: <?= $healthInfo['Allergies']; ?></small>
<?php else: ?>
    <p>No health information available.</p>
<?php endif; ?>
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
                                            <?php if (!empty($behavioralDevelopment)): ?>
    <h6 class="mb-1">Behavior: <?= $behavioralDevelopment['Behavior']; ?></h6>
    <small>Social Skills: <?= $behavioralDevelopment['SocialSkills']; ?></small>
<?php else: ?>
    <p>No behavioral or social development information available.</p>
<?php endif; ?>
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
                                        <img class="img-fluid rounded-circle rounded-circle-img" src="public/uploads/children/<?= !empty($selectedChild['PhotoPath']); ?>" alt="Profile Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- User Profile End -->
    </div>
    <!-- (Insert any additional scripts or closing tags here) -->
</body>

</html>
