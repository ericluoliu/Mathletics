<?php
    include_once 'header.php';

    if (isset($_SESSION["useruid"])) {
        if (!$_SESSION["userAccountType"] == "TEACHER"){
            echo "<p>Error: This is for teachers only.</p>";
        }
    }
    else{
        echo "<p>Error: You are not signed in</p>";
    }
?>
<p>Create a course here</p>
