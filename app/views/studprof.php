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
                            <!-- teacher's comment -->
                            <p>Your child's grades are not final, due to the extra points.</p>
                            
                            <table id="gradesTable" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Subject</th>
                                        <th>First Quarter</th>
                                        <th>Second Quarter</th>
                                        <th>Third Quarter</th>
                                        <th>Fourth Quarter</th>
                                        <th>GWA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Mathematics -->
                                    <tr>
                                        <td>Mathematics</td>
                                        <td>90</td>
                                        <td>89</td>
                                        <td>86</td>
                                        <td>93</td>
                                        <td>89.50</td>
                                    </tr>
                                    <!-- Science -->
                                    <tr>
                                        <td>Science</td>
                                        <td>85</td>
                                        <td>88</td>
                                        <td>82</td>
                                        <td>90</td>
                                        <td>86.25</td>
                                    </tr>
                                    <!-- Language -->
                                    <tr>
                                        <td>Language</td>
                                        <td>88</td>
                                        <td>85</td>
                                        <td>90</td>
                                        <td>87</td>
                                        <td>87.50</td>
                                    </tr>
                                    <!-- Art -->
                                    <tr>
                                        <td>Art</td>
                                        <td>82</td>
                                        <td>78</td>
                                        <td>85</td>
                                        <td>80</td>
                                        <td>81.25</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Schedules Section -->
                        <div class="dashboard-item col-md-6">
                            <h3>Kindergarten Class Schedule</h3>
                            <p>Here is your child's class schedule, every morning, weekly.</p>

                            <table class="table table-bordered">
                                <thead class="text-center">
                                    <tr>
                                        <th>Time</th>
                                        <th>Monday</th>
                                        <th>Tuesday</th>
                                        <th>Wednesday</th>
                                        <th>Thursday</th>
                                        <th>Friday</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>8:00 AM - 9:00 AM</td>
                                        <td>Math</td>
                                        <td>Science</td>
                                        <td>Language</td>
                                        <td>Art</td>
                                        <td>Free Time</td>
                                    </tr>
                                    <tr>
                                        <td>9:00 AM - 10:00 AM</td>
                                        <td>Art</td>
                                        <td>Language</td>
                                        <td>Math</td>
                                        <td>Science</td>
                                        <td>Outdoor Activities</td>
                                    </tr>
                                    <!-- Add more rows for different time slots -->
                                </tbody>
                            </table>
                        </div>


                        <!-- Announcements and Events Section -->
                        <div class="dashboard-item col-md-6">
                            <h3>Kindergarten Class Bulletin Board</h3>
                            <p>Check out the latest announcements and upcoming events for the kindergarten class!</p>

                            <!-- Example: Bulletin Board -->
                            <div class="bulletin-board">
                                <!-- Announcements -->
                                <div class="announcement-section">
                                    <h4>Announcements</h4>
                                    <ul>
                                        <li>New Classroom Rules Implemented</li>
                                        <li>Parent-Teacher Meeting Next Week</li>
                                        <li>Healthy Snack Day Every Friday</li>
                                        <!-- Add more announcements as needed -->
                                    </ul>
                                </div>

                                <!-- Events -->
                                <div class="event-section">
                                    <h4>Upcoming Events</h4>
                                    <ul>
                                        <li>Field Trip to the Zoo - Date: January 15, 2024</li>
                                        <li>Science Fair - Date: February 10, 2024</li>
                                        <li>Art and Craft Day - Date: March 5, 2024</li>
                                        <!-- Add more events as needed -->
                                    </ul>
                                </div>
                            </div>
                        </div>


                <!-- Child's Financial Reports Section -->
                <div class="profile-section">
                    <h2 class="mb-3 class-title">Child's Financial Reports</h2>
                    <p>Review your child's tuition fees, payments, and other bills in this section.</p>

                    <!-- Example: Bulletin Board Style Financial Overview -->
                    <div class="financial-reports">
                        <!-- Tuition Fees -->
                        <div class="tuition-fees-section">
                            <h4>Tuition Fees</h4>
                            <ul>
                                <li>January 2024: $300</li>
                                <li>February 2024: $300</li>
                                <li>March 2024: $300</li>
                                <!-- Add more tuition fee entries as needed -->
                            </ul>
                        </div>

                        <!-- Payments -->
                        <div class="payments-section">
                            <h4>Payments</h4>
                            <ul>
                                <li>Payment Received on January 5, 2024: $150</li>
                                <li>Payment Received on February 3, 2024: $150</li>
                                <!-- Add more payment entries as needed -->
                            </ul>
                        </div>

                        <!-- Other Bills -->
                        <div class="other-bills-section">
                            <h4>Other Bills</h4>
                            <ul>
                                <li>Field Trip Fee: $20 (Due by February 10, 2024)</li>
                                <li>Art Supplies: $10 (Due by March 1, 2024)</li>
                                <!-- Add more bill entries as needed -->
                            </ul>
                        </div>
                    </div>
                </div>


                <!-- Child's Class and Campus Involvement Section -->
<div class="profile-section">
    <h2 class="mb-3 class-title">Child's Class and Campus Involvement</h2>
    <p>Explore your child's participation in clubs, organizations, and other subject-related activities in this section.</p>

    <!-- Example: Club and Organization Membership Table -->
    <table id="childInvolvementTable" class="table table-bordered">
        <thead>
            <tr>
                <th>Activity Name</th>
                <th>Activity Type</th>
                <th>Membership Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Math Club</td>
                <td>Club</td>
                <td>Active Member</td>
            </tr>
            <tr>
                <td>Science Fair</td>
                <td>Event</td>
                <td>Participating</td>
            </tr>
            <tr>
                <td>Art Society</td>
                <td>Club</td>
                <td>Interested</td>
            </tr>
            <tr>
                <td>Reading Circle</td>
                <td>Club</td>
                <td>Not Joined</td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
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
