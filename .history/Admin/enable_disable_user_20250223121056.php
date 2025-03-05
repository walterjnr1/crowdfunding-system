<?php
include('../inc/controller.php');
if (empty($_SESSION['login_email'])) {
    header("Location: login.php");
}

	 // for Block admin
if(isset($_GET['id']))
{
$id=intval($_GET['id']);

mysqli_query($conn,"update users set status='0' where id='$did'");
header("location: user_record.php");
}

// for unBlock admin
if(isset($_GET['eid']))
{
$uid=intval($_GET['eid']);

mysqli_query($conn,"update users set status='1' where id='$eid'");
header("location: user_record.php");

}

?>
