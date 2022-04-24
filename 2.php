<?php
	include('db_connect.php');
	session_start();
	$username=$_POST['username'];
	$password1=$_POST['password1'];

	$query=mysql_query("SELECT * FROM registrationpage WHERE `username` ='$username' AND `password1` = '$password1';");
	$rows = mysql_num_rows($query);
	if($rows == 0)
	{
		$_SESSION['loginerror'] = true;
		header('Location:login.php');
	}
	else
	{
	$row = mysql_fetch_array($query);
	$_SESSION['username'] = $username;
	$_SESSION['role'] = $row['role'];
	header('Location: index.php');
	}
?>
