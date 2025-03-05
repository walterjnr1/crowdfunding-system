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
            
            <label for="profile-picture">Profile Picture:</label>
            <input type="file" id="profile-picture" name="profile-picture" required>

            <button type="submit">Register</button>
        </form>
Already a Member, <a href="login.php"><strong>Login here </strong></a></div>
</body>
</html>