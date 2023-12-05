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
            width: 100px;
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

        <div class="container-xxl py-3 student-profile-container">
            <div class="container">
                <!-- Dashboard Section -->
                <div class="dashboard-section">
                    <div class="row">
                        <!-- Academic Progress Section -->
                        <div class="dashboard-item col-md-6">
                        <h3>Academic Progress</h3>
                        <p>Your academic progress will be displayed here.</p>
                        <!-- Example: Bar Chart with adjusted height -->
                        <canvas id="academicProgressChart" style="max-height: 200px;"></canvas>
                    </div>

                        <!-- Grades Section -->
                        <div class="dashboard-item col-md-6">
                            <h3>Grades</h3>
                            <p>Your grades will be displayed here.</p>
                            <!-- Example: Data Table -->
                            <table id="gradesTable" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Subject</th>
                                        <th>Grade</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Mathematics</td>
                                        <td>90</td>
                                    </tr>
                                    <tr>
                                        <td>Science</td>
                                        <td>85</td>
                                    </tr>
                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>

                        <!-- Schedules Section -->
                        <div class="dashboard-item col-md-6">
                            <h3>Schedules</h3>
                            <p>Your schedules will be displayed here.</p>
                            <!-- Example: Calendar or Timetable -->
                            <div id="scheduleCalendar"></div>
                        </div>

                        <!-- Alerts Section -->
                        <div class="dashboard-item col-md-6">
                            <h3>Alerts</h3>
                            <p>Any alerts or notifications will be displayed here.</p>
                            <!-- Example: Notification List -->
                            <ul>
                                <li>New Assignment Posted</li>
                                <li>Upcoming Exam Reminder</li>
                                <!-- Add more alerts as needed -->
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Financials Section -->
                <div class="profile-section">
                    <h2 class="mb-3 class-title">Financials</h2>
                    <p>Review tuition fees, payments, and manage finances will be available in this section.</p>
                    <!-- Example: Financial Overview -->
                    <canvas id="financialOverviewChart" style="height: 150px;"></canvas>
                </div>

                <!-- Campus Involvement Section -->
                <div class="profile-section">
                    <h2 class="mb-3 class-title">Campus Involvement</h2>
                    <p>Browse student clubs/orgs/groups and RSVP for events will be accessible in this section.</p>
                    <!-- Example: Club Membership Table -->
                    <table id="clubMembershipTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Club Name</th>
                                <th>Membership Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Programming Club</td>
                                <td>Active Member</td>
                            </tr>
                            <tr>
                                <td>Art Society</td>
                                <td>Interested</td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Footer and Bootstrap Scripts as in your original code -->
        <script>
            // JavaScript code for initializing charts and tables
            // Include your actual data and customization as needed

            // Example: Academic Progress Chart
            var academicProgressChart = new Chart(document.getElementById('academicProgressChart').getContext('2d'), {
                type: 'bar',
                data: {
                    labels: ['Semester 1', 'Semester 2', 'Semester 3'],
                    datasets: [{
                        label: 'GPA',
                        data: [3.5, 3.8, 4.0],
                        backgroundColor: ['#3498db', '#2ecc71', '#e74c3c'],
                    }],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                },
            });

            // Example: Grades Table
            $(document).ready(function () {
                $('#gradesTable').DataTable();
            });

            // Additional chart and table initialization as needed
        </script>
</body>

</html>
