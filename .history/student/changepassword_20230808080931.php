<?php
include('topbar.php');
if(empty($_SESSION['login_username']))
  {   
  header("Location: ../index.php"); 
  }

  $username=$_SESSION['login_username'];

$stmt = $dbh->query("SELECT * FROM customer where username='$username'");
$row_customer = $stmt->fetch();

$q = "SELECT * FROM customer where username='$username'";
  $q1 = $conn->query($q);
  while($row = mysqli_fetch_array($q1)){
    extract($row);
    $db_pass = $row['password'];
	//$email = $row['email'];
  }
  
 if(isset($_POST["btnchange"])){
$old = mysqli_real_escape_string($conn,$_POST['txtold_password']);
$pass_new = mysqli_real_escape_string($conn,$_POST['txtnew_password']);
$confirm_new = mysqli_real_escape_string($conn,$_POST['txtconfirm_password']);

  
  if($db_pass!=$old){ ?> 
	<?php $error='Old Password not matched ';?>
  
  <?php } else if($pass_new!=$confirm_new){ ?> 
<?php $error='NEW Password and CONFIRM password not Matched';?>
  <?php } else {
    //$pass = md5($_POST['password']);
   $sql = "update customer set `password`='$confirm_new' where username='$username'";
  $res = $conn->query($sql);
  
  
//save activity log details
$task= $fullname.' '.'Changed Password'.' '. 'On' . ' '.$current_date;
$sql = 'INSERT INTO activity_log(task) VALUES(:task)';
$statement = $dbh->prepare($sql);
$statement->execute([
	':task' => $task
]);

  ?>
   <?php $success='Password changed Successfully...';?>
  <script>
    //alert('Password changed Successfully...');
    window.location ="logout.php";
  </script> 
  <?php
    }
  }

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uxliner.com/adminkit/demo/horizontal/ltr/form-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 19:36:37 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Change Password| <?php echo $row_website['website_name'];   ?></title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- v4.0.0 -->
<link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">

<!-- Favicon -->
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $favicon; ?>">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Theme style -->
<link rel="stylesheet" href="dist/css/style.css">
<link rel="stylesheet" href="dist/css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="dist/css/et-line-font/et-line-font.css">
<link rel="stylesheet" href="dist/css/themify-icons/themify-icons.css">
<link rel="stylesheet" href="dist/css/simple-lineicon/simple-line-icons.css">

<!-- form wizard -->
<link rel="stylesheet" href="dist/plugins/formwizard/jquery-steps.css">

