<?php
include('../inc/controller.php');
if (empty($_SESSION['login_tracknumber'])) {
    header("Location: ../login.php");
}

  
 if(isset($_POST["btnsave"])){
$old = mysqli_real_escape_string($conn,$_POST['txtold_password']);
$pass_new = mysqli_real_escape_string($conn,$_POST['txtnew_password']);
$confirm_new = mysqli_real_escape_string($conn,$_POST['txtconfirm_password']);

  
$success='Password changed Successfully...';
  
}
  

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uxliner.com/adminkit/demo/horizontal/ltr/form-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 19:36:37 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Make a Request| <?php echo $sitename;   ?></title>
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
  <?php include('header.php'); ?>
  </header>
  
  <!-- Main Nav -->
 <?php include('sidebar.php'); ?>
  <!-- Main Nav -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>New Request</h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><i class="fa fa-angle-right"></i> New Request</li>
      </ol>
    </div>
    
    <!-- Main content -->
    <div class="content">
      <div class="row">
        <div class="col-lg-7">
          <div class="card card-outline">
            <div class="card-header bg-blue">
              <h5 class="text-white m-b-0">New Request</h5>
            </div>
            <div class="card-body">
			<?php if($success){?>
          <div class="alert alert-success" role="alert" align="center">  <?php echo ($success); ?></div>
		  <?php } 
					else if($error){?>
           <div class="alert alert-danger" role="alert">  <?php echo ($error); ?></div>
 <?php } ?>
     <form  action="" method="POST" enctype="multipart/form-data">
              
              <div class="form-group">
		    <label for="exampleInputEmail1">Title</label>
		<input type="password" class="form-control" id="txttitle" name="txttitle" value="<?php if (isset($_POST['txttitle']))?><?php echo $_POST['txttitle']; ?>" required>
              </div>
			  <div class="form-group">
                <label for="exampleInputEmail1">Description</label>
                <textarea class="form-control" id="refplotno" name="txtdescription" required>
              <?php if (isset($_POST['txtdescription'])) echo $_POST['txtdescription']; ?>
          </textarea>
              </div>
			      <div class="form-group">
                <label for="exampleInputEmail1">Amount</label>
                 <input type="number" name="txtamount" class="form-control" id="refamount" value="<?php if (isset($_POST['txtamount']))?><?php echo $_POST['txtamount']; ?>"  required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Deadline</label>
                 <input type="date" name="txtdeadline" class="form-control" id="refamount" value="<?php if (isset($_POST['txtdeadline']))?><?php echo $_POST['txtdeadline']; ?>"  required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Photo</label>
                <div align="center">
  <img src="" alt="photo" width="178" height="154" id="logo-img" style="display: none;">  <input type="file" id="image-input" accept="image/*">
</div>                                                </div>
                  <input name="image" type="file" class="form-control" onChange="display_img(this)"/>
              </div>
	      	<button type="submit" name="btnsave" class="btn btn-primary" >Submit</button>
 
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

<script>
    function display_img(input) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#logo-img').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);




          // Get the image element and input element
const imageElement = document.getElementById('logo-img');
const inputFile = document.getElementById('image-input');

// Add an event listener to the input element
inputFile.addEventListener('change', (e) => {
  // Get the selected file
  const file = e.target.files[0];

  // Create a URL for the selected file
  const url = URL.createObjectURL(file);

  // Set the image source to the selected file
  imageElement.src = url;

  // Display the image
  imageElement.style.display = 'block';
});
	    }
	}
   
</script>

</body>

<!-- Mirrored from uxliner.com/adminkit/demo/horizontal/ltr/form-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 19:36:37 GMT -->
</html>
