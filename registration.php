<?php
require_once('config.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
  <link rel="stylesheet" href="login.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="regis.js"></script> 
    <title>REGISTRATION FORM</title>
</head>
<<<<<<< HEAD
<script src="regis.js"></script>
<body> <!--JAVASCRIPT-->
=======
    <div>
    <script>
        function validate(){
            var a = document.getElementById("psw").value;
            var b = document.getElementById("psw-repeat").value;
            if(a!=b){
                alert("Password Mismatch");
                return false;
            }
        }        
        
        
        
        </script>
    </div>

<body>
>>>>>>> bdf47dc9c8bef7dc45b9f50bbb6555b61c48a71e

    <div class="contain">
        <div class="containtt">
  <div class="login-container">
      <form class='registration' action=process.php onSubmit="return validate();" method="POST">
      <center>
        
        <h2>ACCOUNT REGISTRATION</h2> 
        
<br>
        <br>
        <br>
    <div class="textbox">
        <i class="fas fa-user"></i>
        <label for="lname">Last Name :</label>
        <br>
        <input type="text" placeholder="Last Name" id="lname" name="lname" pattern="[A-Za-z]{1,15}" title="Alphabets Only" required>
</div></center>

<div class="textboxfirst">
    <i class="fas fa-user"></i>
   <label for="fname">First Name :</label><br>
 <input type="text" placeholder="First Name" id="fname" name="fname" pattern="[A-Za-z]{1,15}" title="Alphabets Only" required >
          </div>

    
    <div class="textboxinitial">
        <i class="fas fa-user"></i>
        <label for="mid">M.I :</label>
        <br>
        <input type="texti" placeholder="M.I" id="mid" name="mid" pattern="[A-Za-z]{1,2}" title="Alphabets Only" maxlength="2" >
          </div>
      
        
      <div class="textboxnum">
      <i class="fas fa-address-card"></i>
          <label for="stud">Student Number :</label>
          <br>
          <input type="number" placeholder="Student Number"id="stud" name="stud" title="Numbers Only" minlength="11" maxlength="11" required>
          </div>

      
      <div class="drop">
      <i class="fas fa-pencil-ruler"></i>
      <label for="year" >Year Level :</label>
          <br>
      <select id="level" name="level" required>
     <option value=" ">Year Level</option>    
      <option value="1">1st Year</option>    
      <option value="2">2nd Year</option>    
      <option value="3">3rd year</option>    
      <option value="4">4th Year</option>    
       <option value="5">5th Year</option>   
      <option value="6">5 Year Up</option>    
      </select>
      </div>   
      
      <div class="bday">
         <i class="fas fa-calendar-alt"></i>
          <label for="bdate">Birth Date :</label>
          <br>
          <input type="date" id="bdate" name="bdate" max="2002-10-01" required>
          </div>
      
      <div class="mobile">
      <i class="fas fa-phone"></i>
          <label for="mnum">Mobile Number :</label>
          <br>
          <input type="tel"  placeholder="+639-" id="mnum" name="mnum" pattern="[0-9]{1,11}" title="Numbers Only" minlength="10" maxlength="10" required>
          </div>
 
      <div class="emailadd">
      <i class="fas fa-envelope"></i>
          <label for="email">UE Email Address :</label>
          <br>
          <input type="email" placeholder="example@ue.edu.ph" pattern="[a-zA-Z@.]{4,}" id="email" name="email" required>
          </div>
      
      <div class="usern">
      <i class="fas fa-user"></i>
          <label for="user">Username :</label>
          <br>
          <input type="text" placeholder="Username" id="user" name="user" pattern="[a-zA-Z_-]{8,15}" title="Alphabets and -_ Only 8-15 characters" minlength="8" maxlength="15" required>
          </div>

      <div class="pass">
      <i class="fas fa-lock"></i>
          <label for="psw">Password:</label>
          <br>
          <input type="password" placeholder="Password" id="psw" pattern="[a-zA-Z0-9]{1,}" title="AlphaNumeric Only" name="psw" required>
          <span class="eye" onclick="myFunction()">
          <i id="hide1" class="fas fa-eye"></i>
          <i id="hide2" class="fas fa-eye-slash"></i>
         </span>
      </div>
      
      <div class="passtwo">
      <i class="fas fa-lock"></i>
      <label for="psw-repeat">Confirm Password :</label>
      <br>
      <input type="password" placeholder="Confirm Password" id="psw-repeat" name="psw-repeat" minlength="8" maxlength="20" required>
          <span class="eye2" onclick="myFunction1()" >
             <i id="hide3" class="fas fa-eye"></i>
             <i id="hide4" class="fas fa-eye-slash"></i>
          </span>
      </div>
      <br>
      <br>
      <br>
      
   <center> <div class="agree">
      <input type="checkbox" id="check" name="check" required>
       <h10><a href="#">&nbsp I agree to the Terms and Conditions</a></h10>
       <br>
         
      </div></center> 
      <div class="button">
     <input type="submit" id="create" name="create" value="REGISTER" ></div>     
<h6>Already a member?<a href="login.html">.Just Sign In</a></h6>

          
   </form>  
      
</div>  
            
</div>
    </div>
    <script>
        function myFunction(){
            var x = document.getElementById("psw");
            var y = document.getElementById("hide1");
            var z = document.getElementById("hide2");
            
            if(x.type === 'password'){
                x.type = "text";
                y.style.display = "block";
                z.style.display = "none";
            }else{
                x.type = "password";
                y.style.display = "none";
                z.style.display = "block";
            }
        }
        
        function myFunction1(){
            var x = document.getElementById("psw-repeat");
            var y = document.getElementById("hide3");
            var z = document.getElementById("hide4");
            
            if(x.type === 'password'){
                x.type = "text";
                y.style.display = "block";
                z.style.display = "none";
            }else{
                x.type = "password";
                y.style.display = "none";
                z.style.display = "block";
            }
        }
    </script> 

</body>
</html>
