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
$publickey=$row_website['email_port'];
$secretkey=$row_website['email_port'];



//fetch admin data
$username = $_SESSION["login_username"];

$stmt = $dbh->query("SELECT * FROM users where username='$username'");
$row_user= $stmt->fetch();
$fullname_admin=$row_user['fullname'];  
$photo_admin =$row_user['photo'];
$email_admin=$row_user['email'];
$password_admin=$row_user['password'];
$lastaccess=$row_user['lastaccess'];

//fetch patient_data data
$email = $_SESSION["login_email"];
$stmt = $dbh->query("SELECT * FROM tbldoctor_patient where email='$email'");
$doctor_patient= $stmt->fetch();
$fullname=$doctor_patient['fullname'];  
$address=$doctor_patient['address'];  
$photo=$doctor_patient['photo'];
$email=$doctor_patient['email'];
$sex=$doctor_patient['sex'];




?>