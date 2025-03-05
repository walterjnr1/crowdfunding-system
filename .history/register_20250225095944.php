<?php 

// Check if form is submitted
if (isset($_POST['btnregister'])) {
    // Get form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];
    $track_number = $_POST['email']; // Note: This field is currently an email field, but it's labeled as Track Number
    $faculty = $_POST['cmdfaculty'];
    $department = $_POST['cmddept'];

    
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