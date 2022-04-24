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
        <a href="#banner" class="logo">FutureCar<span>.</span></a>
        <div class="menuToggle" onclick="toggleMenu();"></div>
        <ul class="navigation">
            
            <li><a href="#banner" onclick="toggleMenu();">Home</a></li>
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

    <section class="banner" id="banner">
        <div class="content">
            <h2>ONLY LUXURY CARS FOR LUXURY CUSTOMERS</h2>
            <p>Buy Cars. Be Happy. Do It Again.</p>
            <a href="#products" class="btn">Products</a>
        </div>
    </section>

    <section class="products" id="products">
        <div class="title">
            <h2 class="titleText"><span>P</span>roducts</h2>
            <br>
            <p>Find your car.</p>
        </div>

        <div class="content">
		
            <div class="box">
                <div class="imgBx">
                    <img src="x5m.jpg">
                </div>
                <div class="text">
                    <h3 style="text-align: center;">BMW X5M</h3>
                    <br>
                    <h3 style="text-align: center;">Цена: 66.800.000 тг</h3>
                </div>
            </div>
            
            <div class="box">
                <div class="imgBx">
                    <img src="g63.jpg">
                </div>
                <div class="text">
                    <h3 style="text-align: center;">Mercedes-Benz G63AMG</h3>
                    <br>
                    <h3 style="text-align: center;">Цена: 103.800.000 тг.</h3>
                </div>
            </div>
            
            <div class="box">
                <div class="imgBx">
                    <img src="s63.jpg">
                </div>
                <div class="text">
                    <h3 style="text-align: center;">Mercedes-Benz S63AMG</h3>
                    <br>
                    <h3 style="text-align: center;">Цена: 39.800.000 тг.</h3>
                </div>
            </div>
            
            <div class="box">
                <div class="imgBx">
                    <img src="/img/elfbar_Kiwi_Passionfruit_Guava.jpg">
                </div>
                <div class="text">
                    <h3 style="text-align: center;"></h3>
                    <br>
                    <h3 style="text-align: center;"></h3>
                </div>
            </div>
            
            <div class="box">
                <div class="imgBx">
                    <img src="">
                </div>
                <div class="text">
                    <h3 style="text-align: center;"></h3>
                    <br>
                    <h3 style="text-align: center;"></h3>
                </div>
            </div>
            
            <div class="box">
                <div class="imgBx">
                    <img src="">
                </div>
                <div class="text">
                    <h3 style="text-align: center;"></h3>
                    <br>
                    <h3 style="text-align: center;"></h3>
                </div>
            </div>
            
            <div class="box">
                <div class="imgBx">
                    <img src="">
                </div>
                <div class="text">
                    <h3 style="text-align: center;"></h3>
                    <br>
                    <h3 style="text-align: center;"></h3>
                </div>
            </div>
            
            <div class="box">
                <div class="imgBx">
                    <img src="">
                </div>
                <div class="text">
                    <h3 style="text-align: center;"></h3>
                    <br>
                    <h3 style="text-align: center;"></h3>
                </div>
            </div>
            
            <div class="box">
                <div class="imgBx">
                    <img src="">
                </div>
                <div class="text">
                    <h3 style="text-align: center;"></h3>
                    <br>
                    <h3 style="text-align: center;"></h3>
                </div>
            </div>
            
            <div class="box">
                <div class="imgBx">
                    <img src="">
                </div>
                <div class="text">
                    <h3 style="text-align: center;"></h3>
                    <br>
                    <h3 style="text-align: center;"></h3>
                </div>
            </div>

        </div>
        
    </section>

    <hr>

    <section class="faq" id="faq">
        <div class="title">
            <h2 class="titleText"><span>F</span>AQ</h2>
            <p>
                
            </p>
        </div>

        <button class="accordion">Do you have cars?</button>
        <div class="panel">
            <p style= color:#111;">Yes</p>
        </div>

        <button class="accordion">I want to see car, where I can see it?</button>
        <div class="panel">
            <p style= color:#111;>Come to our dealership</p>
        </div>

        <button class="accordion">Do you sell cars?</button>
        <div class="panel">
            <p style= color:#111;>Yes</p>
        </div>

        <button class="accordion">Are there any discounts?</button>
        <div class="panel">
            <p style= color:#111;>Not yet</p>
        </div>


    </section>

    <hr>

    <section class="contact" id="contacts">
        <div class="title">
            <h2 class="titleText"> <span>C</span>ontacts</h2>
            <br>
            <br>
          
            <a style="font-size: 18px; text-decoration: none; text-align: center;" class="fa"
                href="https://www.instagram.com/futurecar.kz/" target="blank">Наш Instagram &#xf16d;: <br> <br>
                <p style="text-align: center;">@futurecar.kz</p>
            </a>

        </div>
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
