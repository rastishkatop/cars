function RegValidate()
{
	var ErrorLog = '';
	var email = document.getElementById("emailid").value;
	var regex = new RegExp(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
	if(!regex.test(email))
	{
		alert("Email must have @ in center and . sign after it");
		return false;
	}
	else if(document.getElementById("passid").value != document.getElementById("passid2").value)
	{
		alert("Passwords do not match");
		return false;
	}
	else
	{
	return true;
	}
}
