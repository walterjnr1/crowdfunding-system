<?php
include('inc/controller_landing_page.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" sizes="16x16" href="uploadImage/Logo/logo.png">

</head>
<body>
<div class="login-container">
        <h2><a href="index.php"><img src="uploadImage/Logo/logo.png" alt="logo" width="151" height="68" border="0" longdesc="index.php"></a></h2>
        <h2>Start your Donation</h2>
        <form action="login.php" method="post">
            <label for="username">Track Number:</label>
            <input type="text" id="txttracknumber" name="txttracknumber" required>

            <label for="password">Password:</label>
            <input type="password" id="txtpassword" name="txtpassword" required>

            <button type="submit" name="btnlogin">Login</button>
        </form>
Not Yet a Member? <a href="register.php">Register Here </a></div>

<p align="center"><strong><?php include('inc/footer.php'); ?></strong></p>

<link rel="stylesheet" href="popup_style.css">
<p>&nbsp;</p>
<p>
  <?php if(!empty($_SESSION['success'])) {  ?>
</p>
<p>&nbsp; </p>
<div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      <strong>Success</strong>
    </h1>
    <p><?php echo $_SESSION['success']; ?></p>
    <p>
      <button class="button button--success" data-for="js_success-popup">Close</button>
    </p>
  </div>
</div>
<?php unset($_SESSION["success"]);
} ?>
<?php if(!empty($_SESSION['error'])) {  ?>
<div class="popup popup--icon -error js_error-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      <strong>Error</strong>
    </h1>
    <p><?php echo $_SESSION['error']; ?></p>
    <p>
      <button class="button button--error" data-for="js_error-popup">Close</button>
    </p>
  </div>
</div>
<?php unset($_SESSION["error"]);  } ?>
    <script>
      var addButtonTrigger = function addButtonTrigger(el) {
  el.addEventListener('click', function () {
    var popupEl = document.querySelector('.' + el.dataset.for);
    popupEl.classList.toggle('popup--visible');
  });
};

Array.from(document.querySelectorAll('button[data-for]')).
forEach(addButtonTrigger);
    </script>
</body>
</html>