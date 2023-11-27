<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    // Include head.php
    include 'head.php';
    ?>
</head>

<body>

    <div class="container-fluid service py-6">
        <div class="container">
            <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                <a href="<?= base_url() ?>/" class="navbar-brand">
                    <img src="<?= base_url() ?>/public/img/acmcl-logo.png" alt="" class="logo pb-4 mb-4" style="width: 200px;">
                </a>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-12 wow bounceInUp" data-wow-delay="0.1s">
                    <div class="card bg-success text-white">
                        <div class="card-body p-4">
                            <div class="service-content d-flex align-items-center justify-content-center">
                                <div class="service-content-icon text-center">
                                    <h4 class="mb-3">Create an account</h4>
                                    <!-- PHP validation and registration -->
                                    <?php
                                    $firstname = $lastname = $email = $password = "";

                                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                        $firstname = test_input($_POST["firstname"]);
                                        $lastname = test_input($_POST["lastname"]);
                                        $email = test_input($_POST["email"]);
                                        $password = test_input($_POST["password"]);

                                        // Add your validation logic here
                                        if (empty($firstname) || empty($lastname) || empty($email) || empty($password)) {
                                            echo "<p class='text-danger'>All fields are required.</p>";
                                        } else {
                                            // Your database connection details
                                            $servername = "your_server_name";
                                            $username = "your_username";
                                            $password = "your_password";
                                            $dbname = "your_database_name";

                                            // Create connection
                                            $conn = new mysqli($servername, $username, $password, $dbname);

                                            // Check connection
                                            if ($conn->connect_error) {
                                                die("Connection failed: " . $conn->connect_error);
                                            }

                                            // Insert user information into the database
                                            $sql = "INSERT INTO users (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$password')";

                                            if ($conn->query($sql) === TRUE) {
                                                echo "<p class='text-success'>Registration successful! Redirecting to login page...</p>";
                                                // Redirect to login page after a delay
                                                echo "<script>
                                                        setTimeout(function(){
                                                            window.location.href = '" . base_url() . "/login';
                                                        }, 3000);
                                                    </script>";
                                            } else {
                                                echo "<p class='text-danger'>Error: " . $sql . "<br>" . $conn->error . "</p>";
                                            }

                                            $conn->close();
                                        }
                                    }

                                    function test_input($data)
                                    {
                                        $data = trim($data);
                                        $data = stripslashes($data);
                                        $data = htmlspecialchars($data);
                                        return $data;
                                    }
                                    ?>
                                    <!-- End of PHP validation and registration -->

                                    <!-- Registration form -->
                                    <form action="<?= site_url('/register') ?>" method="post" class="row g-2">
                                        <div class="col-12">
                                            <input class="mb-3 form-control" type="text" name="firstname" placeholder="Firstname" id="firstname" required>
                                        </div>
                                        <div class="col-12">
                                            <input class="mb-3 form-control" type="text" name="lastname" placeholder="Lastname" id="lastname" required>
                                        </div>
                                        <div class="col-12">
                                            <input class="mb-3 form-control" type="email" name="email" placeholder="Email" id="email" required>
                                        </div>
                                        <div class="col-12">
                                            <input class="mb-3 form-control" type="password" name="password" placeholder="Password" id="password" required>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-light px-4 py-2 rounded-pill">Register</button>
                                        </div>
                                    </form>
                                    <!-- End of registration form -->

                                    <a href="<?= base_url() ?>login" class="text-white mt-3 d-block">Already have an account? Login here.</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of card -->
                </div>
            </div>
        </div>
    </div>

    <?php
    // Include scriptLT.php
    include 'scriptLT.php';
    ?>

</body>

</html>
