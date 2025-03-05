<?php
include('../inc/controller.php');
if (empty($_SESSION['login_email'])) {
    header("Location: login.php");
}

$id= $_GET['id'];
$sql = "DELETE FROM students WHERE id=?";
$stmt= $dbh->prepare($sql);
$stmt->execute([$id]);

header("Location: student_record.php");
 ?>
