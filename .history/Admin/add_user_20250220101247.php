<!doctype html>
<html class="no-js" lang="en">

<head>
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
                        <a href="index.php"></a>                    </div>
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
                                            <li><span class="bread-blod">Add Student</span>
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
                                <li class="active"><a href="#description">Student Information</a></li>

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
                                                                    <input name="txtname" type="text"
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
                                                                
                                                                <div class="form-group">
                                                                    <p align="center"><img src="../uploadImage/Logo/logo.png" width="147" height="188"> </p>
                                                                    <p>
                                                                      <input name="txtemail" type="file"
                                                                        class="form-control" placeholder="Email">
                                                                        </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="txttracknumber" type="text"
                                                                        class="form-control"
                                                                        placeholder="Track Number">
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="cmdfaculty" class="form-control">
                                                                        <option value="none" selected=""
                                                                            disabled="">Select Faculty</option>
                                                                        <option
                                                                            value="Faculty Of Natural And Applied Sciences">
                                                                            Faculty Of Natural And Applied Sciences
                                                                        </option>
                                                                        <option
                                                                            value="Faculty Of Humanities Management And Social Sciences">
                                                                            Faculty Of Humanities Management And Social
                                                                            Sciences</option>
                                                                        <option value="0">Male</option>
                                                                        <option
                                                                            value="Faculty Of Basic Medical Sciences">
                                                                            Faculty Of Basic Medical Sciences</option>
                                                                        <option value="Faculty Of Law">Faculty Of Law
                                                                        </option>
                                                                        <option value="Faculty Of Education">Faculty Of
                                                                            Education</option>

                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="cmddept" class="form-control">
                                                                        <option value="none" selected=""disabled="">Select Department</option>
                                                                        <option value="Biology">Biology</option>
                                                                        <option value="Microbiology">Microbiology</option>
                                                                        <option value="Plant Science & Biotechnology">Plant Science & Biotechnology</option>
                                                                        <option value="Chemistry">Chemistry</option> 
                                                                        <option value="Biochemistry">Biochemistry</option>
                                                                        <option value="Geology">Geology</option>
                                                                      <option value="Applied Geophysics">Applied Geophysics</option> 
                                                                      <option value="Computer Science">Computer Science</option>
                                                                       <option value="Mathematics">Mathematics</option>
                                                                        <option value="Physics">Physics</option>
                                                                         <option value="Educational Foundations">Educational Foundations</option>
                                                                          <option value="Banking & Finance">Banking & Finance</option> 
                                                                          <option value="Accounting">Accounting</option> 
                                                                    

                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="country" class="form-control">
                                                                        <option value="none" selected=""
                                                                            disabled="">Select Bank</option>
                                                                        <option value="Access Bank">Access Bank</option>
                                                                        <option value="FirstBank">FirstBank</option>
                                                                        <option value="OPay">OPay</option>
                                                                        <option value="Palmpay">Palmpay</option>
                                                                        <option value="Fairmoney">Fairmoney</option>
                                                                        <option value="Sterling Bank">Sterling Bank</option>
                                                                        <option value="Union Bank">Union Bank</option>                                                                        <option value="5">Sterling Bank</option>
                                                                        <option value="United Bank for Africa">United Bank for Africa</option>                                                                        <option value="5">Sterling Bank</option>


                                                                    </select>
                                                                </div>
                                                               
                                                                <div class="form-group">
                                                                    <input name="txtaccountnumber" type="number"
                                                                        class="form-control"
                                                                        placeholder="Account Number">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
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
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018. All rights reserved. Template by <a
                                    href="https://colorlib.com/wp/templates/">Colorlib</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('') ?>
</body>

</html>
