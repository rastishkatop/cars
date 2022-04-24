<?php
include('db_connect.php');
session_start();
if($_POST['addbutton'])
{
	if((isset($_POST['ID']))&&(isset($_POST['name']))&&(isset($_POST['price']))&&(isset($_POST['photo']))&&		(isset($_POST['specs'])))
	{
		
		$ID = $_POST['ID'];
		$name = $_POST['name'];
		$price = $_POST['price'];
		$photo = $_POST['photo'];
		$specs = $_POST['specs'];
		
		$query=mysql_query("SELECT * FROM cars WHERE `ID`='$ID';");
		$rows = mysql_num_rows($query);
		if($rows == 0)
		{
			$query=mysql_query("INSERT INTO cars(ID,name,price,photo,specs)
			VALUES('$ID','$name','$price','$photo','$specs');");
		}
		else
		{
			$clubexistserror = true;
		}
		
	}
}

else if($_POST['deletebutton'])
{
	if(isset($_POST['car']))
	{
		$query=mysql_query("DELETE FROM cars WHERE `ID` = '".$_POST['car']."';");
	}
}

else if($_POST['editbutton'])
{
	if((isset($_POST['ID']))&&(isset($_POST['name']))&&(isset($_POST['price']))&&(isset($_POST['photo']))&&		(isset($_POST['specs'])))
	{
		$ID = $_POST['ID'];
		$name = $_POST['name'];
		$price = $_POST['price'];
		$photo = $_POST['photo'];
		$specs = $_POST['specs'];
		
		$query=mysql_query("SELECT * FROM cars WHERE `ID`='$ID';");
		$rows = mysql_num_rows($query);
		if($_POST['car'] == $ID)
		{
			if($rows == 1)
			{
				$query = mysql_query("UPDATE cars SET `ID` = '".$ID."', `name` = '".$name."', `price` = '".$price."', `photo` = '".$photo."', `specs` = '".$specs."' WHERE `ID` = '".$_POST['car']."';");
			}
			
		}
		else
		{
			if($rows == 0)
			{
				$query = mysql_query("UPDATE cars SET `ID` = '".$ID."', `name` = '".$name."', `price` = '".$price."', `photo` = '".$photo."', `specs` = '".$specs."' WHERE `ID` = '".$_POST['car']."';");
			}
			
		}
		
	}
}
echo <<<_END

<!DOCTYPE html>
<html lang="ru-KZ">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="mainScript.js"></script>
    <title>FUTURECAR</title>
	
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="orderBtn.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<script src="mainScript.js"></script>
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
            <li><a href="#products" onclick="toggleMenu();">Products</a></li>
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
	
    <section style="height: 100vh;" class="products" id="products">
	
        <div class="title">
            <h2 class="titleText"><span>P</span>roducts</h2>
            <br>
        </div>
		
		<div class="container">
_END;

		if(isset($_GET['s']))
{
	$result = mysql_query("SELECT * FROM cars WHERE `name` LIKE '%".$_GET['s']."%'");
}
else
{
	$result = mysql_query("SELECT * FROM cars;");
}

echo "
<form action='products.php' method='get'>
<input id='search' class = 'inputfield' name = 's' type='text' placeholder='Type here' required>
<input title='Press to search' id='submit' class = 'submitbutton' type='submit' value='Search'>
</form>
<form id = 'addform' method = 'post' action = 'products.php'></form>
		<div class='table'>
";
		
		
			
			echo "<table id='tablecars' border='1'>
			<tr>
				<th onclick = 'sortTable(0)'>ID</th>
				<th onclick = 'sortTable(1)'>name</th>
				<th onclick = 'sortTable(2)'>price</th>
				<th>photo</th>
				<th onclick = 'sortTable(4)'>specs</th>
				<th>action</th>
			</tr>
<tr>              
<td><input form = 'addform' type='text' class = 'inputfield' name='ID' required /></td>
<td><input form = 'addform' type='text' class = 'inputfield' name='name' required /></td>
<td><input form = 'addform' type='text' class = 'inputfield' name='price' required /></td>
<td><input form = 'addform' type='file' class = 'inputfield' name='photo' required /></td>
<td><input form = 'addform' type='text' class = 'inputfield' name='specs' required /></td>
<td><input form = 'addform' title='Press to add' type='submit' style = 'width: 200px' name = 'addbutton' class = 'submitbutton' value = 'Add Cars'/></td>
</tr>";
			while($row = mysql_fetch_array($result, MYSQL_ASSOC))
			{
				?>
				<?php
				echo "<form id = 'elementform".$row['ID']."' method = 'post' action = 'products.php'></form>";
				
				echo "<tr>";
					echo "<td id =ID".$row['ID'].">" . $row['ID'] . "</td>";
					echo "<td id =name".$row['ID'].">" . $row['name'] . "</td>";
					echo "<td id =price".$row['ID'].">" . $row['price'] . "</td>";
					echo "<td id =photo".$row['ID'].">" . $row['photo'] . "</td>";
					echo "<td id =specs".$row['ID'].">" . $row['specs'] . "</td>";
					echo "<td id = action".$row['ID'].">";
					
				?>
					<?php
					echo " <input form = 'elementform".$row['ID']."' type= 'submit' style=' width:70px; ' name='deletebutton' value='Delete'>";
					echo "<input form = 'elementform".$row['ID']."' type='hidden' name='car' value='".$row['ID']."'>";
					echo "<button style=' width: 70px; height: 25px; align-items: center; margin: 0 auto; background-color: #808080; border-radius: 5px; ' class = 'submitbutton' onclick = 'startediting(\"".$row['ID']."\")'>Edit</button>";
				echo "</td>";
					?>
				</tr>;
			<?php
			}
			echo "</table>";
echo "<form action='http://ict.bekaid.kz/adi123/products.php'>
    <input title='Press to refresh page' type='submit' value='REFRESH' />
</form>";
echo <<<_END
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
