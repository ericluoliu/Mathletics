<?php
    include_once 'header.php';
?>
<br><br>
<body>
 
    <link href="static/contact-form.css" rel="stylesheet">
    <link href="static/mystyle.css" rel="stylesheet">
    <div class="fcf-body">

    <div id="fcf-form">
    <h3 class="fcf-h3">Create a Course</h3>
    <br>
    <p>You will receive an email when your course is approved and added to the course catalog</p>
    <br>

    <form id="fcf-form-id" method="post" action="templates/newclassEmail.php" class="fcf-form-class">
        
        <div class="fcf-form-group">
            <label for="ClassTitle" class="fcf-label">Class Title: </label>
            <div class="fcf-input-group">
                <input type="text" name="ClassTitle" class="fcf-form-control" required>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="TeacherEmail" class="fcf-label">Teacher's E-mail Address: </label>
            <div class="fcf-input-group">
                <input type="email" name="TeacherEmail" class="fcf-form-control" required>
            </div>
        </div>
        <div class="fcf-form-group">
            <label for="Price" class="fcf-label">Price (Put 0 if it is free): </label>
            <div class="fcf-input-group">
                <input type="text" name="Price" class="fcf-form-control" required>
            </div>
        </div>
        <div class="fcf-form-group">
            <label for="MaxStudents" class="fcf-label">Maximum Number of Students: </label>
            <div class="fcf-input-group">
                <input type="text" name="MaxStudents" class="fcf-form-control" required>
            </div>
        </div>
        <div class="fcf-form-group-" style="float:left;width:50%">
            <label for="StartDate">Starting Date:</label>
            <div class="fcf-input-group">
                <input type="date" id="StartDate" name="StartDate" class="fcf-form-control" required>
            </div>
        </div>
        <div class="fcf-form-group-right" style="float:right;width:50%">
            <label for="EndDate">Ending Date:</label>
            <div class="fcf-input-group">
                <input type="date" id="EndDate" name="EndDate" class="fcf-form-control" required>
            </div>
        </div>
        <div style="clear:both;">&nbsp;</div>
        <div class="fcf-form-group">
            <label for="DayofWeek" class="fcf-label">Day of Week: </label>
            <div class="fcf-input-group">
                <input type="text" name="DayofWeek" class="fcf-form-control" required>
            </div>
        </div>
        <div class="fcf-form-group">
            <label for="Time" class="fcf-label">Class Time in PST (beginning - end): </label>
            <div class="fcf-input-group">
                <input type="text" name="Time" class="fcf-form-control" required>
            </div>
        </div>
        <div class="fcf-form-group">
            <label for="Description" class="fcf-label">Description (as specific as possible):</label>
            <div class="fcf-input-group">
                <textarea name="Description" class="fcf-form-control" rows="6" required></textarea>
            </div>
        </div>

        <div class="fcf-rm-group">
            <button type="submit" name="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Submit</button>
        </div>

    </form>

    
    </div>

</div>
</body>
