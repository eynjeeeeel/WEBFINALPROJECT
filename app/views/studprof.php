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

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- DataTables CSS and JS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>


    <style>
        /* Add your custom styles here */
        body {
            font-family: 'Heebo', sans-serif;
            background-color: #f8f9fa; /* Light background color */
            margin: auto;
            padding: 0;
        }

        .student-profile-container {
            margin: 20px 0;
        }

        .dashboard-item {
            margin-bottom: 20px;
            background-color: #fff;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .dashboard-item h3 {
            font-size: 1.2rem;
            color: #17a2b8; /* Heading color */
        }

        .dashboard-item p {
            font-size: 1rem;
        }

        .dashboard-item canvas {
            max-width: 100px;
            height: auto;
            margin: 10px 0;
        }

        .dashboard-item table {
            width: 500px;
            height: 275px;
            font-size: 0.8rem;
        }

        .profile-section {
            margin-bottom: 20px;
            background-color: #fff;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .profile-section h2 {
            font-size: 1.5rem;
            color: #17a2b8; /* Heading color */
        }

        .profile-section p {
            font-size: 1rem;
        }

        .profile-section canvas {
            max-width: 100%;
            height: auto;
            margin: 10px 0;
        }

        .profile-section table {
            width: 100%;
            font-size: 0.8rem;
        }
    </style>
</head>

<body>
<div class="container-xxl bg-white p-0">
        <!-- Navbar Start -->
        <?php include 'navbarhome.php' ?>
        <?php include 'StudInfo.php' ?>

        <div class="container-xxl py-3 student-profile-container">
            <div class="container">
                
                <!-- Dashboard Section -->
                <div class="dashboard-section">
                    <div class="row">
                        <!-- Academic Progress Section -->
                        <div class="dashboard-item col-md-6">
                            <h3>Academic Progress</h3>
                            <p>Track your academic progress throughout the quarters.</p>
                            
                            <!-- Example: Line Chart for Academic Progress -->
                            <canvas id="academicProgressChart" style="max-height: 300px; max-width:500px"></canvas>
                        </div>

<!-- Grades Section -->
<div class="dashboard-item col-md-6">
    <h3>Grades</h3>
    <p>Your child's grades are not final, due to the extra points.</p>
    <table id="gradesTable" class="table table-bordered">
    <thead>
        <tr>
            <th>Subject</th>
            <th>First Quarter</th>
            <th>Second Quarter</th>
            <th>Third Quarter</th>
            <th>Fourth Quarter</th>
        </tr>
    </thead>
    <tbody>
    <?php
    // Process grades to organize them by subject
    if (!empty($grades)) {
        $processedGrades = [];
        foreach ($grades as $grade) {
            $processedGrades[$grade['SubjectID']]['Name'] = $grade['Name'];
            $processedGrades[$grade['SubjectID']][$grade['Quarter']] = $grade['Grade'];
        }

        // Display grades
        foreach ($processedGrades as $subjectGrades): ?>
            <tr>
                <td><?= htmlspecialchars($subjectGrades['Name'] ?? '-'); ?></td>
                <td><?= htmlspecialchars($subjectGrades['First'] ?? '-'); ?></td>
                <td><?= htmlspecialchars($subjectGrades['Second'] ?? '-'); ?></td>
                <td><?= htmlspecialchars($subjectGrades['Third'] ?? '-'); ?></td>
                <td><?= htmlspecialchars($subjectGrades['Fourth'] ?? '-'); ?></td>
            </tr>
        
        <?php endforeach;
    } ?>
</tbody>

</table>

</div>

                      


                       <!-- Announcements and Events Section -->
<div class="dashboard-item col-md-6">
    <h3>Kindergarten Class Bulletin Board</h3>
    <p>Check out the latest announcements and upcoming events for the kindergarten class!</p>

    <!-- Bulletin Board -->
    <div class="bulletin-board">
       <!-- Announcements -->
<div class="announcement-section">
    <h4>Announcements</h4>
    <?php if (!empty($announcements)): ?>
        <ul>
            <?php foreach ($announcements as $announcement): ?>
                <li><?= htmlspecialchars($announcement['Title']); ?> - <?= htmlspecialchars(date("F d, Y", strtotime($announcement['DatePosted']))); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No announcements available.</p>
    <?php endif; ?>
</div>

<!-- Events -->
<div class="event-section">
    <h4>Upcoming Events</h4>
    <?php if (!empty($events)): ?>
        <ul>
            <?php foreach ($events as $event): ?>
                <li><?= htmlspecialchars($event['Title']); ?> - Date: <?= htmlspecialchars(date("F d, Y", strtotime($event['EventDate']))); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No upcoming events.</p>
    <?php endif; ?>
</div>

    </div>
</div>



                


               

        <!-- Footer and Bootstrap Scripts as in your original code -->
<script>
    // Example: Academic Progress Line Chart
    var academicProgressChart = new Chart(document.getElementById('academicProgressChart').getContext('2d'), {
    type: 'line',
    data: {
        labels: ['First Quarter', 'Second Quarter', 'Third Quarter', 'Fourth Quarter'],
        datasets: [
            {
                label: 'Mathematics',
                data: [90, 89, 86, 93], // Replace with actual GPA data for each quarter
                fill: false,
                borderColor: '#3498db', // Line color
            },
            {
                label: 'Science',
                data: [85, 88, 82, 90], // Replace with actual GPA data for each quarter
                fill: false,
                borderColor: '#e74c3c', // Line color for Science
            },
            {
                label: 'Language',
                data: [88, 85, 90, 87], // Replace with actual GPA data for each quarter
                fill: false,
                borderColor: '#2ecc71', // Line color for Language
            },
            {
                label: 'Art',
                data: [82, 78, 85, 80], // Replace with actual GPA data for each quarter
                fill: false,
                borderColor: '#f39c12', // Line color for Art
            },
        ],
    },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: false,
                    max: 100.0, // Set the maximum value to 5.0
                    min: 70.0, // Set the minimum value to 1.0
                    reverse: false, // Reverse the scale
                },
            },
        },
    });
    // Subject Filter Event Listener
document.getElementById('subjectFilter').addEventListener('change', function () {
    // Get the selected subject
    var selectedSubject = this.value;

    // Check if the selected subject exists in the subjectData
    if (selectedSubject in subjectData) {
        // Update the chart with the data for the selected subject
        updateAcademicProgress(selectedSubject);
    }
});
</script>


</body>

</html>
