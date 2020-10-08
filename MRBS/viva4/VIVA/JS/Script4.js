function validate(){

	var username = document.forms["myForms"]["username"].value;
	var password = document.forms["myFroms"]["password"].value;

	var state = false;

	if (isEmpty(username, "username") == false){

		return state;
	}

	else if (isEmpty(password, "password") == false){

		return state;
	}
}
