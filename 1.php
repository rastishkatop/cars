<?php
	include('db_connect.php');
	
	$username=$_POST['username'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$password1=$_POST['password1'];
	$password2=$_POST['password2'];
	$role = $_POST['role'];
	
	
	$query=mysql_query("INSERT INTO registrationpage(username,firstname,lastname,email,phone,address,password1,password2,role) VALUES('$username','$firstname','$lastname','$email','$phone','$address','$password1','$password2','$role');");
	
	header('Location: login.php');
?>
