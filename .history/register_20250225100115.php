<?php 

// Check if form is submitted
if (isset($_POST['btnregister'])) {

    // Get form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];
    $track_number = $_POST['email'];
    $faculty = $_POST['cmdfaculty'];
    $department = $_POST['cmddept'];


 $sql = "SELECT * FROM tbladmin where username='$username' or email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
$_SESSION['error'] =' Username Address or Email Address already Exist ';

}elseif($password!=$password2){
$_SESSION['error'] ='Both Passwords Do not match';

}elseif(strlen($password) < 8){
$_SESSION['error'] ='Password must be at least 8 characters';


}else{
//save admin details
$query = "INSERT into `tbladmin` (fullname,username,password,role,email,status,last_login_date,last_login_ip,photo)
VALUES ('$fullname','$username','$password','Super Admin','$email','1','Not Available','Not Available','uploadImage/Profile/photo_not_available_large.png')";


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
            $mail->setFrom('support@booking.com.ng', 'Authur Javis University'); // Use a valid email address
            $mail->addAddress($email); //Add a recipient

            $message = "
<html>
<head>
<title>Admin Registration Details | Authur Javis University</title>
</head>
<body>

<p><strong>Hello ,</strong></p>

<p>Your admin account has been created successfully.</p>

<p><strong>Username : </strong> $username</p>
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

    $_SESSION['success']='Admin added Successfully...';

}else{
  $_SESSION['error']='Problem Adding Admin';

}
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

<label for="profile-picture">Profile Picture:</label>
<input type="file" id="photo" name="photo" required>
<button type="submit" name="btnregister">Register</button>
</form>

Already a Member, <a href="login.php"><strong>Login here </strong></a></div>
</body>
</html>