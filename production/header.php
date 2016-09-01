<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="../assets/gi.ico" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Garuda Indonesia</title>

	<!-- Bootstrap -->
	<link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
 <!-- iCheck -->
 <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
 <!-- bootstrap-wysiwyg -->
 <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
 <!-- Select2 -->
 <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
 <!-- Switchery -->
 <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
 <!-- starrr -->
 <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
 <!-- PNotify -->
 <link href="../vendors/pnotify/dist/pnotify.css" rel="stylesheet">
 <link href="../vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
 <link href="../vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">
 <!-- Custom Theme Style -->
 <link href="../build/css/custom.min.css" rel="stylesheet">
</head>
<body class="nav-md">
	<div class="container body">
		<div class="main_container">
     <div class="col-md-3 left_col">
      <div class="left_col scroll-view">
       <div class="navbar nav_title" style="border: 0;">
        <a href="index.php" class="site_title"><span>Garuda Indonesia</span></a>
      </div>
      <h5 style="text-indent:12px;color:white;">Admin Page</h5>
      <div class="clearfix"></div>

      <br />

      <?php
      include('sidebar.php');
      ?>

<!-- /menu footer buttons -->
<div class="sidebar-footer hidden-small">
  <a data-toggle="tooltip" data-placement="top" title="Settings">
   <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
 </a>
 <a data-toggle="tooltip" data-placement="top" title="FullScreen">
   <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
 </a>
 <a data-toggle="tooltip" data-placement="top" title="Lock">
   <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
 </a>
 <a data-toggle="tooltip" data-placement="top" title="Logout">
   <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
 </a>
</div>
<!-- /menu footer buttons -->
</div>
</div>

<!-- top navigation -->
<div class="top_nav">
  <div class="nav_menu">
    <nav>
      <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li class="">
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <img src="images/img.jpg" alt=""><?php echo "$row2[username]"; ?>
            <span class=" fa fa-angle-down"></span>
          </a>
          <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li><a href="javascript:;"> Profile</a></li>
            <li>
              <a href="javascript:;">
                <span class="badge bg-red pull-right">50%</span>
                <span>Settings</span>
              </a>
            </li>
            <li><a href="javascript:;">Help</a></li>
            <li><a href="acc_logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
          </ul>
        </li>

        <li role="presentation" class="dropdown">
          <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-envelope-o"></i>
            <span class="badge bg-green">6</span>
          </a>
          <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
            <li>
              <a>
                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                <span>
                  <span>John Smith</span>
                  <span class="time">3 mins ago</span>
                </span>
                <span class="message">
                  Film festivals used to be do-or-die moments for movie makers. They were where...
                </span>
              </a>
            </li>
            <li>
              <a>
                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                <span>
                  <span>John Smith</span>
                  <span class="time">3 mins ago</span>
                </span>
                <span class="message">
                  Film festivals used to be do-or-die moments for movie makers. They were where...
                </span>
              </a>
            </li>
            <li>
              <a>
                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                <span>
                  <span>John Smith</span>
                  <span class="time">3 mins ago</span>
                </span>
                <span class="message">
                  Film festivals used to be do-or-die moments for movie makers. They were where...
                </span>
              </a>
            </li>
            <li>
              <a>
                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                <span>
                  <span>John Smith</span>
                  <span class="time">3 mins ago</span>
                </span>
                <span class="message">
                  Film festivals used to be do-or-die moments for movie makers. They were where...
                </span>
              </a>
            </li>
            <li>
              <div class="text-center">
                <a>
                  <strong>See All Alerts</strong>
                  <i class="fa fa-angle-right"></i>
                </a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</div>
<!-- /top navigation -->