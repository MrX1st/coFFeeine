<?php

// Start a session
session_start();

if (isset($_GET['logout'])) {
    // Clear all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    // Redirect to the login page
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Training Center | cooFFeeine </title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="icon" href="images/icon.png" type="image/png">

   </head>
<body>
  <header>
    <nav class="navbar">
      <div class="logo"><a href="/Proj/Proj/index.php">coFFeeine<?php echo(isset($_SESSION['username']))?"--> ".$_SESSION['username']:">"; ?></a></div>
      <ul class="menu">
        <li><a href="/Proj/Proj/index.php">Home</a></li>
        <li><a href="/Proj/Proj/courses.php">Courses</a></li>
        <li><a href="/Proj/Proj/shop.php">Shop</a></li>
        <!-- <li><a href="/Proj/Proj/dashboard.php">Dashboard</a></li> -->
        <li><a href="/Proj/Proj/contact.php">Contact</a></li>
      </ul>
      <div class="buttons">
        <?php
        if (!isset($_SESSION['user_id'])) { ?>
                <input type="button" value="Login" onclick="redirectToURL('http://localhost/Proj/Proj/Login.php')">
                <input type="button" value="Register" onclick="redirectToURL('http://localhost/Proj/Proj/register.php')">
            <?php } else {
                // User is logged in
                $username = $_SESSION['username']; ?>
            
                <input type="button" value="Dashboard" onclick="redirectToURL('http://localhost/Proj/Proj/Dashboard.php')">
                <input type="button" value="Logout" onclick="redirectToURL('http://localhost/Proj/Proj/index.php?logout')">
            <?php }
            ?>
      </div>
    </nav>
    <script>
      // JavaScript function to redirect to a URL
      function redirectToURL(url) {
          window.location.href = url;
      }
    </script>
    <div class="text-content">
      <h2>Learn To Enjoy,<br>Every Moment Of Your Life</h2>
      <p>Come join our family in cooFFeeine, train and learn well, get taught by professionals. One very common thing here is that we all <span>"Love"</span> Coffee.</p>
    </div>
    <div class="play-button">
      <span class="play">Play Video</span>
      <i class="fas fa-play" onclick="click()"></i>
    </div>
  </header>

</body>
</html>
