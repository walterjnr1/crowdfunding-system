<?php
include('../inc/controller.php');
if (empty($_SESSION['login_tracknumber'])) {
    header("Location: ../login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uxliner.com/adminkit/demo/horizontal/ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 19:35:54 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Dashboard|<?php echo $sitename ;?></title>
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
.style1 {
	color: #FFFFFF;
	font-size: 18px;
	font-weight: bold;
}
-->
</style>
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
          <li class="dropdown user user-menu p-ph-res"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="../Admin/<?php echo $row_cust['photo']; ?>" class="user-image" alt="User Image"> <span class="hidden-xs"><?php echo $row_cust['fullname']; ?>  </span> </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <div class="pull-left user-img"><img src="../Admin/<?php echo $row_cust['photo']; ?> " class="img-responsive img-circle" alt="User"></div>
                <p class="text-left"><?php echo $student_name; ?>  <small><?php echo $row_cust['email']; ?> </small> </p>
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
      <h1>Welcome <?php echo $row_cust['fullname']; ?>  </h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><i class="fa fa-angle-right"></i>Dashboard</li>
      </ol>
    </div>
   
    <!-- Main content -->
    <div class="content">
      <div class="row">
       
      
        
      </div>
      <!-- /.row -->
      
	         
     
      <div class="row">
        <div class="col-lg-3">
          <div class="tile-progress tile-pink">
            <div class="tile-header">
              <h5>Account Number</h5>
              <h3><?php echo $row_customer['accountnumber']; ?></h3>
            </div>
            <div class="tile-progressbar"> <span data-fill="65.5%" style="width: 65.5%;"></span> </div>
            <div class="tile-footer">
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="tile-progress tile-red">
            <div class="tile-header">
              <h5>Balance</h5>
              <h3>$<?php echo number_format((float) $row_customer['balance'] ,2); ?></h3>

            </div>
            <div class="tile-progressbar"> <span data-fill="70%" style="width: 70%;"></span> </div>
            <div class="tile-footer">
            </div>
          </div>
        </div>
		
        <div class="col-lg-3">
          <div class="tile-progress tile-cyan">
            <div class="tile-header">
              <h5>Total Withdrawal today</h5>
              <h3><?php	
		$debit = $conn->query("SELECT SUM(transfer_amt) as amount FROM tbltransaction where username='$username' and operation='Debit' and date(transferdate)= '".date('Y-m-d')."'");
		echo $debit->num_rows > 0 ? "$".number_format($debit->fetch_array()['amount'],2) : "0.00"; 
		?></h3>
            </div>
           <a href="continue_payment.php"> <div class="tile-progressbar style1"> 
		   </div>
		               <div class="tile-progressbar"> <span data-fill="75.5%" style="width: 75.5%;"></span> </div>

           </a>
            <div class="tile-footer">
            </div>
          </div>
        </div> 
       
		   <div class="col-lg-3">
          <div class="tile-progress tile-dark">
            <div class="tile-header">
              <h5>Total Deposit today</h5>
              <h3><?php	
				$credit = $conn->query("SELECT SUM(transfer_amt) as amount FROM tbltransaction where username='$username' and operation='Credit' and date(transferdate)= '".date('Y-m-d')."'");
					echo $credit->num_rows > 0 ? "$".number_format($credit->fetch_array()['amount'],2) : "0.00"; ?></h3>
            </div>
            <div class="tile-progressbar"> <span data-fill="75.5%" style="width: 75.5%;"></span> </div>
            <div class="tile-footer">
            </div>
          </div>
        </div>
		
		
		
      </div>
      <!-- /.row -->
      
      <div class="row"></div>
      <!-- /.row -->
      
      <div class="row" >
        <table width="1600" height="249" align="center">
          <tr>
            <td width="1600" align="center">
			<div class="col-xl-8" >
              <div class="info-box">
                <div class="card-header">
                  <h5 align="center" class="card-title">Recent Transaction</h5>
                </div>
                <div class="table-responsive">
                  <div align="center">
                    <table width="114%" height="87" class="table table-hover">
							  <thead class="bg-primary text-white">

                        <tr>
						   <th><div align="center">S/N</div></th>
                          <th><div align="center">Description</div></th>
                          <th><div align="center">Amount</div></th>
                          <th><div align="center">Depositor</div></th>
						  <th><div align="center">Date of Transaction</div></th>

                        </tr>
                      </thead>
                      <tbody>
					    <?php 
$data = $dbh->query("SELECT * FROM tbltransaction where username='$username' ORDER BY transferdate DESC LIMIT 20")->fetchAll();
$cnt=1;
foreach ($data as $row) {

?>
                        <tr>
						  <td><div align="center"><?php echo $cnt; ?></div></td>

                          <td><div align="center"><?php echo $row['operation']; ?></div></td>
                           <td>
                             <div align="center">
                               <button type="button" class="btn btn-sm btn-outline-success btn-rounded">$<?php echo number_format((float) $row['transfer_amt'] ,2); ?></button>
                           </div></td>
                          <td><div align="center"><?php echo $row['depositor']; ?></div></td>
		                          <td><div align="center"><?php echo $row['transferdate']; ?></div></td>

                        </tr>
					<?php $cnt=$cnt+1;} ?>
                      </tbody>
					  
                       </table>
                  </div>
                </div>
              </div>
            </div></td>
          </tr>
        </table>
        <!-- /.row -->
</div>
    <!-- /.content --> 
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs"></div>
    <div align="center">
      <?php include('../Admin/footer.php'); ?>
    </div>
  </footer>
</div>
<!-- ./wrapper --> 

<!-- jQuery 3 --> 
<script src="dist/js/jquery.min.js"></script> 

<!-- v4.0.0-alpha.6 --> 
<script src="dist/bootstrap/js/bootstrap.min.js"></script> 

<!-- template --> 
<script src="dist/js/adminkit.js"></script> 

<!-- Morris JavaScript --> 
<script src="dist/plugins/raphael/raphael-min.js"></script> 
<script src="dist/plugins/morris/morris.js"></script> 
<script src="dist/plugins/functions/dashboard1.js"></script> 

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
</body>

<!-- Mirrored from uxliner.com/adminkit/demo/horizontal/ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 19:35:54 GMT -->
</html>
