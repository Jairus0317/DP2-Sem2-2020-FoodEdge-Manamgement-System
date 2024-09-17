//Validating Login Page
function validateLogin() { 
	var username = document.forms["loginform"]["username"].value;
	var pwd = document.forms["loginform"]["password"].value;
	if (username == "admin1" ) {
		alert("You are login as Operation team");
	}
	else if(username == "admin2"){
		alert("You are login as Management team");
	}
	else if (username == "" || username == null) {
		alert("Please fill in your username ");
	}
	else if (pwd == "" || pwd == null) {
		alert("Please fill in your password ");
	}
	else{
		alert("Welcome back,"+username);
	}
    return false;
}
   
var gErrorMsg = "";
function validateRegister(){
 "use strict";   
   var isAllOK = false;  
   var NameOK = chkName();
   var PwdOK = chkPwd();
   var CfmPwdOK = chkPwd2();
   var EmailOK = chkEmail();
   var PhoneOK = chkPhone();
   if (NameOK&& PwdOK && CfmPwdOK && EmailOK && PhoneOK){
      isAllOK = true;
   }
   else{
      alert(gErrorMsg); 
	  gErrorMsg = ""; 
      isAllOK = false;
   }

   return isAllOK;
}

function chkName(){
	var name = document.getElementById("username").value;
	var nameok = true;
    if(name == "") {
      gErrorMsg = gErrorMsg +"Error: Username cannot be blank!\n"
	  nameok = false;
    }
	else{
		var pattern = /^\w+$/;
		if(!pattern.test(name)) {
		   gErrorMsg = gErrorMsg +"Error: Username must contain only letters, numbers and underscores!\n"
		   nameok = false;
		}
	}
	return nameok;
}	
function chkPwd(){
	var pwd = document.getElementById("password").value;
	var pwdok = true;
	if(pwd == ""){
		gErrorMsg = gErrorMsg +"Error: Password cannot be blank!\n"
		pwdok = false;
	}
	else{
		if(pwd.length < 8){
			gErrorMsg = gErrorMsg +"Error: Password must contain at least eight characters!\n"
			pwdok = false;
		}
		var pattern1 = /[0-9]/;
		if(!pattern1.test(pwd)) {
			gErrorMsg = gErrorMsg +"Error: password must contain at least one number!\n"
			pwdok = false;
		}
		var pattern2 = /[a-z]/;
		if(!pattern2.test(pwd)) {
			gErrorMsg = gErrorMsg +"Error: password must contain at least one lowercase letter !\n"
			pwdok = false;
		}
		var pattern3 = /[A-Z]/;
		if(!pattern3.test(pwd)) {
			gErrorMsg = gErrorMsg +"Error: password must contain at least one uppercase letter !\n"
			pwdok = false;
		}
		
	}
	return pwdok;
}
function chkPwd2(){
	var pwd2 = document.getElementById("cfmpassword").value;
	var cfmpwdok = true;
    if(pwd2 == "") {
      gErrorMsg = gErrorMsg +"Error: Confirmed Password cannot be blank!\n"
	  cfmpwdok = false;
    }
	else{
		var pwd = document.getElementById("password").value;
		if(pwd2 != pwd) {
		   gErrorMsg = gErrorMsg +"Error: Both password are not same !\n"
		   cfmpwdok = false;
		}
	}
	
	return cfmpwdok;
}	
function chkEmail(){
	var email = document.getElementById("email").value;
	var emailok = true;
    if(email == "") {
      gErrorMsg = gErrorMsg +"Error: Email cannot be blank!\n"
	  emailok = false;
    }
	else{
		var pattern4 = /[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-za-zA-Z0-9.-]{1,4}$/;
		if(!pattern4.test(email)) {
		   gErrorMsg = gErrorMsg +"Error: Please enter a correct email address!\n"
		   emailok = false;
		}
	}
	return emailok;
}
function chkPhone(){
	var phone = document.getElementById("phone").value;
	var phoneok = true;
    if(phone == "") {
      gErrorMsg = gErrorMsg +"Error: Contact number cannot be blank!\n"
	  phoneok = false;
    }
	else{
		var pattern5 = /^(\+?6?01)[0-46-9]-*[0-9]{7}$/;
		if(!pattern5.test(phone)) {
		   gErrorMsg = gErrorMsg +"Error: Please enter a correct contact number!\n"
		   phoneok = false;
		}
	}
	return phoneok;
}
function registerInputsOnClick(){   
	var inputElements = document.getElementById("regForm").getElementsByTagName("input");
	for (var i = 0; i < inputElements.length; i++){
		inputElements[i].onclick = resetFormat;
	}
}
function init() {
   var regForm = document.getElementById("regForm");
   regForm.onsubmit = validateRegister;  
}
window.onload = init;   