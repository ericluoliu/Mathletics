<?php
    include_once 'header.php';
?>
<br><br>
<body>
 
    <link href="static/contact-form.css" rel="stylesheet">
    <link href="static/mystyle.css" rel="stylesheet">
    <div class="fcf-body">

    <div id="fcf-form">
    <h4 class="sent-notification"></h4>
    <h3 class="fcf-h3">Contact Us</h3>

    <form id="fcf-form-id" method="post" action="templates/sendEmail.php" class="fcf-form-class">
        
        <div class="fcf-form-group">
            <label for="Name" class="fcf-label">Name: </label>
            <div class="fcf-input-group">
                <input type="text" id="Name" class="fcf-form-control" required>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Email" class="fcf-label">E-mail address: </label>
            <div class="fcf-input-group">
                <input type="email" id="Email" class="fcf-form-control" required>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Message" class="fcf-label">Message:</label>
            <div class="fcf-input-group">
                <textarea id="Message" class="fcf-form-control" rows="6" required></textarea>
            </div>
        </div>

        <div class="fcf-rm-group">
            <button type="submit" name="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Submit</button>
        </div>

    </form>

    
    </div>

</div>
</body>