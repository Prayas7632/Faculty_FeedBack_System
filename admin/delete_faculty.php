<?php
include('../dbconfig.php');

if (isset($_GET['T_email'])) {
    $info = mysqli_real_escape_string($conn, $_GET['T_email']);
    mysqli_query($conn, "DELETE FROM teacher WHERE T_email='$info'");
    header('location: show_faculty1.php');
} else {
    echo "Invalid request";
}
?>
