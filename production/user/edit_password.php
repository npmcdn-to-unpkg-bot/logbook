<?php
	if (isset($_GET['iduser']))
	{
		$iduser=$_GET['iduser'];
		include('../connect_db.php');
		$db = new mysqli($db_host, $db_username, $db_password, $db_database);
		if ($db->connect_errno)
		{
			die("Could not connect to the database: <br />". $db->connect_error);
		}
		$query = "SELECT * FROM user WHERE iduser='$iduser'";
		$result = $db->query($query);
		if(!$result)
		{
			die("Could not query the database: <br />". $db->error);
		}
		$row=$result->fetch_object();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Password</title>
</head>
<body>
	<form method="POST" action="acc_edit_password.php">
		<label for="iduser">Unique ID : </label>
		<input type="text" readonly id="iduser" name="iduser" value="<?php if (isset($row->iduser)) {echo $row->iduser;} else {echo '';}?>"></input><br>
		<label for="iduser">Old Password : </label>
		<input type="text" readonly id="oldpass" value="<?php if (isset($row->password)) {echo $row->password;} else {echo '';}?>"></input><br>
		<label for="newpass">New Password : </label>
		<input type="text" id="newpass" placeholder="newpass" name="newpass"></input><br>
		<input type="submit" value="Submit"></input>
	</form>
</body>
</html>