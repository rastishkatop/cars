<?php
	include('db_connect.php');
	
	$username1=$_POST['username1'];
	$wishtext=$_POST['wishtext'];
	
	$query=mysql_query("INSERT INTO wishlist(username1,wishtext) VALUES('$username1','$wishtext');");
	
	header('Location: index.php');
?>
