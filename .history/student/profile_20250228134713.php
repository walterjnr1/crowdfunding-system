<?php

include('../inc/controller.php');
if (empty($_SESSION['login_tracknumber'])) {
    header("Location: ../login.php");
}

  
if(isset($_POST["btnupdate"]))
{
$this_fullname = $_POST['txtfullname'];
$this_email = $_POST['txtemail'];
$this_dob = $_POST['cmdfaculty'];
$this_dept = $_POST['cmddept'];
$this_account_number = $_POST['txtaccount_number'];
$this_bank = $_POST['cmdbank'];


	
//edit profile details
$sql = "UPDATE students SET fullname=?, email=?,DOB=?, city=?, state=?,country=?, nextkin=?,company=? where username=?";
$stmt= $dbh->prepare($sql);
$stmt->execute([$fullname,$email,$dob,$city, $state,$country,$nextkin,$company,$username]);
if($stmt) {
  
//$success='Profile Updated Successfully ';
header("Location: profile.php"); 

}else{
$error='Problem Editing Profile ';
}
}

  ?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uxliner.com/adminkit/demo/horizontal/ltr/pages-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 19:36:56 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Profile (<?php echo $student_name; ?>) | <?php echo $sitename;   ?></title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- v4.0.0 -->
<link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">

<!-- Favicon -->
<link rel="icon" type="image/png" sizes="16x16" href="../uploadImage/Logo/logo.png">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Theme style -->
<link rel="stylesheet" href="dist/css/style.css">
<link rel="stylesheet" href="dist/css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="dist/css/et-line-font/et-line-font.css">
<link rel="stylesheet" href="dist/css/themify-icons/themify-icons.css">
<link rel="stylesheet" href="dist/css/simple-lineicon/simple-line-icons.css">

