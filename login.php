<?php
session_start();
echo <<<_END
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="stylereg.css">
</head>
_END;

if((isset($_SESSION['loginerror']))&&($_SESSION['loginerror'] == true))
{
	echo("<body onload = \"alert('Login or password are incorrect');\">");
	$_SESSION['loginerror'] = false;
}
else
{
	echo("<body>");
}
   
echo <<<_END

	<form action="2.php" method="post">
      
      
		<div id="loginbox">
			<div class="left" lang="en">
				<h1 style="font-family:'Poppins',sans-serif">Log in</h1>
				<input type="text" name="username" placeholder="Username" required />
				<input type="password" name="password1" placeholder="Password" required />
				<input title="Press to submit data and log in" type="submit" value="SUBMIT"/>
			</div>
			
			<div class="right">
				<a href="reg.php"><image class="social-signin login">Sign in</button></a><i></i>
			</div>
	
 		</div>
	</form>
	
</body>
</html>
_END;
?>
