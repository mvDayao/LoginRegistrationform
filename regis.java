function formValidation()
{
var lastname = document.registration.lname;
var firstname= document.registration.fname;

{
if(allLetter(lastname))
{
if(allLetter(firstname))
}
}
}
return false;
function allLetter(lastname){
var letters = /^[A-Za-z]+$/;
if (lastname.value.match(letters))
{
return true;
}
else{
alert('Last Name must have an alphabet characters only');
lastname.focus();
return false;
}
}