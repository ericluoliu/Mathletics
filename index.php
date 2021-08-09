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
                    <th>Cost </th>     
                    <th>Pay </th>
                </tr>  
                <tr>
                    <td>Algebra 1</td>
                    <td>Math</td>
                    <td>Me</td>
                    <td>$1000.00</td>
                    <td>
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
                            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_SM.gif" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="0" height="0">
                        </form>

                    </td>
                </tr>
                <tr>
                    <td>abc</td>
                    <td>abc</td>
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
