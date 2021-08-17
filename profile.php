<?php
    include_once 'header.php';


if(isset($_SESSION["useruid"])){
    echo "<p>Hello there " . $_SESSION["useruid"] . " This is a " . $_SESSION["userAccountType"] . " account.</p>";
    echo "<p> This is your profile page</p>";
}
else{
    echo "<p>Error: You are not signed in</p>";
}
