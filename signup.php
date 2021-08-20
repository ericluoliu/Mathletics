<?php
    include_once 'header.php';
?>
<section class='signup-form'>
    <h2>Sign Up</h2>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Full name">
        <input type="text" name="email" placeholder="Email">
        <input type="text" name="uid" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwdrepeat" placeholder="Repeat Password">
        <input type="text" name="accounttype" placeholder="Student or Teacher Account">
        <button type="submit" name="submit">Sign Up</button>
    </form>
    <?php 
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo "<p>Fill in all fields!</p>";
            }
            else if($_GET["error"] == "invaliduid"){
                echo "<p>Choose a valid username!</p>";
            }
            else if($_GET["error"] == "invalidemail"){
                echo "<p>Choose a valid email!</p>";
            }
            else if($_GET["error"] == "invalidaccounttype"){
                echo "<p>Put either student or teacher in the Account Type form!</p>";
            }
            else if($_GET["error"] == "passwordsdontmatch"){
                echo "<p>Passwords don't match!</p>";
            }
            else if($_GET["error"] == "stmtfailed"){
                echo "<p>Something went wrong, please try again!</p>";
            }
            else if($_GET["error"] == "usernametaken"){
                echo "<p>Choose another username, username already taken!</p>";
            }
            else if($_GET["error"] == "none"){
                echo "<p>You have signed up!</p>";
            }
        }
    ?>
</section>

