<?php

<html>
	<script type="text/javascript" src="scr.js"></script>
<head>
	
</head>
	<body>
        <form method='post' action='1.php' onsubmit = "return RegValidate()">
   		    <link rel="stylesheet" href="stylereg.css">
	    <div id="loginbox">     
  		    <div class="left">
    		    <h1>Sign up</h1>
	
			    <input type="text" name="username" placeholder="Username" required/>
    		    <input type="text" name="firstname" placeholder="Firstname" />
    		    <input type="text" name="lastname" placeholder="Lastname" required />
    		    <input type="text" name="email" placeholder="Email" id = "emailid" required />
			    <input type="text" name="phone" placeholder="Phone" required />
			    <input type="text" name="address" placeholder="Address" required />
			    <input type="password" name="password1" placeholder="Password" id = "passid" required />
			    <input type="password" name="password2" placeholder="Confirm password" id = "passid2" required />
			    <select class = "inputfield" name = "role">
		
				    <option value = "0">Customer</option>
				    <option value = "1">Admin</option>
					
			    </select>
			    <br>
		
    		    <input title="Press to submit data and sign in" type="submit" value="SUBMIT" value = "Register"/> 
    	    </div> 
    	    
    	    <div class="right">
    
			<a href="login.php">  <image class="social-signin login">Log in</image> </a>
			
            </div>
	    </div>    
        </form>
    </body>
</html>
?>
