function validate_name(){
	var x = document.getElementById("name");
	if(!x.checkValidity()){
		document.getElementById("name_err").innerHTML = "Only letters and white spaces allowed";
	}
	else{
		document.getElementById("name_err").innerHTML = "";
	}
}
function validate_username(){
	var y = document.getElementById("username");
	if(!y.checkValidity()){
		document.getElementById("username_err").innerHTML = y.validationMessage;
	}
	else{
		document.getElementById("username_err").innerHTML = "";
	}
}
function validate_email(){
	var z = document.getElementById("email");
	if(!z.checkValidity()){
		document.getElementById("email_err").innerHTML = z.validationMessage + "<br> e.g example@mail.com";
	}
	else{
		document.getElementById("email_err").innerHTML = "";
	}
}
function validate_password(){
	var v = document.getElementById("password");
	if(!v.checkValidity()){
		document.getElementById("password_err").innerHTML = v.validationMessage;
	}
	else{
		document.getElementById("password_err").innerHTML = "";
	}
}