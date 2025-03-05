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
         <li><a href="edit_photo.php"><i class="icon-profile-male"></i> Edit Photo</a></li>
			   <li role="separator" class="divider"></li>
              <li><a href="changepassword.php"><i class="icon-gears"></i> Change Password</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
