<?php
include('../inc/controller.php');
if (empty($_SESSION['login_email'])) {
    header("Location: login.php");
}

$id= $_GET['id'];
$sql = "DELETE FROM studens WHERE id=?";
$stmt= $dbh->prepare($sql);
$stmt->execute([$id]);

header("Location: user_record.php");
 ?>
