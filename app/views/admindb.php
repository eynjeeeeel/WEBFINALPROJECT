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
            flex-wrap: wrap; 
            gap: 30px;
            margin-left: 32px;
            margin-top: 30px;
        }


        .form-section {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 10px;
            height: 300px;
            width: 300px;

        }

        .form-section-min {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 10px;
            height: 300px;
            width: 230px;

        }

        .form-section-grade {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            height: 530px;
            width: 1400px;
            margin-top: 20px;
            margin-left: 30px;
            gap: 30px;
        }

        .form-section-qgrade {
            background-color: #fff;
            border-color: black;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            height: 400px;
            width: 300px;
            gap: 20px;
            flex: 1;
            margin-bottom: 20px;
        }


        form {
            display: flex;
            flex-direction: column;
            width: 300px;
            height: 300px;
        }

        .form1 {
            display: flex;
            flex-direction: column;
            width: 200px;
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
            <form action="<?= site_url('addfacilityinfo') ?>" method="POST">

                <label for="facility_name">Name:</label>
                <input type="text" class="form-control" id="facility_name" name="facility_name" required>

                <label for="facility_description">Description:</label>
                <input type="text" class="form-control" id="facility_description" name="facility_description" required>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </section>

        <section class="form-section-min">
            <h2>Teacher's Class Subject</h2>
            <form  class="form1" action="<?= site_url('addteachersinfo') ?>" method="POST">

            <label for="teacher_name">Teacher's Name:</label>
            <input type="text" class="form-control" id="teacher_name" name="teacher_name" required>

            <label for="teacher_subject">Subject:</label>
            <input type="text" class="form-control" id="teacher_subject" name="teacher_subject" required>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </section>

        <section class="form-section-min">
            <h2>Student's Emergency Contact</h2>
            <form class="form1" action="<?= site_url('addemergency') ?>" method="POST">

                <label for="emergency_name">Name:</label>
                <input type="text" class="form-control" id="emergency_name" name="emergency_name" required>

                <label for="emergency_contact">Contact:</label>
                <input type="text" class="form-control" id="emergency_contact" name="emergency_contact" required>

                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </section>
        
        <section class="form-section-min">
            <h2>Student's Health Information</h2>
            <form class="form1" action="<?= site_url('addhealthinfo') ?>" method="POST">
                <label for="blood_type">Blood Type:</label>
                <input type="text" class="form-control" id="blood_type" name="blood_type" required>

                <label for="allergies">Allergies:</label>
                <input type="text" class="form-control" id="allergies" name="allergies" required>

                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </section>

        <section class="form-section-min">
            <h2>Student's Development</h2>
            <form class="form1" action="<?= site_url('addbehavioralinfo') ?>" method="POST">

                <label for="behavior">Behavior:</label>
                <input type="text" class="form-control" id="behavior" name="behavior" required>

                <label for="social_skills">Social Skills:</label>
                <input type="text" class="form-control" id="social_skills" name="social_skills" required>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </section>
    </div>

<section class="form-section-grade">
    <h2 style="text-align:center">Student's Quarterly Grade</h2>
        <div class="form-row">
        
            <section class="form-section-qgrade">
                <h4 style="text-align:center">First Quarter Grading</h4>
                <form class="form1" action="<?= site_url('addfirstq') ?>" method="POST">
                    <label for="mathematics_grade">Math:</label>
                    <input type="text" class="form-control" id="mathematics_grade" name="mathematics_grade" required>

                    <label for="science_grade">Science:</label>
                    <input type="text" class="form-control" id="science_grade" name="science_grade" required>

                    <label for="art_grade">Art:</label>
                    <input type="text" class="form-control" id="art_grade" name="art_grade" required>

                    <label for="language_grade">Language:</label>
                    <input type="text" class="form-control" id="language_grade" name="language_grade" required>

                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </section> 
            
            <section class="form-section-qgrade">
                <h4 style="text-align:center">Second Quarter Grading</h4>
                <form class="form1" action="<?= site_url('addsecondq') ?>" method="POST">
                    <label for="mathematics_grade">Math:</label>
                    <input type="text" class="form-control" id="mathematics_grade" name="mathematics_grade" required>

                    <label for="science_grade">Science:</label>
                    <input type="text" class="form-control" id="science_grade" name="science_grade" required>

                    <label for="art_grade">Art:</label>
                    <input type="text" class="form-control" id="art_grade" name="art_grade" required>

                    <label for="language_grade">Language:</label>
                    <input type="text" class="form-control" id="language_grade" name="language_grade" required>

                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </section> 

            <section class="form-section-qgrade">
                <h4 style="text-align:center">Third Quarter Grading</h4>
                <form class="form1" action="<?= site_url('addthirdq') ?>" method="POST">
                    <label for="mathematics_grade">Math:</label>
                    <input type="text" class="form-control" id="mathematics_grade" name="mathematics_grade" required>

                    <label for="science_grade">Science:</label>
                    <input type="text" class="form-control" id="science_grade" name="science_grade" required>

                    <label for="art_grade">Art:</label>
                    <input type="text" class="form-control" id="art_grade" name="art_grade" required>

                    <label for="language_grade">Language:</label>
                    <input type="text" class="form-control" id="language_grade" name="language_grade" required>

                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </section> 
            
            <section class="form-section-qgrade">
                <h4 style="text-align:center">Fourth Quarter Grading</h4>
                <form class="form1" action="<?= site_url('addfourthq') ?>" method="POST">
                    <label for="mathematics_grade">Math:</label>
                    <input type="text" class="form-control" id="mathematics_grade" name="mathematics_grade" required>

                    <label for="science_grade">Science:</label>
                    <input type="text" class="form-control" id="science_grade" name="science_grade" required>

                    <label for="art_grade">Art:</label>
                    <input type="text" class="form-control" id="art_grade" name="art_grade" required>

                    <label for="language_grade">Language:</label>
                    <input type="text" class="form-control" id="language_grade" name="language_grade" required>

                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </section> 
            
        </section>
    </div>



</div>
</div>
</div>
</body>

</html>
