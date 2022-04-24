<?php
	$host='srv-pleskdb19.ps.kz:3306';
	$user='bekaidkz_adi123';
	$pass='Qqwerty123!';
	$db='bekaidkz_adi123';
	
	$link=mysql_connect($host,$user,$pass);
	if(!$link){
		die('error!!!');
	}
	
	$select_db=mysql_select_db($db);
	if(!$select_db){
		die("there is no $db!!");
	}
?>
