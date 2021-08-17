<?php
session_start();
?>

<!DOCTYPE html>
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="static/mystyle.css">
<html lang="en">
<div class="header">
    <a href='index.php'><img class="logo" src="static/Mathleticslogo.png" alt="Mathletics Logo"></a>
    <h1>Mathletics</h1>
    <p>Course Catalog and Registration</p>
</div>
<div class="topnav">
    <?php
    if (isset($_SESSION["useruid"])) {
        $param = "profile.php";
        $param1 = "Profile";
        $param2 = "includes/logout.inc.php";
        $param3 = "Logout";
    } else {
        $param = "signup.php";
        $param1 = "Signup";
        $param2 = "login.php";
        $param3 = "Login";
    }
    ?>
    <a href="index.php" style="float:left">Home</a>
    <a href="contactform.php" style="float:left">Contact Us</a>
    <a href="index.php" style="float:left">Course Catalog</a>
    <a href="<?php echo $param2; ?>" style="float:right"><?php echo $param3; ?></a>
    <a href="<?php echo $param; ?>" style="float:right"><?php echo $param1; ?></a>

    <!-- OLD ONE, GRACE's VERS.
    <nav>
        <ul id="font">
            <li><a href="index.php">Home</a></li>
            <?php
            /*if (isset($_SESSION["useruid"])) {
                echo "<li><a href='profile.php'>Profile</a></li>";
                echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
            } else {
                echo "<li><a href='signup.php'>Signup</a></li>";
                echo "<li><a href='login.php'>Login</a></li>";
            }*/
            ?>
            <li class="nav-item">
                <a class="nav-link active" href="index.php">Course Catalog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contactform.php">Contact Us</a>
            </li>
        </ul>
    </nav>
        -->

</div>
<div class="horizontal-center">
    <div class="container">

        <head class="fixed-top">
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">

            <title> Mathletics </title>
            <br>
            <br>


        </head>
    </div>
</div>

</html>