<!-- hmenu -->
<link rel="stylesheet" href="dist/plugins/hmenu/ace-responsive-menu.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<style type="text/css">
<!--
.style1 {color: #000000}
-->
</style>
</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">
<header class="main-header"> 
    <!-- Logo --> 
    <a href="index.php" class="logo blue-bg"> 
    <!-- mini logo for sidebar mini 50x50 pixels --> 
    <span class="logo-mini"><img src="../<?php echo $logo; ?>" alt=""></span> 
    <!-- logo for regular state and mobile devices --> 
    <span class="logo-lg"><img src="../<?php echo $logo; ?>" alt="" width="122" height="55"></span> </a> 
    <!-- Header Navbar -->
    <nav class="navbar blue-bg navbar-static-top"> 
      <!-- Sidebar toggle button-->
      <div class="pull-left search-box">
        <form action="#" method="get" class="search-form">
          <div class="input-group">
            <input name="search" class="form-control" placeholder="" type="text">
            <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i> </button>
            </span></div>
        </form>
        <!-- search form --> </div>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
          <!-- User Account  -->
          <li class="dropdown user user-menu p-ph-res"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="../<?php echo $student_photo; ?>" class="user-image" alt="student Image"> <span class="hidden-xs"><?php echo $student_name; ?>  </span> </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <div class="pull-left user-img"><img src="../<?php echo $student_photo;   ?> " class="img-responsive img-circle" alt="User"></div>
                <p class="text-left"><?php echo $student_name; ?>  <small><?php echo $student_email; ?> </small> </p>
              </li>
              <li><a href="profile.php"><i class="icon-profile-male"></i> My Profile</a></li>
			   <li role="separator" class="divider"></li>
              <li><a href="changepassword.php"><i class="icon-gears"></i> Change Password</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Main Nav -->
 <?php include('sidebar.php'); ?>
  <!-- Main Nav -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>Profile page</h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><i class="fa fa-angle-right"></i> Profile page</li>
      </ol>
    </div>
    
    <!-- Main content -->
    <div class="content">
      <div class="row">
        <div class="col-lg-4">
          <div class="user-profile-box m-b-3">
            <div class="box-profile text-white"> <img class="profile-user-img img-responsive img-circle m-b-2" src="../<?php echo $student_photo; ?>" alt="client profile picture">
              <h3 class="profile-username text-center style1"><?php echo $fullname; ?> </h3>
              <p class="text-center"></p>
            </div>
          </div>
          <div class="card m-b-3">
            <div class="card-body">
              <div class="box-body"> 
			  
               
                <strong><i class="fa fa-graduation-cap margin-r-5"></i> Track Number</strong>
                <p class="text-muted"><?php echo $track_number; ?></p>
                <hr>
                <strong><i class="fa fa-bank margin-r-5"></i>Bank Name</strong>
                <p><?php echo $bank; ?></p>
              <hr>
              <strong><i class="fa fa-bank margin-r-5"></i>Account Number</strong>
                <p><?php echo $account_number; ?></p>
              <hr>
                <strong><i class="fa fa-euro margin-r-5"></i>Wallet Balance</strong>
                <p>N<?php echo number_format((float)$balance ,2); ?></p>
              </div>
              <!-- /.box-body --> 
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="info-box">
            <div class="card tab-style1"> 
              <!-- Nav tabs -->
              <ul class="nav nav-tabs profile-tab" role="tablist">
               
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Details</a></li>
              </ul>
              <p><?php if($success){?>
          <div class="alert alert-success" role="alert" align="center">  <?php echo ($success); ?></div>
		  <?php } 
					else if($error){?>
           <div class="alert alert-danger" role="alert">  <?php echo ($error); ?></div>
 <?php } ?></p>
              <ul class="nav nav-tabs profile-tab" role="tablist">
                <li class="nav-item"> </li>
              </ul>
              <!-- Tab panes -->
         
                <!--second tab-->
              
                <div class="tab-pane" id="settings" role="tabpanel">
                  <div class="card-body">
             <form  action="" method="POST">

                      <div class="form-group">
                        <label class="col-md-12">Full Name</label>
                        <div class="col-md-12">
                          <input name="txtfullname" class="form-control form-control-line" type="text" value="<?php echo $student_name; ?>">
                        </div>
                      </div>
					   
					     <div class="form-group">
                        <label class="col-md-12">Email Address</label>
                        <div class="col-md-12">
                          <input class="form-control form-control-line" name="txtemail" type="text" value="<?php echo $student_email; ?>">
                        </div>
                      </div>
					            <div class="form-group">
                      <label for="example-email" class="col-md-12">Faculty </label>
                      <div class="col-md-12">
                      <select name="cmdfaculty" class="form-control form-control-line">
                      <option value="<?php echo $faculty;  ?>" selected=""disabled=""><?php echo $faculty;  ?></option>
                      <option value="Faculty Of Natural And Applied Sciences">Faculty Of Natural And Applied Sciences</option>
                      <option value="Faculty Of Humanities Management And Social Sciences">Faculty Of Humanities Management And Social Sciences</option>
                      <option value="Faculty Of Basic Medical Sciences">Faculty Of Basic Medical Sciences</option>
                      <option value="Faculty Of Law">Faculty Of Law</option>
                      <option value="Faculty Of Education">Faculty Of Education</option>
                      </select>
                      </div>
					            </div>

                      <div class="form-group">
                      <label for="example-email" class="col-md-12">Department </label>
                      <div class="col-md-12">
                      <select name="cmddept" class="form-control form-control-line">
                      <option value="<?php echo $dept;  ?>" selected=""disabled=""><?php echo $dept;  ?></option>
                      <option value="Computer Science">Computer Science</option>
                      <option value="Arts and social science">Arts and social science</option>
                      <option value="Educational foundations">Educational foundations</option>
                      <option value="Anatomy">Anatomy</option>
                      <option value="Human Anatomy">Human Anatomy</option>
                      </select>
                      </div>
					            </div>
                      <div class="form-group">
                      <label for="example-email" class="col-md-12">Bank </label>
                      <div class="col-md-12">
                      <select name="cmdbank" class="form-control form-control-line">
                      <option value="<?php echo $bank;  ?>" selected=""disabled=""><?php echo $bank;  ?></option>
                      <option value="Access Bank">Access Bank</option>
<option value="FirstBank">FirstBank</option>
<option value="OPay">OPay</option>
<option value="Palmpay">Palmpay</option>
<option value="Fairmoney">Fairmoney</option>
<option value="Sterling Bank">Sterling Bank</option>
<option value="Union Bank">Union Bank</option>                                                                        <option value="5">Sterling Bank</option>
<option value="United Bank for Africa">United Bank for Africa</option>    
                      </select>
                      </div>
					            </div>

                      <div class="form-group">
                        <label class="col-md-12">Account Number</label>
                        <div class="col-md-12">
                          <input class="form-control form-control-line" name="txtaccount_number" type="text" value="<?php echo $account_number; ?>">
                        </div>
                      </div>
                      </div>
					
                      <div class="form-group">
                        <div class="col-sm-12">
						<button type="submit" name="btnupdate" class="btn btn-success">Update Profile</button>

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
      <!-- Main row --> 
    </div>
    <!-- /.content --> 
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs"></div>
   <?php include('footer.php'); ?></footer>
</div>
<!-- ./wrapper --> 

<!-- jQuery 3 --> 
<script src="dist/js/jquery.min.js"></script>
 
<script src="dist/plugins/popper/popper.min.js"></script>

<!-- v4.0.0-alpha.6 -->
<script src="dist/bootstrap/js/bootstrap.min.js"></script>

<!-- template --> 
<script src="dist/js/adminkit.js"></script>

<!-- Chart Peity JavaScript --> 
<script src="dist/plugins/peity/jquery.peity.min.js"></script> 
<script src="dist/plugins/functions/jquery.peity.init.js"></script>
<script src="dist/plugins/hmenu/ace-responsive-menu.js" ></script> 
<!--Plugin Initialization--> 
<script >
         $(document).ready(function () {
             $("#respMenu").aceResponsiveMenu({
                 resizeWidth: '768', // Set the same in Media query       
                 animationSpeed: 'fast', //slow, medium, fast
                 accoridonExpAll: false //Expands all the accordion menu on click
             });
         });
</script>
<script>
    function display_img(input) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#logo-img').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	}
   
</script>
</body>

<!-- Mirrored from uxliner.com/adminkit/demo/horizontal/ltr/pages-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 19:36:56 GMT -->
</html>
