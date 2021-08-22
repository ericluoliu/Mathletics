<?php
// the message
if (isset($_POST['submit'])) {
    $classtitle = $_POST['ClassTitle'];
    $teacheremail = $_POST['TeacherEmail'];
    $price = $_POST['Price'];
    $maxstudents = $_POST['MaxStudents'];
    $startdate = $_POST['StartDate'];
    $enddate = $_POST['EndDate'];
    $dayofweek = $_POST['DayofWeek'];
    $time = $_POST['Time'];
    $description = $_POST['Description'];

    $txt = "Class Title: ".$classtitle."\nTeacher's Email: ".$teacheremail."\nPrice: ".$price."\nMax. Students: ".$maxstudents."\nStart Date: ".$startdate."\nEnd Date: ".$enddate."\nDay of Week: ".$dayofweek."\nClass Time: ".$time."\nDescription of Class: ".$description;
// send email
mail("themathleticspage@gmail.com","Class Create Request",$txt);

echo "email should have sent";
}
?>