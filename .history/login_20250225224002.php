<?php
include('inc/controller_landing_page.php');

if(isset($_POST['btnlogin']))
{
$tracknumber = $_POST['txttracknumber'];
$password = $_POST['txtpassword'];

$sql = "SELECT * FROM users WHERE track_number='".$tracknumber."' and password = '".$password."' and status = '1'";
$result = mysqli_query($conn,$sql);
$row  = mysqli_fetch_array($result);
 $_SESSION["login_tracknumber"] = $row['track_number'];
 $_SESSION['logged']=time();


 $count=mysqli_num_rows($result);
 if(isset($_SESSION["login_tracknumber"])) {
{
header("Location: index.php");
}
}
else {
$_SESSION['error']=' Wrong Track NUmber and Password';
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
    <link rel="icon" type="image/png" sizes="16x16" href="uploadImage/Logo/logo.png">

</head>
<body>
<div class="login-container">
        <h2><a href="index.php"><img src="uploadImage/Logo/logo.png" alt="logo" width="151" height="68" border="0" longdesc="index.php"></a></h2>
        <h2>Login Form</h2>
        <form action="login.php" method="post">
            <label for="username">Track Number:</label>
            <input type="text" id="txttracknumber" name="txttracknumber" required>

            <label for="password">Password:</label>
            <input type="password" id="txtpassword" name="txtpassword" required>

            <button type="submit" name="btnlogin">Login</button>
        </form>
Not Yet a Member? <a href="registration.php">Register Here </a></div>

<div align="center"><strong>
  <?php include('inc/footer.php'); ?>
  </strong>
</div>
</body>
</html>