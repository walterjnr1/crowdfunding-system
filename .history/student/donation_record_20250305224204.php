<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uxliner.com/adminkit/demo/horizontal/ltr/table-data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 19:36:38 GMT -->
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

<!-- DataTables -->
<link rel="stylesheet" href="dist/plugins/datatables/css/dataTables.bootstrap.min.css">

<!-- hmenu -->
<link rel="stylesheet" href="dist/plugins/hmenu/ace-responsive-menu.css">

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
  <div class="main-nav">
    <nav> 
      <!-- Menu Toggle btn-->
      <div class="menu-toggle">
        <h3>Menu</h3>
        <button type="button" id="menu-btn"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <!-- Responsive Menu Structure--> 
      <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
      <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
        <li><a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
          <ul>
            <li><a href="index.html" class="active">Modern</a></li>
            <li><a href="index-crm.html">CRM</a></li>
            <li><a href="index-analytics.html">Analytics</a></li>
            <li><a href="index-ecommerce.html">Ecommerce</a></li>
            <li><a href="index-medical.html">Medical</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-bullseye"></i> <span>Apps</span></a>
          <ul>
            <li><a href="apps-calendar.html">Calendar</a></li>
            <li><a href="apps-support-ticket.html">Support Ticket</a></li>
            <li><a href="apps-contacts.html">Contact / Employee</a></li>
            <li><a href="apps-contact-grid.html">Contact Grid</a></li>
            <li><a href="apps-contact-details.html">Contact Detail</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-briefcase"></i> <span>UI Elements</span></a>
          <ul>
            <li><a href="ui-cards.html" class="active">Cards</a></li>
            <li><a href="ui-user-card.html">User Cards</a></li>
            <li><a href="ui-tab.html">Tab</a></li>
            <li><a href="ui-grid.html">Grid</a></li>
            <li><a href="ui-buttons.html">Buttons</a></li>
            <li><a href="ui-notification.html">Notification</a></li>
            <li><a href="ui-progressbar.html">Progressbar</a></li>
            <li><a href="ui-range-slider.html">Range slider</a></li>
            <li><a href="ui-timeline.html">Timeline</a></li>
            <li><a href="ui-horizontal-timeline.html">Horizontal Timeline</a></li>
            <li><a href="ui-breadcrumb.html">Breadcrumb</a></li>
            <li><a href="ui-typography.html">Typography</a></li>
            <li><a href="ui-bootstrap-switch.html">Bootstrap Switch</a></li>
            <li><a href="ui-tooltip-popover.html">Tooltip &amp; Popover</a></li>
            <li><a href="ui-list-media.html">List Media</a></li>
            <li><a href="ui-carousel.html">Carousel</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-edit"></i> <span>Forms</span></a>
          <ul>
            <li><a href="form-elements.html">Form Elements</a></li>
            <li><a href="form-validation.html">Form Validation</a></li>
            <li><a href="form-wizard.html">Form Wizard</a></li>
            <li><a href="form-layouts.html">Form Layouts</a></li>
            <li><a href="form-uploads.html">Form File Upload</a></li>
            
            <li><a href="form-summernote.html">Summernote</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-table"></i> <span>Tables</span></a>
          <ul>
            <li><a href="table-basic.html">Basic Tables</a></li>
            <li><a href="table-layout.html">Table Layouts</a></li>
            <li><a href="table-data-table.html">Data Tables</a></li>
            <li><a href="table-jsgrid.html">Js Grid Table</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-th"></i> <span>Extras</span></a>
          <ul>
            <li><a href="#">Widgets</a>
              <ul>
                <li><a href="widget-data.html">Data Widgets</a></li>
                <li><a href="widget-apps.html">Apps Widgets</a></li>
              </ul>
            </li>
            <li><a href="#">Charts</a>
              <ul>
                <li><a href="chart-morris.html">Morris Chart</a></li>
                <li><a href="chart-chartist.html">Chartis Chart</a></li>
                
                <li><a href="chart-knob.html">Knob Chart</a></li>
                <li><a href="chart-chart-js.html">Chartjs</a></li>
                <li><a href="chart-peity.html">Peity Chart</a></li>
              </ul>
            </li>
            <li><a href="#">Maps</a>
              <ul>
                <li><a href="map-google.html">Google Maps</a></li>
                <li><a href="map-vector.html" class="active">Vector Maps</a></li>
              </ul>
            </li>
            <li><a href="#">Icons</a>
              <ul>
                <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                <li><a href="icon-themify.html">Themify Icons</a></li>
                <li><a href="icon-linea.html">Linea Icons</a></li>
                <li><a href="icon-weather.html">Weather Icons</a></li>
                <li><a href="icon-simple-lineicon.html">Simple Lineicons</a></li>
                <li><a href="icon-flag.html">Flag Icons</a></li>
              </ul>
            </li>
            <li><a href="#">Inbox</a>
              <ul>
                <li><a href="apps-mailbox.html">Mailbox</a></li>
                <li><a href="apps-mailbox-detail.html">Mailbox Detail</a></li>
                <li><a href="apps-compose-mail.html">Compose Mail</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li> <a href="#"> <i class="fa fa-files-o"></i> <span>Sample Pages</span></a>
          <ul>
            <li><a href="pages-blank.html">Blank page</a></li>
            <li><a href="#">Authentication</a>
              <ul>
                <li><a href="pages-login.html">Login 1</a></li>
                <li><a href="pages-login-2.html">Login 2</a></li>
                <li><a href="pages-register.html">Register</a></li>
                <li><a href="pages-register2.html">Register 2</a></li>
                <li><a href="pages-lockscreen.html">Lockscreen</a></li>
                <li><a href="pages-recover-password.html">Recover password</a></li>
              </ul>
            </li>
            <li><a href="pages-profile.html">Profile page</a></li>
            <li><a href="pages-invoice.html">Invoice</a></li>
            <li><a href="pages-treeview.html">Treeview</a></li>
            <li><a href="pages-pricing.html">Pricing</a></li>
            <li><a href="pages-gallery.html">Gallery</a></li>
            <li><a href="pages-faq.html">Faqs</a></li>
            <li><a href="pages-404.html">404 Error Page</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
  <!-- Main Nav -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>Data Tables</h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><i class="fa fa-angle-right"></i> Data Tables</li>
      </ol>
    </div>
    
    <!-- Main content -->
    <div class="content">
      <div class="card">
      <div class="card-body">
      <h4 class="text-black">Data Export</h4>
      <p>Export data to Copy, CSV, Excel, PDF & Print</p>
      <div class="table-responsive">
                  <table id="example2" class="table table-bordered table-hover" data-name="cool-table">
                    <thead>
                      <tr>
                        <th>ID #</th>
                        <th>Opended by</th>
                        <th>Cust.Email</th>
                        <th>Subject</th>
                        <th>Status</th>
                        <th>Assign to</th>
                        <th>Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1001</td>
                        <td>Alexander</td>
                        <td>alexander@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-success">Complete</span></td>
                        <td>Pierce Sr.</td>
                        <td>03-10-2017</td>
                      </tr>
                      <tr>
                        <td>1010</td>
                        <td>John Deo</td>
                        <td>johndeo@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-success">Complete</span></td>
                        <td>Alexander</td>
                        <td>02-10-2017</td>
                      </tr>
                      <tr>
                        <td>1015</td>
                        <td>Alexa Rose</td>
                        <td>alexarose@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-warning">New</span></td>
                        <td>Alex Sr.deo</td>
                        <td>01-10-2017</td>
                      </tr>
                      <tr>
                        <td>1120</td>
                        <td>Sr. Alex Dc</td>
                        <td>sralex@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-success">Complete</span></td>
                        <td>Alex Sr.deo</td>
                        <td>29-09-2017</td>
                      </tr>
                      <tr>
                        <td>1125</td>
                        <td>John Cena</td>
                        <td>johncena@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-warning">New</span></td>
                        <td>John Deo</td>
                        <td>28-09-2017</td>
                      </tr>
                      <tr>
                        <td>1128</td>
                        <td>Randy Orton</td>
                        <td>randyorton@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-warning">New</span></td>
                        <td>Alex Sr.deo</td>
                        <td>27-09-2017</td>
                      </tr>
                      <tr>
                        <td>1130</td>
                        <td>Dev. Batista</td>
                        <td>batistadev@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-success">Complete</span></td>
                        <td>Alexander</td>
                        <td>25-09-2017</td>
                      </tr>
                      <tr>
                        <td>1132</td>
                        <td>Michael Rose</td>
                        <td>michaelrose@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-success">Complete</span></td>
                        <td>John Cena</td>
                        <td>24-09-2017</td>
                      </tr>
                      <tr>
                        <td>1135</td>
                        <td>Tamina Bexa</td>
                        <td>tamina@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-warning">New</span></td>
                        <td>John Cena</td>
                        <td>22-09-2017</td>
                      </tr>
                      <tr>
                        <td>1138</td>
                        <td>McRosy Sr.</td>
                        <td>mcrosy@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-default">Pending</span></td>
                        <td>Tamina Bexa</td>
                        <td>20-09-2017</td>
                      </tr>
                      <tr>
                        <td>1140</td>
                        <td>Alexander</td>
                        <td>alexander@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-success">Complete</span></td>
                        <td>Pierce Sr.</td>
                        <td>03-10-2017</td>
                      </tr>
                      <tr>
                        <td>1142</td>
                        <td>John Deo</td>
                        <td>johndeo@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-primary">Pending</span></td>
                        <td>Alexander</td>
                        <td>02-10-2017</td>
                      </tr>
                      <tr>
                        <td>1145</td>
                        <td>Alexa Rose</td>
                        <td>alexarose@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-warning">New</span></td>
                        <td>Alex Sr.deo</td>
                        <td>01-10-2017</td>
                      </tr>
                      <tr>
                        <td>1146</td>
                        <td>Sr. Alex Dc</td>
                        <td>sralex@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-warning">New</span></td>
                        <td>Alex Sr.deo</td>
                        <td>29-09-2017</td>
                      </tr>
                      <tr>
                        <td>1148</td>
                        <td>John Cena</td>
                        <td>johncena@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-success">Complete</span></td>
                        <td>John Deo</td>
                        <td>28-09-2017</td>
                      </tr>
                      <tr>
                        <td>1150</td>
                        <td>Randy Orton</td>
                        <td>randyorton@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-warning">New</span></td>
                        <td>Alex Sr.deo</td>
                        <td>27-09-2017</td>
                      </tr>
                      <tr>
                        <td>1152</td>
                        <td>Michael Rose</td>
                        <td>michaelrose@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-success">Complete</span></td>
                        <td>Alexander</td>
                        <td>25-09-2017</td>
                      </tr>
                      <tr>
                        <td>1154</td>
                        <td>Dev. Batista</td>
                        <td>batistadev@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-success">Complete</span></td>
                        <td>John Cena</td>
                        <td>24-09-2017</td>
                      </tr>
                      <tr>
                        <td>1155</td>
                        <td>Tamina Bexa</td>
                        <td>tamina@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-warning">New</span></td>
                        <td>John Cena</td>
                        <td>22-09-2017</td>
                      </tr>
                      <tr>
                        <td>1157</td>
                        <td>Alexander</td>
                        <td>alexander@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-default">Pending</span></td>
                        <td>Tamina Bexa</td>
                        <td>20-09-2017</td>
                      </tr>
                      <tr>
                        <td>1160</td>
                        <td>McRosy Sr.</td>
                        <td>mcrosy@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-success">Complete</span></td>
                        <td>Pierce Sr.</td>
                        <td>03-10-2017</td>
                      </tr>
                      <tr>
                        <td>1162</td>
                        <td>John Deo</td>
                        <td>johndeo@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-success">Complete</span></td>
                        <td>Alexander</td>
                        <td>02-10-2017</td>
                      </tr>
                      <tr>
                        <td>1165</td>
                        <td>Alexa Rose</td>
                        <td>alexarose@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-warning">New</span></td>
                        <td>Alex Sr.deo</td>
                        <td>01-10-2017</td>
                      </tr>
                      <tr>
                        <td>1167</td>
                        <td>John Cena</td>
                        <td>johncena@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-success">Complete</span></td>
                        <td>Alex Sr.deo</td>
                        <td>29-09-2017</td>
                      </tr>
                      <tr>
                        <td>1168</td>
                        <td>Sr. Alex Dc</td>
                        <td>sralex@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-warning">New</span></td>
                        <td>John Deo</td>
                        <td>28-09-2017</td>
                      </tr>
                      <tr>
                        <td>1170</td>
                        <td>Randy Orton</td>
                        <td>randyorton@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-warning">New</span></td>
                        <td>Alex Sr.deo</td>
                        <td>27-09-2017</td>
                      </tr>
                      <tr>
                        <td>1172</td>
                        <td>Dev. Batista</td>
                        <td>batistadev@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-success">Complete</span></td>
                        <td>Alexander</td>
                        <td>25-09-2017</td>
                      </tr>
                      <tr>
                        <td>1173</td>
                        <td>Michael Rose</td>
                        <td>michaelrose@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-success">Complete</span></td>
                        <td>John Cena</td>
                        <td>24-09-2017</td>
                      </tr>
                      <tr>
                        <td>1176</td>
                        <td>McRosy Sr.</td>
                        <td>mcrosy@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-warning">New</span></td>
                        <td>John Cena</td>
                        <td>22-09-2017</td>
                      </tr>
                      <tr>
                        <td>1178</td>
                        <td>Tamina Bexa</td>
                        <td>tamina@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-default">Pending</span></td>
                        <td>Tamina Bexa</td>
                        <td>20-09-2017</td>
                      </tr>
                      <tr>
                        <td>1179</td>
                        <td>John Deo</td>
                        <td>johndeo@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-success">Complete</span></td>
                        <td>Pierce Sr.</td>
                        <td>03-10-2017</td>
                      </tr>
                      <tr>
                        <td>1181</td>
                        <td>Alexander</td>
                        <td>alexander@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-primary">Pending</span></td>
                        <td>Alexander</td>
                        <td>02-10-2017</td>
                      </tr>
                      <tr>
                        <td>1182</td>
                        <td>Sr. Alex Dc</td>
                        <td>sralex@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-warning">New</span></td>
                        <td>Alex Sr.deo</td>
                        <td>01-10-2017</td>
                      </tr>
                      <tr>
                        <td>1184</td>
                        <td>Alexa Rose</td>
                        <td>alexarose@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-warning">New</span></td>
                        <td>Alex Sr.deo</td>
                        <td>29-09-2017</td>
                      </tr>
                      <tr>
                        <td>1186</td>
                        <td>Randy Orton</td>
                        <td>randyorton@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-success">Complete</span></td>
                        <td>John Deo</td>
                        <td>28-09-2017</td>
                      </tr>
                      <tr>
                        <td>1188</td>
                        <td>John Cena</td>
                        <td>johncena@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-warning">New</span></td>
                        <td>Alex Sr.deo</td>
                        <td>27-09-2017</td>
                      </tr>
                      <tr>
                        <td>1190</td>
                        <td>Michael Rose</td>
                        <td>michaelrose@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-success">Complete</span></td>
                        <td>Alexander</td>
                        <td>25-09-2017</td>
                      </tr>
                      <tr>
                        <td>1192</td>
                        <td>Dev. Batista</td>
                        <td>batistadev@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-success">Complete</span></td>
                        <td>John Cena</td>
                        <td>24-09-2017</td>
                      </tr>
                      <tr>
                        <td>1194</td>
                        <td>McRosy Sr.</td>
                        <td>mcrosy@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-warning">New</span></td>
                        <td>John Cena</td>
                        <td>22-09-2017</td>
                      </tr>
                      <tr>
                        <td>1195</td>
                        <td>Tamina Bexa</td>
                        <td>tamina@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-default">Pending</span></td>
                        <td>Tamina Bexa</td>
                        <td>20-09-2017</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>ID #</th>
                        <th>Opended by</th>
                        <th>Cust.Email</th>
                        <th>Subject</th>
                        <th>Status</th>
                        <th>Assign to</th>
                        <th>Date</th>
                      </tr>
                    </tfoot>
                  </table>
                  </div>
      </div></div>
      
      <div class="card m-t-3">
      <div class="card-body">
      <h4 class="text-black">Data Table</h4>
      <p>Data Table With Full Features</p>
      <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.0
                  </td>
                  <td>Win 95+</td>
                  <td>5</td>
                  <td>C</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.5
                  </td>
                  <td>Win 95+</td>
                  <td>5.5</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 6
                  </td>
                  <td>Win 98+</td>
                  <td>6</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet Explorer 7</td>
                  <td>Win XP SP2+</td>
                  <td>7</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>AOL browser (AOL desktop)</td>
                  <td>Win XP</td>
                  <td>6</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Firefox 1.0</td>
                  <td>Win 98+ / OSX.2+</td>
                  <td>1.7</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Firefox 1.5</td>
                  <td>Win 98+ / OSX.2+</td>
                  <td>1.8</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Firefox 2.0</td>
                  <td>Win 98+ / OSX.2+</td>
                  <td>1.8</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Firefox 3.0</td>
                  <td>Win 2k+ / OSX.3+</td>
                  <td>1.9</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Camino 1.0</td>
                  <td>OSX.2+</td>
                  <td>1.8</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Camino 1.5</td>
                  <td>OSX.3+</td>
                  <td>1.8</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Netscape 7.2</td>
                  <td>Win 95+ / Mac OS 8.6-9.2</td>
                  <td>1.7</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Netscape Browser 8</td>
                  <td>Win 98SE+</td>
                  <td>1.7</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Netscape Navigator 9</td>
                  <td>Win 98+ / OSX.2+</td>
                  <td>1.8</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Mozilla 1.0</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td>1</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Mozilla 1.1</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td>1.1</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Mozilla 1.2</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td>1.2</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Mozilla 1.3</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td>1.3</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Mozilla 1.4</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td>1.4</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Mozilla 1.5</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td>1.5</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Mozilla 1.6</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td>1.6</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Mozilla 1.7</td>
                  <td>Win 98+ / OSX.1+</td>
                  <td>1.7</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Mozilla 1.8</td>
                  <td>Win 98+ / OSX.1+</td>
                  <td>1.8</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Seamonkey 1.1</td>
                  <td>Win 98+ / OSX.2+</td>
                  <td>1.8</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Epiphany 2.20</td>
                  <td>Gnome</td>
                  <td>1.8</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Webkit</td>
                  <td>Safari 1.2</td>
                  <td>OSX.3</td>
                  <td>125.5</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Webkit</td>
                  <td>Safari 1.3</td>
                  <td>OSX.3</td>
                  <td>312.8</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Webkit</td>
                  <td>Safari 2.0</td>
                  <td>OSX.4+</td>
                  <td>419.3</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Webkit</td>
                  <td>Safari 3.0</td>
                  <td>OSX.4+</td>
                  <td>522.1</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Webkit</td>
                  <td>OmniWeb 5.5</td>
                  <td>OSX.4+</td>
                  <td>420</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Webkit</td>
                  <td>iPod Touch / iPhone</td>
                  <td>iPod</td>
                  <td>420.1</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Webkit</td>
                  <td>S60</td>
                  <td>S60</td>
                  <td>413</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Presto</td>
                  <td>Opera 7.0</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td>-</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Presto</td>
                  <td>Opera 7.5</td>
                  <td>Win 95+ / OSX.2+</td>
                  <td>-</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Presto</td>
                  <td>Opera 8.0</td>
                  <td>Win 95+ / OSX.2+</td>
                  <td>-</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Presto</td>
                  <td>Opera 8.5</td>
                  <td>Win 95+ / OSX.2+</td>
                  <td>-</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Presto</td>
                  <td>Opera 9.0</td>
                  <td>Win 95+ / OSX.3+</td>
                  <td>-</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Presto</td>
                  <td>Opera 9.2</td>
                  <td>Win 88+ / OSX.3+</td>
                  <td>-</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Presto</td>
                  <td>Opera 9.5</td>
                  <td>Win 88+ / OSX.3+</td>
                  <td>-</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Presto</td>
                  <td>Opera for Wii</td>
                  <td>Wii</td>
                  <td>-</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Presto</td>
                  <td>Nokia N800</td>
                  <td>N800</td>
                  <td>-</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Presto</td>
                  <td>Nintendo DS browser</td>
                  <td>Nintendo DS</td>
                  <td>8.5</td>
                  <td>C/A<sup>1</sup></td>
                </tr>
                <tr>
                  <td>KHTML</td>
                  <td>Konqureror 3.1</td>
                  <td>KDE 3.1</td>
                  <td>3.1</td>
                  <td>C</td>
                </tr>
                <tr>
                  <td>KHTML</td>
                  <td>Konqureror 3.3</td>
                  <td>KDE 3.3</td>
                  <td>3.3</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>KHTML</td>
                  <td>Konqureror 3.5</td>
                  <td>KDE 3.5</td>
                  <td>3.5</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Tasman</td>
                  <td>Internet Explorer 4.5</td>
                  <td>Mac OS 8-9</td>
                  <td>-</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>Tasman</td>
                  <td>Internet Explorer 5.1</td>
                  <td>Mac OS 7.6-9</td>
                  <td>1</td>
                  <td>C</td>
                </tr>
                <tr>
                  <td>Tasman</td>
                  <td>Internet Explorer 5.2</td>
                  <td>Mac OS 8-X</td>
                  <td>1</td>
                  <td>C</td>
                </tr>
                <tr>
                  <td>Misc</td>
                  <td>NetFront 3.1</td>
                  <td>Embedded devices</td>
                  <td>-</td>
                  <td>C</td>
                </tr>
                <tr>
                  <td>Misc</td>
                  <td>NetFront 3.4</td>
                  <td>Embedded devices</td>
                  <td>-</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Misc</td>
                  <td>Dillo 0.8</td>
                  <td>Embedded devices</td>
                  <td>-</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>Misc</td>
                  <td>Links</td>
                  <td>Text only</td>
                  <td>-</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>Misc</td>
                  <td>Lynx</td>
                  <td>Text only</td>
                  <td>-</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>Misc</td>
                  <td>IE Mobile</td>
                  <td>Windows Mobile 6</td>
                  <td>-</td>
                  <td>C</td>
                </tr>
                <tr>
                  <td>Misc</td>
                  <td>PSP browser</td>
                  <td>PSP</td>
                  <td>-</td>
                  <td>C</td>
                </tr>
                <tr>
                  <td>Other browsers</td>
                  <td>All others</td>
                  <td>-</td>
                  <td>-</td>
                  <td>U</td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
              </table>
                  </div>
      </div></div>
    </div>
    <!-- /.content --> 
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">Version 1.0</div>
    Copyright © 2018 Yourdomian. All rights reserved.</footer>
</div>
<!-- ./wrapper --> 

<!-- jQuery 3 --> 
<script src="dist/js/jquery.min.js"></script>
 
<script src="dist/plugins/popper/popper.min.js"></script>

<!-- v4.0.0-alpha.6 -->
<script src="dist/bootstrap/js/bootstrap.min.js"></script>

<!-- template --> 
<script src="dist/js/adminkit.js"></script>

<!-- DataTable --> 
<script src="dist/plugins/datatables/jquery.dataTables.min.js"></script> 
<script src="dist/plugins/datatables/dataTables.bootstrap.min.js"></script> 
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<script src="dist/plugins/table-expo/filesaver.min.js"></script>
<script src="dist/plugins/table-expo/xls.core.min.js"></script>
<script src="dist/plugins/table-expo/tableexport.js"></script>
<script>
$("table").tableExport({formats: ["xlsx","xls", "csv", "txt"],    });
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

<!-- Mirrored from uxliner.com/adminkit/demo/horizontal/ltr/table-data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 19:36:38 GMT -->
</html>
