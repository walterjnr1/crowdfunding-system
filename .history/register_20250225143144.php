<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
// Check if form is submitted
if (isset($_POST['btnregister'])) {

    // Get form data
    $fullname = $_POST['txtfullname'];
    $email = $_POST['txtemail'];
    $password1 = $_POST['txtpassword1'];
    $password2 = $_POST['txtpassword2'];
    $tracknumber = $_POST['txttracknumber'];
    $faculty = $_POST['cmdfaculty'];
    $dept = $_POST['cmddept'];
    $bank = $_POST['cmdbank'];
    $account_number = $_POST['cmdaccount_number'];

      // Get the image file
      $image = $_FILES['image'];

      // Check if the image file is uploaded
      if ($image['error'] == 0) {
          // Get the image file name and extension
          $imageName = $image['name'];
          $imageExtension = pathinfo($imageName, PATHINFO_EXTENSION);
  
          // Check if the image file is valid
          if (in_array($imageExtension, array('jpg', 'jpeg', 'png'))) {
              // Upload the image file to the server
              $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
              $image_name= addslashes($_FILES['image']['name']);
              $image_size= getimagesize($_FILES['image']['tmp_name']);
              move_uploaded_file($_FILES["image"]["tmp_name"],"uploadImage/Profile/" . $_FILES["image"]["name"]);
            $uploadedImage="uploadImage/Profile/" . $_FILES["image"]["name"];


//save admin details
$query = "INSERT into `students` (name,track_number,password,email,faculty,dept,bank,account_number,photo)
VALUES ('$fullname','$tracknumber','$password','$email','$faculty','$dept','$bank','$account_number','$uploadedImage')";


    $result = mysqli_query($conn,$query);
      if($result){
	 

// Send username and password via email
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
    $mail->setFrom('support@croudfunding.com.ng', 'Authur Javis University'); // Use a valid email address
    $mail->addAddress($email); //Add a recipient

    $message = "
<html>
<head>
<title>Student Registration Details | Authur Javis University</title>
</head>
<body>

<p><strong>Hello ,</strong></p>

<p>Your account has been created successfully.</p>

<p><strong>FUllname : </strong> $username</p>
<p><strong>Password : </strong> $password</p>

<p>Regards,</p>
<p>Authur Javis University Team</p>
</body>
</html>
";

    //Content
    $mail->isHTML(true); //Set email format to HTML
    $mail->Subject = 'Admin Registration Details | Authur Javis University';
    $mail->Body = $message;
    $mail->send();

    //echo "Email sent successfully!";
} catch (Exception $e) {
    //echo 'Email could not be sent. Please try again later. ' . $e->getMessage();
    $_SESSION['error'] = 'Email could not be sent. Please try again later. ';

  }


            $_SESSION['success'] = 'Student Added successfully!';
           
        } else {
            $_SESSION['error'] = 'Failed to add Student!';
          
        }
    } else {
        $_SESSION['error'] = 'Invalid image file!';
         }
} else {
    $_SESSION['error'] = 'Failed to upload Student image!';
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" sizes="16x16" href="uploadImage/Logo/logo.png">

</head>
<body>
<div class="register-container">
  <div align="center"><a href="index.php"><img src="uploadImage/Logo/logo.png" alt="logo" width="173" height="80" border="0" longdesc="index.php"></a> </div>
  <h2>Registration Form</h2>
        <form action="register.php" method="post" enctype="multipart/form-data">
            <label for="username">Fullname:</label>
            <input type="text" id="txtfullname" name="txtfullname" required>

            <label for="email">Track Number:</label>
            <input type="text" id="txttracknumber" name="txttracknumber" required>

            <label for="password">Password:</label>
            <input type="password" id="txtpassword1" name="txtpassword1" required>

            <label for="confirm-password">Confirm Password:</label>
            <input type="password" id="txtpassword2" name="txtpassword2" required>

            <label for="confirm-password">Email:</label>
            <input type="email" id="txtemail" name="txtemail" required>

            <label for="role">Faculty:</label>
            <select name="cmdfaculty">
<option value="none" selected=""disabled="">Select Faculty</option>
<option value="Faculty Of Natural And Applied Sciences">Faculty Of Natural And Applied Sciences</option>
<option value="Faculty Of Humanities Management And Social Sciences">Faculty Of Humanities Management And Social Sciences</option>
<option value="Faculty Of Basic Medical Sciences">Faculty Of Basic Medical Sciences</option>
<option value="Faculty Of Law">Faculty Of Law</option>
<option value="Faculty Of Education">Faculty Of Education</option>
</select>

<label for="role">Department:</label>
<select name="cmddept">
<option value="none" selected=""disabled="">Select Department</option>
<option value="Faculty Of Natural And Applied Sciences">Faculty Of Natural And Applied Sciences</option>
<option value="Faculty Of Humanities Management And Social Sciences">Faculty Of Humanities Management And Social Sciences</option>
<option value="Faculty Of Basic Medical Sciences">Faculty Of Basic Medical Sciences</option>
<option value="Faculty Of Law">Faculty Of Law</option>
<option value="Faculty Of Education">Faculty Of Education</option>
</select>

<label for="role">Bank:</label>
<select name="cmdbank">
<option value="Access Bank">Access Bank</option>
<option value="FirstBank">FirstBank</option>
<option value="OPay">OPay</option>
<option value="Palmpay">Palmpay</option>
<option value="Fairmoney">Fairmoney</option>
<option value="Sterling Bank">Sterling Bank</option>
<option value="Union Bank">Union Bank</option>                                                                        <option value="5">Sterling Bank</option>
<option value="United Bank for Africa">United Bank for Africa</option>                                                                        <option value="5">Sterling Bank</option>


</select>

<label for="confirm-password">Account Number:</label>
<input type="number" id="txtaccount_number" name="txtaccount_number" required>

<label for="profile-picture">Profile Picture:</label>
<input type="file" id="image" name="photo" required>
<button type="submit" name="btnregister">Register</button>
</form>

Already a Member, <a href="login.php"><strong>Login here </strong></a></div>
</body>
</html>