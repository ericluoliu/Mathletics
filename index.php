<?php
    include_once 'header.php';
?>
<?php
    if(isset($_SESSION["useruid"])){
        echo "<p>Hello there " . $_SESSION["useruid"] . "</p";
    }
    else{
        echo "<p>Hello</p>";
    }
?>
</body>
</html>