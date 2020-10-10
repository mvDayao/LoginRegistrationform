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

function checkletters(a,b,c)
{
	var letters = /^[A-Za-z]+$/;
	if (a.value.match(letters) && b.value.match(letters) && c.value.match(letters))
	{
		return true;
	}
	else
	{
		alert('First name, last name, and middle initial should be letters.');
		return false;
	}
}

function checkAN(a)
{
	var an = /^[a-zA-Z0-9]+$/;
	if (a.value.match(an))
	{
		return true;
	}
	else
	{
		alert('Password must be alphanumeric.');
		return false;
	}	
}

function checke(a)
{
	var e = ([A-Z]*[a-z]*[0-9]*\.*)+ue.edu.ph;
	if (a.value.match(e))
	{
		return true;
	}
	else
	{
		alert('must be a valid UE email address.');
		return false;
	}