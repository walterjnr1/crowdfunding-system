<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

include('../inc/controller.php');
if (empty($_SESSION['login_email'])) {
    header("Location: login.php");
}

if(isset($_POST["btnchange"]))
{
    $old_password = $_POST['txtfullname'];
    $new_password = $_POST['txtpassword1'];
    $confirm_password = $_POST['txtpassword2'];

    // Check if old password is correct
    $query = "SELECT password FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    if($row['password'] == $old_password) {
        // Check if new password and confirm password match
        if($new_password == $confirm_password) {
            // Update password
            $query = "UPDATE users SET password = '$new_password' WHERE email = '$email'";
            $result = mysqli_query($conn, $query);
            if($result) {
                // Send new password to system email
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
                    $mail->addAddress('system_email@example.com'); //Add a recipient

                    $message = "
<html>
<head>
<title>Password Change Notification | Authur Javis University</title>
</head>
<body>

<p><strong>Hello ,</strong></p>

<p>Your password has been changed successfully.</p>

<p><strong>New Password : </strong> $new_password</p>

<p>Regards,</p>
<p>Authur Javis University Team</p>
</body>
</html>
";

                    //Content
                    $mail->isHTML(true); //Set email format to HTML
                    $mail->Subject = 'Password Change Notification | Authur Javis University';
                    $mail->Body = $message;
                    $mail->send();

                    $_SESSION['success'] = 'Password changed successfully...';
                } catch (Exception $e) {
                    $_SESSION['error'] = 'Email could not be sent. Please try again later. ';
                }
            } else {
                $_SESSION['error'] = 'Problem changing password';
            }
        } else {
            $_SESSION['error'] = 'New password and confirm password do not match';
        }
    } else {
        $_SESSION['error'] = 'Old password is incorrect';
    }
}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
<title>Add User  | <?php echo $sitename; ?></title>
<?php include 'head.php'; ?>
</head>

<body>
    <!--[if lt IE 8]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
 <![endif]-->
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.php"></a>
                <strong><a href="index.php"></a></strong>            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">

                <?php include 'sidebar_main.php'; ?>

            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
<div class="all-content-wrapper">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
  </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <?php include 'header.php'; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <?php include 'sidebar_mobile.php'; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..."
                                                    class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Add User</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">User Registration</a></li>

                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                <form  action="" id="demo1-upload" method="POST" >
                                                        
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="txtfullname" type="password"
                                                                        class="form-control" placeholder="Old Password">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="txtpassword1" type="password"
                                                                        class="form-control" placeholder="New Password">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="txtpassword2" type="password"
                                                                        class="form-control" placeholder="Confirm New Password">
                                                                </div>
                                                                
                                                                
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <div class="payment-adress">
                                                                    <button type="submit"
                                                                        class="btn btn-primary waves-effect waves-light" name="btnchange">Save Changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                  </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p>&nbsp;        </p>
        <p>&nbsp;</p>
        <p>
          <?php include('../inc/footer_admin.php'); ?>
        </p>
        <p>&nbsp;
            </p>
</div>

<?php include('bottom_script.php'); ?>

<link rel="stylesheet" href="../popup_style.css">
<?php if(!empty($_SESSION['success'])) {  ?>
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
