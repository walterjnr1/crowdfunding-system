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
              move_uploaded_file($_FILES["image"]["tmp_name"],"../uploadImage/places/" . $_FILES["image"]["name"]);
            $uploadedImage="uploadImage/places/" . $_FILES["image"]["name"];



//save admin details
$query = "INSERT into `students` (fullname,username,password,role,email,status,last_login_date,last_login_ip,photo)
VALUES ('$fullname','$username','$password','Super Admin','$email','1','Not Available','Not Available','uploadImage/Profile/photo_not_available_large.png')";


    $result = mysqli_query($conn,$query);
      if($result){
	 
        if ($result) {
            $_SESSION['success'] = 'Tourist center added successfully!';
           
        } else {
            $_SESSION['error'] = 'Failed to add tourist center!';
          
        }
    } else {
        $_SESSION['error'] = 'Invalid image file!';
         }
} else {
    $_SESSION['error'] = 'Failed to upload image!';
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