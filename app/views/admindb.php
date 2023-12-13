<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 3px;
        }

        .navbar {
            display: flex;
            align-items: center;
            padding: 5px 20px;
            background-color: #333;
            color: #fff;
        }

        .navbar img {
            height: 100px;
            margin-left: 150px;
        }

        .site-title {
            font-size: 1.5em;
            font-weight: bold;
            justify-content: space-between;
            margin-right: 250px;
        }

        .btn-container {
            display: flex;
            gap: 10px;
        }

        .btn-logout {
            background-color: #28a745;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin-left: 50px;
        }

        .btn-logout:hover {
            background-color: #218838;
        }

        .form-row {
            display: flex;
            gap: 5px;
            margin-bottom: 20px;
            justify-content: space-between;
            margin-left: 30px;
            margin-right: 30px;
            margin-top: 30px;
        }

        .form-section {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            height: 300px;

        }

        form {
            display: flex;
            flex-direction: column;
            width: 400px;
            height: 300px;
        }

        label {
            margin-bottom: 8px;
        }

        input,
        textarea {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>

<body>
<div class="container-xxl bg-white p-0">
        <div class="container-fluid service py-6">
            <div class="container">
    <header>
        <div class="navbar">
            <img src="public/img/acmcl-logo.png" alt="">
            <div class="site-title"><h2>ACMCL </h2></div>
            <div class="site-title"><h2>Admin Dashboard</h2></div>
            <div class="btn-container">
                <a href="adminlogout" class="btn-logout rounded-pill">Logout and Back to Home</a>
            </div>
        </div>
    </header>

    <div class="form-row">
        <section class="form-section">
            <h2>School Facilities</h2>
            <form action="submit_facilities.php" method="post">
                <label for="facility_name">Name:</label>
                <input type="text" name="facility_name" required>
                <label for="facility_description">Description:</label>
                <textarea name="facility_description" required></textarea>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </section>

        <section class="form-section">
            <h2>School Teachers Information</h2>
            <form action="submit_teachers.php" method="post">
                <label for="teacher_name">Teacher's Name:</label>
                <input type="text" name="teacher_name" required>
                <label for="teacher_subject">Subject:</label>
                <input type="text" name="teacher_subject" required>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </section>

        <section class="form-section">
            <h2>Student's Emergency Contact</h2>
            <form action="<?= site_url('addemergency') ?>" method="POST">

                <label for="emergency_name">Name:</label>
                <input type="text" class="form-control" id="emergency_name" name="emergency_name" required>

                <label for="emergency_contact">Contact:</label>
                <input type="text" class="form-control" id="emergency_contact" name="emergency_contact" required>

                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </section>
    </div>

    <div class="form-row">
        <section class="form-section">
            <h2>Student's Health Information</h2>
            <form action="<?= site_url('addhealthinfo') ?>" method="POST">
                <label for="blood_type">Blood Type:</label>
                <input type="text" class="form-control" id="blood_type" name="blood_type" required>

                <label for="allergies">Allergies:</label>
                <input type="text" class="form-control" id="allergies" name="allergies" required>

                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </section>

        <section class="form-section">
            <h2>Student's Behavioral & Social Development</h2>
            <form action="submit_behavioral_social.php" method="post">
                <label for="behavior">Behavior:</label>
                <textarea name="behavior" required></textarea>
                <label for="social_skills">Social Skills:</label>
                <textarea name="social_skills" required></textarea>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </section>
        <!-- Add more sections/forms as needed -->
    </div>
            </div></div></div>
</body>

</html>
