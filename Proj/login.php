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

// Login a user
if (isset($_POST['username'])) { 
  $username = $_POST['username']; 
  $password = $_POST['password']; 

  // Perform some basic validation on the input 
  if (empty($username) || empty($password)) { 
      echo 'Please fill in all the fields.'; 
  } else { 
      // Check if the username and password match 
      $query = "SELECT * FROM users WHERE username=? AND password=?";
      $stmt = $connection->prepare($query);
      $stmt->bind_param("ss", $username, $password);
      $stmt->execute();
      $result = $stmt->get_result();

      if ($result) { 
          if ($result->num_rows == 1) { 
              // Fetch the user ID 
              $row = $result->fetch_assoc(); 
              $user_id = $row['id']; 

              // Set session variables 
              $_SESSION['user_id'] = $user_id; 
              $_SESSION['username'] = $username; 

              // Redirect to a welcome page or any other protected page 
              header('Location: index.php'); 
              exit(); 
          } else { 
              echo 'Invalid username or password.'; 
          } 
      } else {
          echo "Error executing the query: " . $connection->error;
      }
  } 
}
// Logout the user
if (isset($_GET['logout'])) {
    // Clear all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    // Redirect to the login page
    header('Location: login.php');
    exit();
}

// Close the database connection
$connection->close();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Login | cooFFeeine</title>
    <link rel="stylesheet" href="/Proj/Proj/css/login.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/icon.png" type="image/png">
    <!-- Include your additional styles or scripts here -->
  </head>
  <body>
    <div class="login-container">
      <h2>Login</h2>
      <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="Login">
      </form>
      <p>Don't have an account? <a href="/Proj/Proj/register.php">Register here</a></p>
      <a href="/Proj/Proj/index.php" class="back-button">Back to Home</a>
    </div>

    <!-- Include your additional scripts here -->
  </body>
</html>
