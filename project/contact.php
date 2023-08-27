<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleContact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Contact Us</title>
</head>
<body>
    <nav class="navigation">
    <a href="\project\home.php" class="logo">
            <img src="\project\Images\preeti.jpg" alt="Logo">
        </a>
        <div class="nav-logo">
            <a href="\project\home.php" class="logo">Contact Us</a>
        </div>
        <ul class="nav-links">
            <li><a href="\project\home.php" class="nav-link">Home</a></li>
            <li><a href="\project\aboutus.php" class="nav-link">About Us</a></li>
            <li><a href="\project\contactus.php" class="nav-link">Contact</a></li>
            <li><a href="\project\signin.php" class="nav-link">Login</a></li>
        </ul>
    </nav>
    <div class="contact-form">
        <h2>Contact Us</h2>
        <form id="contactForm" onsubmit="return validateForm()">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            
            <label for="address">Address:</label>
            <input type="text" id="address" name="address">
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4"></textarea>
            
            <button type="submit">Submit</button>
        </form>
    </div>
    <br><br><br>
    <div class="social-links">
        <a href="https://https://www.facebook.com/preeti.tamang.127201/" class="social-icon"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.linkedin.com/in/preeti-tamang-bb5745277/"class="social-icon"><i class="fab fa-linkedin"></i></a>
        <a href="https://https://instagram.com/preetitmg_66?igshid=YWYwM2I1ZDdmOQ==" class="social-icon"><i class="fab fa-instagram"></i></a>
    </div>
    <br><br><br>
    <script src="scriptContact.js"></script>
    

<footer class="footer">
    <p>&copy; 2023  All rights reserved to Preeti Tamang.</p>
</footer>
</body>
</html>