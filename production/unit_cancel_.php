<?php
include_once('Connection/conn.php');
session_start();
$user=$_SESSION['userca'];
$status=$_GET['id'];
$notif=$_SESSION['notif'];

	$getsql=mysqli_query($con,"SELECT * FROM unit_performance_upload where username='$user'");
	$getisi=mysqli_fetch_array($getsql);
	$total=$getisi['total'];
	$totalnew=$total-1;
	$sql=mysqli_query($con,"UPDATE unit_performance_upload SET $status='uploaded', total='$totalnew' where username='$user'");

	if (mysqli_affected_rows($con)>0){
		echo "berhasil";
		header('location:unit_performance_display.php?id='.$notif);
	}
	else{
		echo "gagal setel";
	}

?>