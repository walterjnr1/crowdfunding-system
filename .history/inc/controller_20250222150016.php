<?php 
session_start();
error_reporting(1);
include('../database/connect.php'); 
include('../database/connect2.php'); 

//set time
date_default_timezone_set('Africa/Accra');
$current_date = date('Y-m-d H:i:s');

//website data
$stmt = $dbh->query("SELECT * FROM website_settings");
$row_website = $stmt->fetch();
$sitename=$row_website['name'];  
$address=$row_website['address'];
$state=$row_website['state'];
$email_website=$row_website['email'];
$phone_website=$row_website['phone'];
$email_server=$row_website['email_server'];
$email_username=$row_website['email_username'];
$app_password=$row_website['app_password'];
$port=$row_website['email_port'];
$logo=$row_website['logo'];
$publickey=$row_website['publickey'];
$secretkey=$row_website['secretkey'];


//fetch admin data
$username = $_SESSION["login_username"];

$stmt = $dbh->query("SELECT * FROM users where username='$username'");
$row_user= $stmt->fetch();
$fullname_admin=$row_user['fullname'];  
$photo_admin =$row_user['photo'];
$email_admin=$row_user['email'];
$password_admin=$row_user['password'];
$lastaccess=$row_user['lastaccess'];

//fetch student_data data
$track_number = $_SESSION["login_track_number"];
$stmt = $dbh->query("SELECT * FROM students where track_number='$track_number'");
$row_student= $stmt->fetch();
$name=$row_student['name'];  
$faculty=$row_student['faculty'];  
$dept=$row_student['dept'];
$email=$row_student['email'];
$sex=$row_student['sex'];




?>