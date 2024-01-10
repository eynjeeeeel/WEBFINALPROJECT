<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
body {
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
}

.container {
    width: 90%;
    margin: auto;
}

.navbar {
    background-color: #333;
    color: white;
    padding: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.navbar img {
    width: 50px; /* Adjust as needed */
}

.site-titles h1, .site-titles h2 {
    margin: 0;
}

.btn-logout {
    background-color: #ff4500;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    text-decoration: none;
}

.alert {
    margin-top: 20px;
    padding: 15px;
    border-radius: 5px;
}

.alert-danger {
    background-color: #ffcccb;
}

.alert-success {
    background-color: #ddffcc;
}

.form-section {
    background-color: white;
    padding: 20px;
    border-radius: 5px;
    margin-top: 20px;
}

footer {
    text-align: center;
    margin-top: 40px;
    padding: 20px 0;
    background-color: #333;
    color: white;
}
.form-section-grade .form-section-qgrade {
    padding: 15px;
    background-color: #f8f9fa;
    border-radius: 8px;
    margin-bottom: 20px;
    box-shadow: 0 2px 4px rgba(0,0,0,.1);
}

@media (max-width: 767px) {
    .form-section-grade .col-md-3 {
        flex: 0 0 100%;
        max-width: 100%;
    }
}

/* Add more styling as needed */


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
                <a href="<?= site_url('logout') ?>" class="btn-logout rounded-pill">Logout and Back to Home</a>
            </div>
        </div>
    </header>
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
    <div class="form-row">
    <section class="form-section">
    <h2>School Facilities</h2>
    <form action="<?= site_url('addFacility') ?>" method="POST">
        <label for="facility_name">Name:</label>
        <input type="text" class="form-control" id="facility_name" name="facility_name" required>

        <label for="facility_description">Description:</label>
        <textarea class="form-control" id="facility_description" name="facility_description" required></textarea>

        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</section>
<section class="form-section">
    <h2>Add New Subject</h2>
    <form action="<?= site_url('addSubject') ?>" method="POST" enctype="multipart/form-data">
        <label for="subject_name">Subject Name:</label>
        <input type="text" class="form-control" id="subject_name" name="subject_name" required>

        <label for="age_group">Age Group:</label>
        <input type="text" class="form-control" id="age_group" name="age_group" required>

        <label for="time">Time:</label>
        <input type="text" class="form-control" id="time" name="time" required>

        <label for="capacity">Capacity:</label>
        <input type="number" class="form-control" id="capacity" name="capacity" required>

        <label for="image">Image:</label>
        <input type="file" class="form-control" id="image" name="image">

        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</section>

<section class="form-section">
    <h2>Teacher Assignment</h2>
    <form action="<?= site_url('addTeacherAssignment') ?>" method="POST">
        <label for="teacher_id">Teacher's Name:</label>
        <select class="form-select" id="teacher_id" name="teacher_id" required>
        <?php foreach ($teachers as $teacher): ?>
            <option value="<?= htmlspecialchars($teacher['TeacherID']); ?>"><?= htmlspecialchars($teacher['Name']); ?></option>
        <?php endforeach; ?>
    </select>>

        <label for="subject_id">Subject:</label>
        <select class="form-select" id="subject_id" name="subject_id" required>
        <?php foreach ($subjects as $subject): ?>
            <option value="<?= htmlspecialchars($subject['SubjectID']); ?>"><?= htmlspecialchars($subject['Name']); ?></option>
        <?php endforeach; ?>
    </select>

        <label for="additional_details">Additional Details:</label>
        <textarea class="form-control" id="additional_details" name="additional_details"></textarea>

        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</section>

<section class="form-section">
    <h2>Add Teacher</h2>
    <form action="<?= site_url('addTeacher') ?>" method="POST" enctype="multipart/form-data">
    <label for="teacher_name">Teacher's Name:</label>
    <input type="text" class="form-control" id="teacher_name" name="teacher_name" required>

    <label for="profile_pic">Profile Picture:</label>
    <input type="file" class="form-control" id="profile_pic" name="profile_pic">

    <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>
</section>
<section class="form-section">
    <h2>Add Announcement</h2>
    <form action="<?= site_url('addAnnouncement') ?>" method="POST">
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>


</section>


      <div class="container-fluid" style="background-color: wheat; padding: 30px; border-radius: 50px">
      <h2>Select Student</h2>
      <select class="form-control" id="studentSelect" onchange="loadStudentData()">
    <option value="">--Select a Student--</option>
    <?php foreach ($students as $student): ?>
        <option value="<?= htmlspecialchars($student['ChildID']); ?>"><?= htmlspecialchars($student['Name']); ?></option>
    <?php endforeach; ?>
</select>

<section class="form-section-grade">
    <h2>Add Student</h2>
    <form action="<?= site_url('addChild') ?>" method="POST" enctype="multipart/form-data">
        <div class="row">
            <!-- Student Information -->
            <div class="col-md-6">
                <h3>Student's Information</h3>
                <label for="child_id">Child's ID:</label>
                <input  class="form-control"  type="text" id="child_id" name="child_id" readonly>
                <label for="child_name" >Child's Name:</label>
                <input  type="text" class="form-control" id="child_name" name="child_name" required>

                <label for="child_age">Age:</label>
                <input type="number" class="form-control" id="child_age" name="child_age" required>

                <label for="child_birthday">Birthday:</label>
                <input type="date" class="form-control" id="child_birthday" name="child_birthday" required>

                <label for="child_gender">Gender:</label>
                <select class="form-control" id="child_gender" name="child_gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>

                <label for="child_address">Address:</label>
                <input type="text" class="form-control" id="child_address" name="child_address" required>

                <label for="photo">Photo:</label>
                <input type="file" class="form-control" id="photo" name="photo">
            </div>

            <!-- Emergency Contact -->
            <div class="col-md-6">
                <h3>Student's Emergency Contact</h3>
                <label for="emergency_name">Name:</label>
                <input type="text" class="form-control" id="emergency_name" name="emergency_name" required>

                <label for="emergency_contact">Contact:</label>
                <input type="text" class="form-control" id="emergency_contact" name="emergency_contact" required>
            </div>
        </div>

        <div class="row">
            <!-- Health Information -->
            <div class="col-md-6">
                <h3>Student's Health Information</h3>
                <label for="blood_type">Blood Type:</label>
                <input type="text" class="form-control" id="blood_type" name="blood_type" required>

                <label for="allergies">Allergies:</label>
                <input type="text" class="form-control" id="allergies" name="allergies" required>
            </div>

            <!-- Development Information -->
            <div class="col-md-6">
                <h3>Student's Development</h3>
                <label for="behavior">Behavior:</label>
                <input type="text" class="form-control" id="behavior" name="behavior" required>

                <label for="social_skills">Social Skills:</label>
                <input type="text" class="form-control" id="social_skills" name="social_skills" required>
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</section>


        



<!-- <section class="form-section-grade">
    
    <h2 style="text-align:center">Student's Quarterly Grade</h2>

        <div class="row">
         
            <div class="row">
            <div class="col-md-3">
                <h4 style="text-align:center">    First Quarter Grading</h4>
                <form class="form1" action="<?= site_url('addfirstq') ?>" method="POST">
                <input type="hidden" id="child_id" name="child_id">
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
            </div>
     
            
          
            <div class="col-md-3">
                <h4 style="text-align:center">Second Quarter Grading</h4>
                <form class="form1" action="<?= site_url('addsecondq') ?>" method="POST">
                <input type="hidden" id="child_id" name="child_id">
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
            </div>
         
       
            <div class="col-md-3">
                <h4 style="text-align:center">Third Quarter Grading</h4>
                <form class="form1" action="<?= site_url('addthirdq') ?>" method="POST">
                <input type="hidden" id="child_id" name="child_id">    
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
            </div>
        
            
         
            <div class="col-md-3">
                <h4 style="text-align:center">Fourth Quarter Grading</h4>
                <form class="form1" action="<?= site_url('addfourthq') ?>" method="POST">
                <input type="hidden" id="child_id" name="child_id">
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
            </div>
        </div>
        
            </div> 
        </section> -->
    </div>
    </div>


</div>
</div>
</div>
<script>
function loadStudentData() {
    var studentId = document.getElementById('studentSelect').value;
    if (studentId) {
        // AJAX request to fetch student data
        fetch('<?= site_url("getStudentData/") ?>' + studentId)
            .then(response => response.json())
            .then(student => {
                // Populate the form fields with the student's data
                document.getElementById('child_id').value = student.ChildID;
                document.getElementById('child_name').value = student.ChildName;
                document.getElementById('child_age').value = student.Age;
                document.getElementById('child_birthday').value = student.Birthday;
                document.getElementById('child_gender').value = student.Gender;
                document.getElementById('child_address').value = student.Address;

                // Assuming you have fields for emergency contact
                document.getElementById('emergency_name').value = student.EmergencyContactName; // Update this if the JSON contains a different field for emergency contact name
                document.getElementById('emergency_contact').value = student.ContactNumber;

                // Assuming you have fields for development information
                document.getElementById('behavior').value = student.Behavior;
                document.getElementById('social_skills').value = student.SocialSkills;

                document.getElementById('blood_type').value = student.BloodType;
                document.getElementById('allergies').value = student.Allergies;
                // ... Populate other fields similarly
            })
            .catch(error => console.error('Error:', error));
    }
}
</script>
</body>

</html>
