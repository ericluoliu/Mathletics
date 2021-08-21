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
<br><br>
<body>
 
    <link href="static/contact-form.css" rel="stylesheet">
    <link href="static/mystyle.css" rel="stylesheet">
    <div class="fcf-body">

    <div id="fcf-form">
    <h4 class="sent-notification"></h4>
    <h3 class="fcf-h3">Create a Course</h3>
        <p>You will receive an email when your course is approved and added to the course catalog</p>

    <form id="fcf-form-id" method="post" action="templates/sendEmail.php" class="fcf-form-class">
        
        <div class="fcf-form-group">
            <label for="Name" class="fcf-label">Course Name: </label>
            <div class="fcf-input-group">
                <input type="text" id="Name" class="fcf-form-control" required>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Email" class="fcf-label">Your e-mail address: </label>
            <div class="fcf-input-group">
                <input type="email" id="Email" class="fcf-form-control" required>
            </div>
        </div>
        
        <div class="fcf-form-group">
            <label for="Email" class="fcf-label">Course Price (Put 0 if it is free): </label>
            <div class="fcf-input-group">
                <input type="email" id="Email" class="fcf-form-control" required>
            </div>
        </div>
        
        <div class="fcf-form-group">
            <label for="Email" class="fcf-label">Type of Course (Math, Science, etc): </label>
            <div class="fcf-input-group">
                <input type="email" id="Email" class="fcf-form-control" required>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Message" class="fcf-label">Course Description:</label>
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
