<?php 
session_start();
error_reporting(1);
include('database/connect.php'); 
include('database/connect2.php'); 

//set time
date_default_timezone_set('Africa/Accra');
$current_date = date('Y-m-d H:i:s');

//website data
$stmt = $dbh->query("SELECT * FROM website_settings");
$row_website = $stmt->fetch();
$name=$row_website['name'];  
$address=$row_website['address'];
$state=$row_website['state'];
$email_website=$row_website['email'];
$phone_website=$row_website['phone'];
$email_server=$row_website['email_server'];
$email_username=$row_website['email_username'];
$app_password=$row_website['app_password'];
$port=$row_website['email_port'];
$logo=$row_website['logo'];



$secretkey='sk_test_47baa9aaab29e730ccc5d25c1f00761454fc58e4';
$publickey='pk_test_9180e4cbc4f6da45138bf24d6e5a4fce84439c58';

?>