<?php
session_start();
echo <<<_END


<!DOCTYPE html>
<html lang="ru-KZ">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <title>FUTURECAR</title>
	
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="orderBtn.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
	<div class="header-warning">
        
    </div>
    
    <header>
        <a href="index.php" class="logo">FutureCar<span>.</span></a>
        <div class="menuToggle" onclick="toggleMenu();"></div>
        <ul class="navigation">
            
            <li><a href="http://ict.bekaid.kz/adi123/index.php" onclick="toggleMenu();">Home</a></li>
            <li><a href="http://ict.bekaid.kz/adi123/wishlist.php" onclick="toggleMenu();">Wishlist</li>
            <li><a href="http://ict.bekaid.kz/adi123/products.php" onclick="toggleMenu();">Products</a></li>
            <li><a href="#faq" onclick="toggleMenu();">FAQ</a></li>
            <li><a href="http://ict.bekaid.kz/adi123/contacts.php" onclick="toggleMenu();">Contacts</a></li>
			<li>
_END;
if(isset($_SESSION['username']))
{
echo <<<_END
					
      					<a href = "account.php">
_END;
					echo($_SESSION['username']);
echo <<<_END
						</a></span>
    				</div>
				</li>
_END;
}
else
{
echo <<<_END
					
      					<a href = "login.php">Sign in</a>
    				</div>
				</li>
_END;
}
echo <<<_END
            <li> <a href="https://www.instagram.com/futurecar.kz/" target="blank" style="text-align: center;"> <i
                        class="fa fa-instagram" aria-hidden="true"></i> </a></li>
        </ul>
    </header>
	
    <section style="height: 100vh;" class="account" id="account">
        <div class="title">
            <h2 class="titleText"><span>A</span>ccount</h2>
            <br> 
        </div>
		
		<div class="infoacc">
			<h1>Your login:</h1>
			<div>
_END;
	echo($_SESSION['username']);
echo <<<_END
		</div>
        </div>
		<div class="inforole">
			<h1>Your role:</h1>
			<div>
_END;
switch($_SESSION['role'])
	{
	case 0:
		echo("Customer");
		break;
	case 1:
		echo("Admin");
		break;
}
echo <<<_END
		<form method = "post" action = "logout.php">
			<input title='Press to logout' class = "submitbutton" type="submit" value="LOGOUT">
		</form>
    </section>

    <footer>
        <p>FutureCar ©<br>
            <br>
        <p>solo 2022</p>
    </footer>

    <script src="mainScript.js"></script>
    
</body>

</html>
_END;
?>
