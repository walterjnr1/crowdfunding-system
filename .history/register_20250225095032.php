<?php 

// register.php

// Database connection settings
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

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

    // Check if passwords match
    if ($password != $confirm_password) {
        echo "Passwords do not match";
        exit;
    }

    // Hash password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Check if email already exists
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        echo "Email already exists";
        exit;
    }

    // Insert data into database
    $query = "INSERT INTO users (username, email, password, track_number, faculty, department) VALUES ('$username', '$email', '$password', '$track_number', '$faculty', '$department')";
    if ($conn->query($query) === TRUE) {
        echo "Registration successful";
    } else {
        echo "Error: " . $conn->error;
    }

    // Upload image
    $target_dir = "uploadImage/Profile/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if (isset($_POST["btnregister"])) {
        $check = getimagesize($_FILES["photo"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["photo"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Send email
    $to = $email;
    $subject = "Registration Successful";
    $message = "Dear $username, your registration was successful.";
    $headers = "From: your_email@example.com";
    mail($to, $subject, $message, $headers);
}

$conn->close();

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
            <input type="text" id="username" name="username" required>

            <label for="email">Track Number:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm-password">Confirm Password:</label>
            <input type="password" id="confirm-password" name="confirm-password" required>

            <label for="confirm-password">Email:</label>
            <input type="password" id="confirm-password" name="confirm-password" required>

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