<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
include('inc/controller_landing_page.php');

if ($ref ="") {
header("Location:javascript://history.go(-1)");
}

  $curl = curl_init();
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/". rawurlencode($ref),
        CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer {$secretkey}",
      "Cache-Control: no-cache",
    ),
  ));
  
  $response = curl_exec($curl);

  curl_close($curl);
  //echo $response;
      $json_output = json_decode($response, true);

   $email = $_GET['email'];
   $ref = $_GET['reference'];
   $amount = $_GET['amount'];
   $requestid = $_GET['requestid'];
   $studentid = $_GET['studentid'];
   $donor = $_GET['fullname'];


  //save payment details
    $sql = 'INSERT INTO payments(payment_id,request_id,amount,student_id,donor_name,payment_date,donor_email) VALUES(:payment_id,:request_id,:amount,:student_id,:donor_name,:payment_date,:donor_email)';
    $statement = $dbh->prepare($sql);
    $statement->execute([
        ':payment_id'   => $ref,
        ':request_id'   => $requestid,
        ':amount'   => $amount,
        ':student_id'   => $studentid,
         ':donor_name'   => $donor,
         ':payment_date'   => $current_date,
         ':donor_email'   => $email,
        ]);

        //write code to update students balance. use students table
        $sql = 'UPDATE students SET balance = balance + :amount WHERE student_id = :student
        _id';
        $statement = $dbh->prepare($sql);
        $statement->execute([
          ':amount' => $amount,
          ':student_id' => $studentid
          ]);
          
        
//send payment notification
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP(); //Send using SMTP
    $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
    $mail->SMTPAuth = true; //Enable SMTP authentication
    $mail->Username = 'ucnewspro@gmail.com'; //SMTP username
    $mail->Password = 'qbffuhedyrxdcciw'; //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
    $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('support@crowdfunding.com.ng', 'Authur Javis University'); // Use a valid email address
    $mail->addAddress($email); //Add a recipient

    $message = "
<html>
<head>
<title>Donation Details | Authur Javis University</title>
</head>
<body>

<p><strong>Hello ,</strong></p>

<p>Your Donation was received successfully.</p>

<p><strong>Payment ID : </strong> $ref</p>
<p><strong>Request ID : </strong> $requestid</p>
<p><strong>Student Track Number : </strong> $studentid</p>
<p><strong>Amount Donated : </strong> N$amount</p>


<p>Regards,</p>
<p>Authur Javis University Team</p>
</body>
</html>
";

    //Content
    $mail->isHTML(true); //Set email format to HTML
    $mail->Subject = 'Donation Details | Authur Javis University';
    $mail->Body = $message;
    $mail->send();
} catch (Exception $e) {
    $_SESSION['error'] = 'Email could not be sent. Please try again later. ';

  }

  header( "refresh:2;url= index.php" );
$_SESSION['success']='Donation received Successfully...';
 //header("Location: index.php");

?>