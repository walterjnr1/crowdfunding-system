<?php
include('../inc/controller.php');
if (empty($_SESSION['login_email'])) {
    header("Location: login.php");
}

	 // for Block admin
if(isset($_GET['did']))
{
$did=intval($_GET['did']);

mysqli_query($conn,"update students set status='0' where id='$did'");
header("location: student_record.php");
}

// for unBlock admin
if(isset($_GET['eid']))
{
$eid=intval($_GET['eid']);

mysqli_query($conn,"update student_record set status='1' where id='$eid'");
header("location: user_record.php");

}

?>
