<?php
include('inc/controller_landing_page.php');

if(isset($_POST['btnlogin']))
{
$username = $_POST['txtusername'];
$password = $_POST['txtpassword'];

$sql = "SELECT * FROM users WHERE username='".$username."' and password = '".$password."' and status = '1'";
$result = mysqli_query($conn,$sql);
$row  = mysqli_fetch_array($result);
 $_SESSION["login_username"] = $row['username'];
 $_SESSION['logged']=time();


 $count=mysqli_num_rows($result);
 if(isset($_SESSION["login_username"])) {
{
header("Location: index.php");
}
}
else {
$_SESSION['error']=' Wrong Username and Password';
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="login-container">
        <h2><a href="index.php"><img src="uploadImage/Logo/logo.png" alt="logo" width="151" height="68" border="0" longdesc="index.php"></a></h2>
        <h2>Login Form</h2>
        <form action="login.php" method="post">
            <label for="username">Track Number:</label>
            <input type="text" id="txttracknumber" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
Not Yet a Member? <a href="registration.php">Register Here </a></div>

<div align="center"><strong>
  <?php include('inc/footer.php'); ?>
  </strong>
</div>
</body>
</html>