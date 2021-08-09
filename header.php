<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <div class="container-fluid">
        <head class="fixed-top">
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">

            <link rel="stylesheet" href="bootstrap.min.css">
            <link rel="stylesheet" href="static/mystyle.css"> 
        
            <img class = "logo" src="static/Mathleticslogo.png" alt="Mathletics Logo">
            <title> Mathletics </title>
            <br>
            <br>
            <nav>
            <ul id="font">
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
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Course Catalog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="templates/contactform.html">Contact Us</a>
                </li>
            </ul>
            </nav>
        </head>
    </div>

