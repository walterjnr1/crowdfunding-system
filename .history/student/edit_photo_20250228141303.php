<?php
include('../inc/controller.php');
if (empty($_SESSION['login_tracknumber'])) {
    header("Location: ../login.php");
}

if(isset($_POST["btnupdate"]))
{


$file_type = $_FILES['userimage']['type']; //returns the mimetype
$allowed = array("image/jpeg", "image/gif","image/jpeg", "image/webp","image/png");
if(!in_array($file_type, $allowed)) {
$error = 'Only jpeg,Webp, gif, and png files are allowed.';
 // exit();

}else{
$image= addslashes(file_get_contents($_FILES['userimage']['tmp_name']));
$image_name= addslashes($_FILES['userimage']['name']);
$image_size= getimagesize($_FILES['userimage']['tmp_name']);
move_uploaded_file($_FILES["userimage"]["tmp_name"],"../uploadImage/Profile/" . $_FILES["userimage"]["name"]);			
$image_path="uploadImage/Profile/" . $_FILES["userimage"]["name"];
			
//edit student photo
$sql = "UPDATE students SET photo=? where track_number=?";
$stmt= $dbh->prepare($sql);
$stmt->execute([$image_path,$track_number]);
if($stmt) {
$success='Photo Updated Successfully ';
//header("Location: profile-photo.php"); 

}else{
$error='Problem Editing Photo ';
}
}
}
  ?>
  
  <?php

  ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uxliner.com/adminkit/demo/horizontal/ltr/pages-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 19:36:56 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Student Photo (<?php echo $student_name; ?>) | <?php echo $sitename;   ?></title>
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
  <?php include('header.php'); ?>
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
        <li><i class="fa fa-angle-right"></i> Profile Photo</li>
      </ol>
    </div>
    
    <!-- Main content -->
    <div class="content">
      <div class="row">
        <div class="col-lg-4">
          <div class="user-profile-box m-b-3">
            <div class="box-profile text-white"> <img class="profile-user-img img-responsive img-circle m-b-2" src="../<?php echo $student_photo; ?>" alt="student picture">
              <h3 class="profile-username text-center style1"><?php echo $student_name; ?></h3>
              <p class="text-center"></p>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="info-box">
            <div class="card tab-style1"> 
              <!-- Nav tabs -->
              <ul class="nav nav-tabs profile-tab" role="tablist">
               
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Photo</a></li>
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
             <form  action="" method="POST" enctype="multipart/form-data">

					<div class="form-group">
                                  <input name="userimage" type="file" class="form-control" onChange="display_img(this)"/>
                        <div class="col-md-10">
                                    <div align="center"><img src="../<?php echo $st;   ?>" alt="client photo" width="178" height="154" id="logo-img">   
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
