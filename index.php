<?php
    include_once 'header.php';
?>

<body>
    <?php
    if(isset($_SESSION["useruid"])){
        echo "<p>Hello there " . $_SESSION["useruid"] . "</p";
    }
    else{
        echo "<p>Hello</p>";
    }
    ?>
    <br>
    <br>
    <div class="container-fluid">
        <table id="catalog" class="table table-hover">  
            <thead>  
                <tr>  
                    <th>Class Title</th>  
                    <th>Subject</th>  
                    <th>Teacher</th> 
                    <th>other stuff </th>     
                </tr>  
                <tr>
                    <td>abc</td>
                    <td>abc</td>
                    <td>abc</td>
                </tr>
                <tr>
                    <td>abc</td>
                    <td>abc</td>
                    <td>abc</td>
                </tr>
            </thead>
        </table>
    </div>

    <script src="jquery.min.cs"> </script>
    <script src="ddtf.js"> </script>
    <script>
        $('#catalog').ddTableFilter():
</body>
</html>
