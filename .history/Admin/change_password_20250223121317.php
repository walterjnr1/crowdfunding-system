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

if(isset($_POST["btnsubmit"]))
{

$email = mysqli_real_escape_string($conn,$_POST['txtemail']);
$fullname = mysqli_real_escape_string($conn,$_POST['txtfullname']);
$password = mysqli_real_escape_string($conn,$_POST['txtpassword']);


 $sql = "SELECT * FROM users where email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
$_SESSION['error'] =' Email Address already Exist ';

}elseif(strlen($password) < 8){
$_SESSION['error'] ='Password must be at least 8 characters';


}else{
//save user details
$query = "INSERT into `users` (email,password,fullname,status)
VALUES ('$email','$password','$fullname','1')";
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

    $_SESSION['success']='User added Successfully...';

}else{
  $_SESSION['error']='Problem Adding User';

}
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
                                                <form  action="" id="demo1-upload" method="POST" enctype="multipart/form-data">
                                                        
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="txtfullname" type="text"
                                                                        class="form-control" placeholder="Full Name">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="txtpassword" type="password"
                                                                        class="form-control" placeholder="Password">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="txtemail" type="email"
                                                                        class="form-control" placeholder="Email">
                                                                </div>
                                                                
                                                                
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <div class="payment-adress">
                                                                    <button type="submit"
                                                                        class="btn btn-primary waves-effect waves-light" name="btnsubmit">Submit</button>
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
