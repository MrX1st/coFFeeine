<?php
// Configuration
$host = 'localhost';
$dbUsername = 'root';
$dbPassword = 'mysql';
$dbName = 'proj';

// Start a session
session_start();

// Create a database connection
$connection = new mysqli($host, $dbUsername, $dbPassword, $dbName);

// Check the connection
if ($connection->connect_error) {
    die('Connection failed: ' . $connection->connect_error);
}

// Check if the user is already logged in
if (isset($_SESSION['user_id'])) {
    // Redirect to a welcome page or any other protected page
    header('Location: index.php');
    exit();
}

// Register a user
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    // Perform some basic validation on the input
    if (empty($username) || empty($password) || empty($confirmPassword)) {
        echo 'Please fill in all the fields.';
    } elseif ($password !== $confirmPassword) {
        echo 'Passwords do not match.';
    } else {
        // Check if the username already exists
        $query = "SELECT * FROM users WHERE username='$username'";
        $result = $connection->query($query);

        if (isset($result->num_rows) && $result->num_rows > 0) {
            echo 'Username already exists. Please choose a different username.';
        } else {
            // Insert the new user into the database
            $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
            $insert = $connection->query($query);

            if ($insert) {
                // Fetch the user ID
                $user_id = $connection->insert_id;

                // Set session variables
                $_SESSION['user_id'] = $user_id;
                $_SESSION['username'] = $username;

                // Redirect to a welcome page or any other protected page
                header('Location: index.php');
                exit();
            } else {
                echo 'Error: ' . $connection->error;
            }
        }
    }
}


// Close the database connection
$connection->close();
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Register | cooFFeeine</title>
    <link rel="stylesheet" href="/Proj/Proj/css/register.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/icon.png" type="image/png">

    <!-- Include your additional styles or scripts here -->
  </head>
  <body>
    <div class="register-container">
      <h2>Register</h2>
      <form id="registerForm" action="register.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>

        <input type="submit" value="Register">
      </form>
      <p>Already have an account? <a href="/Proj/Proj/login.php">Login here</a></p>
      <a href="/Proj/Proj/index.php" class="back-button">Back to Home</a>
    </div>

    <!-- Include your additional scripts here -->
  </body>
</html>
