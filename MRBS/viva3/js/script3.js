function login()
{
	var username = document.getElementById("uname").value
	var password = document.getElementById("pwd").value
	
	if (username == "admin" && password == "admin123")
	{
		window.open("displayRooms.php");
	}
	
	else 
		
	{
	alert("Log in unsuccesfull");
	}
}