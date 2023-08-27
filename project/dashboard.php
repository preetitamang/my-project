<?php
     session_start();

     if(!isset($_SESSION['loginEmail'])){
        header('location: signin.php');
     }
    echo ("Welcome to dashboard. Coming Soon...");
?>  
<html>
    <head>
        <link rel="stylesheet" href="dashboard.css">
    </head>
    <body><br><br>
    
   <a href = "logout.php"> <input type = "submit" class="logout" name = "submit" value="Log Out"></a>
 
    </body>
</html>
