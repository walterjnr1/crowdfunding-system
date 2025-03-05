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
  <?php include('header.php'); ?>
  </header>
  
  <!-- Main Nav -->
 <?php include('sidebar.php'); ?>
  <!-- Main Nav -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>Welcome <?php echo $student_name; ?>  </h1>
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
              <h5>Track Number</h5>
              <h3><?php echo $track_number; ?></h3>
            </div>
            <div class="tile-progressbar"> <span data-fill="65.5%" style="width: 65.5%;"></span> </div>
            <div class="tile-footer">
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="tile-progress tile-red">
            <div class="tile-header">
              <h5>Account Number</h5>
              <h3><?php echo $account_number; ?></h3>

            </div>
            <div class="tile-progressbar"> <span data-fill="70%" style="width: 70%;"></span> </div>
            <div class="tile-footer">
            </div>
          </div>
        </div>
		
        <div class="col-lg-3">
          <div class="tile-progress tile-green">
            <div class="tile-header">
              <h5>Wallet Balance</h5>
              <h3>N<?php echo number_format((float) $balance ,2); ?></h3>

            </div>
            <div class="tile-progressbar"> <span data-fill="70%" style="width: 70%;"></span> </div>
            <div class="tile-footer">
            </div>
          </div>
        </div>
       
        <div class="col-lg-3">
          <div class="tile-progress tile-blue">
            <div class="tile-header">
              <h5>No of Request(s)</h5>
              <h3><?php echo $number_of_request; ?></h3>

            </div>
            <div class="tile-progressbar"> <span data-fill="70%" style="width: 70%;"></span> </div>
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
                  <h5 align="center" class="card-title">Recent Donation(s). last 8 Transactions</h5>
                </div>
                <div class="table-responsive">
                  <div align="center">
                    <table width="114%" height="87" class="table table-hover">
							  <thead class="bg-primary text-white">
                
                        <tr>
						   <th><div align="center">S/N</div></th>
                          <th><div align="center">Request ID</div></th>
                          <th><div align="center">Amount</div></th>
                          <th><div align="center">Donor</div></th>
						             <th><div align="center">Date of Donation</div></th>

                        </tr>
                      </thead>
                      <tbody>
                      <?php
                            $sql = "SELECT students.*,requests.*,payments.* FROM students INNER JOIN requests ON students.track_number = requests.student_id INNER JOIN payments ON payment.track_number = requests.student_id order by requests.id asc";
									      	 $result = $conn->query($sql);
                           $cnt=1;
                                     	 while($row = $result->fetch_assoc()) {

										  ?>
                        <tr>
						  <td><div align="center"><?php echo $cnt; ?></div></td>

                          <td><div align="center"><?php echo $row['id']; ?></div></td>
                           <td>
                             <div align="center">
                               <button type="button" class="btn btn-sm btn-outline-success btn-rounded">N<?php echo number_format((float) $row['amount'] ,2); ?></button>
                           </div></td>
                          <td><div align="center"><?php echo $row['name']; ?></div></td>
		                          <td><div align="center"><?php echo $row['payment_date']; ?></div></td>

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
      <?php include('../inc/footer.php'); ?>
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
