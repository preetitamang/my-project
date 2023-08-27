<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleSignin.css">
    <title>Sign in</title>
</head>
<body>
    <nav class="navigation">
    <a href="\project\home.php" class="logo">
            <img src="\project\Images\preeti.jpg" alt="Logo">
        </a>
        <div class="nav-logo">
            <a href="\project\home.php" class="logo">Login/Register</a>
        </div>
        <ul class="nav-links">
            <li><a href="\project\home.php" class="nav-link">Home</a></li>
            <li><a href="\project\aboutus.php" class="nav-link">About Us</a></li>
            <li><a href="\project\contactus.php" class="nav-link">Contact</a></li>
            <li><a href="\project\signin.php" class="nav-link">Login</a></li>
        </ul>
    </nav>
    <div class="form-container">
    <div class="form registration-form">
        <h2>Registration</h2>
        <form id="registrationForm" onsubmit="return validateRegistration()" method="POST" action = "">
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="fullName" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>
            
            <label>Gender:</label>
            <div class="gender-radio">
                <input type="radio" id="male" name="gender" value="male" required>
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label>
                <input type="radio" id="other" name="gender" value="other">
                <label for="other">Other</label>
            </div>
            
            <label for="address">Address:</label>
            <textarea id="address" name="address" rows="4" required></textarea>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required><br>
            
            <button type="submit" name="r_submit">Register</button>
        </form>
    </div>

    <div class="form login-form">
    <h2>Login</h2>
    <form id="loginForm" action="" method="post">
        <label for="loginEmail">Email:</label>
        <input type="email" id="loginEmail" name="loginEmail" required>
        
        <label for="loginPassword">Password:</label>
        <input type="password" id="loginPassword" name="loginPassword" required>
        <br>
        <button type="submit" name="l_submit">Login</button>
    </form>
    </div>
    </div>
    <script src="registration-script.js"></script>
    <footer class="footer">
    <p>&copy; 2023  All rights reserved to Preeti Tamang.</p>
    </footer>

</body>
</html>

<?php

$server = "localhost";
$user = "root";
$password = "";
$db_name = "project";

$conn = mysqli_connect($server, $user, $password, $db_name);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['r_submit'])) {

    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $password = $_POST['password'];

  
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO `users` (`fullName`, `email`, `phone`, `gender`, `address`, `password`)
            VALUES ('$fullName', '$email', '$phone', '$gender', '$address', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>


<?php
session_start(); 

$server = "localhost";
$user = "root";
$password = "";
$db_name = "project";

$conn = mysqli_connect($server, $user, $password, $db_name);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['l_submit'])) {
    $loginEmail = $_POST['loginEmail'];
    $loginPassword = $_POST['loginPassword'];

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM users WHERE email = '$loginEmail' && password = '$loginPassword'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($result);

    if ($row == 1) {
    header('location: dashboard.php');      
    echo "Login successful!";
     } 
    else {
            echo "Incorrect email or password.";
        }
   
        echo "User not found.";
   

    mysqli_close($conn);
}
?>
