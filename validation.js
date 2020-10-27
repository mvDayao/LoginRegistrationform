//
var lname = document.getElementById('lname');
var fname = document.getElementById('fname');
var stud = document.getElementById('stud');
var level = document.getElementById('level');
var bdate = document.getElementById('bdate');
var mob = document.getElementById('mob');
var email = document.getElementById('email');
var user = document.getElementById('user');
var psw = document.getElementById('psw');
var pswrepeat = document.getElementById('pswrepeat');
var letters = /^[A-Za-z]+$/;
var numbers = /^[0-9]+$/;
var mail = /^([A-Za-z0-9_\-\.])+\@([ue.edu])+\.(ph)$/ ;
var alphanumeric =  /^[0-9a-zA-Z]+$/;



//All evenet listener
lname.addEventListener('blur',lnameVerify,true);
fname.addEventListener('blur',fnameVerify,true);
stud.addEventListener('blur',studVerify,true);
level.addEventListener('blur',levelVerify,true);
bdate.addEventListener('blur',bdateVerify,true);
mob.addEventListener('blur',mobVerify,true);
email.addEventListener('blur',emailVerify,true);
user.addEventListener('blur',userVerify,true);
psw.addEventListener('blur',pswVerify,true);


function validate(){
    //lastname
    if (document.getElementById('lname').value == ""){
        document.getElementById('lname').style.borderColor = "red";
        lname_error.textContent = "Last Name is required";
        
        return false;
    }
    if (document.getElementById('lname').value.match(letters)){
       
    }
    else{
         document.getElementById('lname').style.borderColor = "red";
        lname_error.textContent = "Alphabets Only";
        
        return false;
        
    }
    //Firstname
    if (document.getElementById('fname').value == ""){
        document.getElementById('fname').style.borderColor = "red";
        fname_error.textContent = "First Name is required";
        return false;
 
    }
    if (document.getElementById('fname').value.match(letters)){
        
    }else{
        document.getElementById('fname').style.borderColor = "red";
        fname_error.textContent = "Alphabets Only";
        
    }
    
    //Middle INitial
    if (document.getElementById('mid').value.length > 2){
        document.getElementById('mid').style.borderColor = "red";
        mid_error.textContent = " Max. 2 letters";
        return false;
    }
    
    if (document.getElementById('mid').value.match(letters)){
        
    }else{
        document.getElementById('mid').style.borderColor = "red";
        mid_error.textContent = "Alphabets Only";
        
    }
    
    //Student Number
    if (document.getElementById('stud').value == ""){
        document.getElementById('stud').style.borderColor = "red";
        stud_error.textContent = "Student Number is Required";
        return false;
    }
    if(document.getElementById('stud').value.length = 11){
        
    }else{
        document.getElementById('stud').style.borderColor = "red";
        stud_error.textContent = "Must be 11 char. long";
        return false;
    }
    if (document.getElementById('stud').value.match(numbers)){
        
    }else{
        document.getElementById('stud').style.borderColor = "red";
        stud_error.textContent = "Numerical Values Only";
        return false;
    }
    
    //Mobile Num
    if (document.getElementById('mob').value == ""){
        document.getElementById('mob').style.borderColor = "red";
        mob_error.textContent = "Mobile Number is Required";
        return false;
    }
    
    if(document.getElementById('mob').value.length = 10){
        
    }else{
        document.getElementById('mob').style.borderColor = "red";
        mob_error.textContent = "10 Digits Only";
    }
    if (document.getElementById('mob').value.match(numbers)){
        
    }else{
        document.getElementById('mob').style.borderColor = "red";
        mob_error.textContent = "Numbers Only";
    }
    
    //Email
    if (document.getElementById('email').value == ""){
        document.getElementById('email').style.borderColor = "red";
        email_error.textContent = "Email Address is Required";
        return false;
    }
    if (document.getElementById('email').value.match(mail)){
        
    }else{
        document.getElementById('email').style.borderColor = "red";
        email_error.textContent = "Invalid Email Address";
        }
    
    //username
      if (document.getElementById('user').value == ""){
        document.getElementById('user').style.borderColor = "red";
        user_error.textContent = "Username is Required";
        return false;
    }
    
    
    if (document.getElementById('user').value.length > 9 || document.getElementById('user').value.length < 15 ){
        
    }else{
        document.getElementById('user').style.borderColor = "red";
        user_error.textContent = "Min. 8 Max. 15 Characters";
  }
    
    if (document.getElementById('user').value.match(alphabets)){
        
    }else{
        document.getElementById('user').style.borderColor = "red";
        user_error.textContent = "Alphabets Only -_";
        }
    
//Password
    
    if (document.getElementById('psw').value == ""){
        document.getElementById('psw').style.borderColor = "red";
        psw_error.textContent = "Password is Required";
        return false;
    }
    if (document.getElementById('psw').value.match(alphanumeric)){
        
    }else{
        document.getElementById('psw').style.borderColor = "red";
        psw_error.textContent = "AlphaNumeric Only";
        }
            var a = document.getElementById("psw").value;
            var b = document.getElementById("psw-repeat").value;
            if(a!=b){
                alert("Password Mismatch");
                return false;
            }
               
        
}