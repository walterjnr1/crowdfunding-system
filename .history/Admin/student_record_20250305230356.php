<?php
include('../inc/controller.php');
if (empty($_SESSION['login_email'])) {
    header("Location: login.php");
}

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
<title>Student Record  | <?php echo $sitename; ?></title>
<?php include 'head.php'; ?>

<script type="text/javascript">
		function enable(){
if(confirm("ARE YOU SURE YOU WISH TO ENABLE THIS ACCOUNT ?" ))
{
return  true;
}
else {return false;
}
	 
}

</script>
<script type="text/javascript">
function disable(){
if(confirm("ARE YOU SURE YOU WISH TO DISABLE THIS ACCOUNT ?" ))
{
return  true;
}
else {return false;
}
	 
}

</script>
<script type="text/javascript">
function deldata(){
if(confirm("ARE YOU SURE YOU WISH TO DELETE THIS ACCOUNT ?" ))
{
return  true;
}
else {return false;
}
	 
}
</script>
    <style type="text/css">
<!--
.style1 {font-weight: bold}
-->
    </style>
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
                <strong><a href="index.php"></a></strong></div>
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
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Student Record</span>
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
        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                <button class="btn btn-primary waves-effect waves-light style1" onClick="window.location.href='add_user.php';">Add User</button>
</div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control dt-tb">
											<option value="">Export Basic</option>
											<option value="all">Export All</option>
											<option value="selected">Export Selected</option>
										</select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="id"><div align="center">S/N</div></th>
                                                <th data-field="fullname" data-editable="true"><div align="center">Fullname</div></th>
                                                <th data-field="password" data-editable="true"><div align="center">Track Number</div></th>
                                                <th data-field="password" data-editable="true"><div align="center">Password</div></th>

                                                <th data-field="email" data-editable="true"><div align="center">Email</div></th>
                                                <th data-field="role" data-editable="true"><div align="center">Faculty</div></th>
                                                <th data-field="status" data-editable="true"><div align="center">Department</div></th>

                                                <th data-field="action"><div align="center">Action</div></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        <?php
                            //$sql = "SELECT tblusers.name,tblbooking.*,places.name as place_name FROM tblusers INNER JOIN tblbooking ON tblusers.username = tblbooking.user INNER JOIN places ON tblbooking.place = places.id order by tblbooking.id asc";
                                $sql = "SELECT * FROM users where role !='super Admin' order by id asc";

										 $result = $conn->query($sql);
										 $cnt=1;
                                      while($row = $result->fetch_assoc()) {

										  ?>
                                             <tr>
                                                <td></td>
                                                <td><?php echo $cnt;  ?></td>
                                                 <td><?php echo $row['fullname'];  ?></td>
                                                 <td><?php echo $row['password'];  ?></td>
                                                 <td><?php echo $row['email'];  ?></td>
                                                 <td><?php echo $row['role'];  ?></td>
                                                <td><?php if (($row['status'])==(('0')))  { ?>
                                                 Not Active <?php } else {?>
                                                     Active	
                                        		 <?php } ?></td>

                      <td><?php if (($row['status'])==(('0')))  { ?>
              <a button class="btn btn-success"  href="enable_disable_user.php?eid=<?php echo $row['id'];?>" onClick="return enable();">Enable</button></a>
					  <?php } else {?>
              <a button class="btn btn-success"  href="enable_disable_user.php?did=<?php echo $row['id'];?>" onClick="return disable();">Disable</button></a>
					  <?php } ?>
                      <a button class="btn btn-danger"  href="delete_user.php?id=<?php echo $row['id'];?>" onClick="return deldata();">Delete</button></a>                      </td>
                                            </tr>
                                            <?php $cnt=$cnt+1;} ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>
          <?php include('../inc/footer_admin.php'); ?>
  </p>
</div>

<?php include('bottom_script.php'); ?>
</body>

</html>