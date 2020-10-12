/*function ValidateAll() {
    'use strict'; 
    
}
function myFunction() {
    'use strict'; 
    var lastname = document.getElementById("lname").value;
    var firstnamee = document.getElementById("fname").value;

    if (document.getElementById("lname").value === " ") {
        return true;
    } else {
        alert('Enter Last Name');
        document.getElementById("lname").focus();
            return false;
    }
    
    if (!/^[a-zA-Z]*$/g.test(document.getElementById("lname").value)) {
            return true;
    }
    else {
            alert('Invalid characters');
            document.getElementById("lname").focus();
            return false;
        }
}
if (myFunction) {
    document.form.submit();
}*/
/*function formValidation(){
    var lastname = document.getElementById('lname').value;
    var firstname = document.getElementById('fname').value;
    var middle = document.getElementById('mid')
	var letters = /^[A-Za-z]+$/;
	if (lastname.value.match(letters) && firstname.value.match(letters) && middle.value.match(letters))
	{
		return true;
	}
	else
	{
		alert('First name, last name, and middle initial should be letters.');
		return false;
	}
}

function checkAN(psw)
{
    var psw = document.getElementById('psw').value;
	var an = /^[a-zA-Z0-9]+$/;
	if (psw.value.match(an))
	{
		return true;
	}
	else
	{
		alert('Password must be alphanumeric.');
		return false;
	}	
}

function checke(email)
{
    var email = document.getElementById('email').value;
	var e = ([A-Z]*[a-z]*[0-9]*\.*)+ue.edu.ph;
	if (email.value.match(e))
	{
		return true;
	}
	else
	{
		alert('must be a valid UE email address.');
		return false;
	}
    */
function validateAll(){
    if (myFunction){
        document.form.submit();
    }
}

function myFunction(){
    var lastName   = document.getElementById("lname").value;
    var firstName  = document.getElementById("fname").value;
    var middleIn   = document.getElementById("mid").value;
    var studNum = document.getElementById("stud").value;
    var levelValue = document.getElementById("level").value;
    var birthDate = document.getElementById("bdate").value;
    var mobileNum = document.getElementById("mnum").value;
    var emailValue = document.getElementById("email").value;
    var userValue = document.getElementById("user").value;
    var passwordValue = document.getElementById("psw").value;
    var repeatPasswordValue = document.getElementById("psw-repeat").value;
    
    if (lastName =="") {
        setErrorFor(lname,'Last Name cannot be blank');
        return false;
    }else{
        setSuccessFor(lname);
    }
    
    if (firstName == "") {
        setErrorFor(fname,'First Name cannot be blank');
        return false;
    }else{
        setSuccessFor(fname);
    }
    
    if (studNum == "") {
        setErrorFor(stud,'Student Number cannot be blank');
        return false;
    }else{
        setSuccessFor(stud);
    }
    
    if (levelValue =="") {
        setErrorFor(level,'Required');
    }else{
        setSuccessFor(level);
    }
    
    if (birthDate == "") {
        setErrorFor(bdate,'BirthDate cannot be blank');
        return false;
    }else{
        setSuccessFor(bdate);
    }
    if (mobileNum == "") {
        setErrorFor(mnum,'Mobile Number cannot be blank');
        return false;
    }else{
        setSuccessFor(mnum);
    }
    if (emailValue == "") {
        setErrorFor(email,'Email cannot be blank');
        return false;
    }else{
        setSuccessFor(email);
    }
    if (userValue == "") {
        setErrorFor(user,'Username cannot be blank');
        return false;
    }else{
        setSuccessFor(user);
    }
    if (passwordValue == "") {
        setErrorFor(psw,'Password cannot be blank');
        return false;
    }else{
        setSuccessFor(psw);
    }
    if (repeatPasswordValue == "") {
        setErrorFor(psw-repeat,'Password cannot be blank');
        return false;
    }else{
        setSuccessFor(psw-repeat);
    }
    
    return true;
    
}

function setErrorFor(input,message) {
    var small = textbox.querySelector('small');
    textbox.className = 'textbox error';
    small.innerText = message;
    
}

function setSuccessFor(input) {
    var textbox = input.parentElement;
    textbox.className = 'textbox success';
}


























