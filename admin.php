<?php
session_start();
//connect database
include('process/connect_db.php');
$db = new mysqli($db_host,$db_username, $db_password, $db_database);
if ($db->connect_errno)
{
  die("Could not connect to the database: <br />".$db->connect_error);
}

if(isset($_SESSION['role']) && $_SESSION['role'] == -1)
{
    header("Location: production/index.php");
    exit;
} else if (isset($_SESSION['role']) && $_SESSION['role'] == 1) {
  header("Location: production/user/index.php");
  exit;
} else if (isset($_SESSION['role']) && $_SESSION['role'] == 0) {
  header("Location: production/user/index.php");
  exit;
}
else
{

}
?>

<html>
<head>
  <link rel="icon" href="assets/gi.ico" />
	<title>Login Admin</title>
	<link rel="stylesheet" type="text/css" href="assets/css_login.css">
	<script type="text/javascript">
		$('.message a').click(function(){
          $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
      });
  </script>
</head>
<body>
	<div class="login-page">
     <div class="form">
       <form class="login-form" action="process/acc_login_admin.php" method="POST">
          <h1>Login Admin</h1>
          <input type="text" placeholder="ID Admin" name="id">
          <input type="password" placeholder="Password" name="password">
          <button type="submit">Masuk</button>
      </form>
  </div>
</div>
</body>
</html>