<!-- hmenu -->
<link rel="stylesheet" href="dist/plugins/hmenu/ace-responsive-menu.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">
  <header class="main-header"> 
  <!-- Logo --> 
    <a href="index.php" class="logo blue-bg"> 
    <!-- mini logo for sidebar mini 50x50 pixels --> 
    <span class="logo-mini"><img src="<?php echo $logo; ?>" alt=""></span> 
    <!-- logo for regular state and mobile devices --> 
    <span class="logo-lg"><img src="<?php echo $logo; ?>" alt="" width="122" height="55"></span> </a> 
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
          <li class="dropdown user user-menu p-ph-res"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="../Admin/<?php echo $row_customer['photo']; ?>" class="user-image" alt="User Image"> <span class="hidden-xs"><?php echo $row_customer['fullname']; ?>  </span> </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <div class="pull-left user-img"><img src="../Admin/<?php echo $row_customer['photo']; ?> " class="img-responsive img-circle" alt="User"></div>
                <p class="text-left"><?php echo $row_customer['fullname']; ?>  <small><?php echo $row_customer['email']; ?> </small> </p>
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
      <h1>Change Password</h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><i class="fa fa-angle-right"></i> Change Password</li>
      </ol>
    </div>
    
    <!-- Main content -->
    <div class="content">
      <div class="row">
        <div class="col-lg-9">
          <div class="card card-outline">
            <div class="card-header bg-blue">
              <h5 class="text-white m-b-0">Change Password</h5>
            </div>
            <div class="card-body">
			<?php if($success){?>
          <div class="alert alert-success" role="alert" align="center">  <?php echo ($success); ?></div>
		  <?php } 
					else if($error){?>
           <div class="alert alert-danger" role="alert">  <?php echo ($error); ?></div>
 <?php } ?>
                            <form  action="" method="POST" >
              
              <div class="form-group">
           
			   
		    <label for="exampleInputEmail1">Old Password</label>

		<input type="password" class="form-control" id="txtold_password" name="txtold_password" value="<?php if (isset($_POST['txtold_password']))?><?php echo $_POST['txtold_password']; ?>" required>

              </div>
			  <div class="form-group">
                <label for="exampleInputEmail1">New Password</label>
		<input type="password" class="form-control" id="refplotno" name="txtnew_password" value="<?php if (isset($_POST['txtnew_password']))?><?php echo $_POST['txtnew_password']; ?>" required>

              </div>
			   <div class="form-group">
                <label for="exampleInputEmail1">Confirm New Password</label>
                 <input type="password" name="txtconfirm_password" class="form-control" id="refamount" value="<?php if (isset($_POST['txtconfirm_password']))?><?php echo $_POST['txtconfirm_password']; ?>"  required>
              </div>
              
 
		<button type="submit" name="btnchange" class="btn btn-primary" >Change</button>
 
            </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row m-t-3"></div>
	        <div class="row m-t-3"></div>
      <div class="row m-t-3"></div>
      <div class="row m-t-3"></div>

    </div>
    <!-- /.content --> 
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs"></div>
  <?php include('../Admin/footer.php');?></footer>
</div>
<!-- ./wrapper --> 

<!-- jQuery 3 --> 



<script src="dist/js/jquery.min.js"></script> 

<!-- v4.0.0-alpha.6 --> 
<script src="dist/bootstrap/js/bootstrap.min.js"></script> 

<!-- template --> 
<script src="dist/js/adminkit.js"></script>

<!-- form wizard --> 
<script src="dist/plugins/formwizard/jquery-steps.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script> 
<script>
    var frmRes = $('#frmRes');
    var frmResValidator = frmRes.validate();
	
    var frmInfo = $('#frmInfo');
    var frmInfoValidator = frmInfo.validate();

    var frmLogin = $('#frmLogin');
    var frmLoginValidator = frmLogin.validate();

    var frmMobile = $('#frmMobile');
    var frmMobileValidator = frmMobile.validate();

    $('#demo1').steps({
      onChange: function (currentIndex, newIndex, stepDirection) {
        console.log('onChange', currentIndex, newIndex, stepDirection);
        // tab1
        if (currentIndex === 0) {
          if (stepDirection === 'forward') {
            var valid = frmRes.valid();
            return valid;
          }
          if (stepDirection === 'backward') {
            frmResValidator.resetForm();
          }
        }
		
		// tab2
        if (currentIndex === 1) {
          if (stepDirection === 'forward') {
            var valid = frmInfo.valid();
            return valid;
          }
          if (stepDirection === 'backward') {
            frmInfoValidator.resetForm();
          }
        }

        // tab3
        if (currentIndex === 2) {
          if (stepDirection === 'forward') {
            var valid = frmLogin.valid();
            return valid;
          }
          if (stepDirection === 'backward') {
            frmLoginValidator.resetForm();
          }
        }

        // tab4
        if (currentIndex === 3) {
          if (stepDirection === 'forward') {
            var valid = frmMobile.valid();
            return valid;
          }
          if (stepDirection === 'backward') {
            frmMobileValidator.resetForm();
          }
        }

        return true;

      },
      onFinish: function () {
        alert('Wizard Completed');
      }
    });
  </script> 
<script>
    $('#demo').steps({
      onFinish: function () {
        alert('Wizard Completed');
      }
    });
  </script>
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



</body>

<!-- Mirrored from uxliner.com/adminkit/demo/horizontal/ltr/form-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 19:36:37 GMT -->
</html>
