<?php
include('../dbconfig.php');

if (isset($_GET['stu_email'])) {
    $info = mysqli_real_escape_string($conn, $_GET['stu_email']);
    mysqli_query($conn, "DELETE FROM students WHERE stu_email='$info'");
    header('location: display_student1.php');
} else {
    echo "Invalid request";
}
?>