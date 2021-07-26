<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Website</title>
    </head>
    <body>
        <img class = "logo" src="Mathleticslogo.jpg" alt="Mathletics Logo">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <?php
                    if(isset($_SESSION["useruid"])){
                        echo "<li><a href='profile.php'>Profile</a></li>";
                        echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
                    }
                    else{
                        echo "<li><a href='signup.php'>Signup</a></li>";
                        echo "<li><a href='login.php'>Login</a></li>";
                    }
                ?>
            </ul>
        </nav>
    
