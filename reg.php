<?php
require_once('config.php');

?>
<!DOCTYPE html>
<html>
<head>
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="regcss.css">
<script src="validation.js"></script>
    <title>Registration</title>
</head>
<body>
    <div>
    <script>
        function myFuntion(){
            var a = document.getElementById("psw").value;
            var b = document.getElementById("psw-repeat").value;
            if(a!=b){
                alert("Password Mismatch");
                return false;
            }
        }        
        
        
        
        </script>
    </div>
    <div class="container">
	<div class="header">
        <h2><center>ACCOUNT REGISTRATION</center></h2>
    
	</div>
	<form id="reg-form" class="form" action="process.php" onSubmit="return myfunction();" method="post">
		<div class="form-control">
            <label for="username"><b>Last Name :</b></label>
			<input type="text" placeholder="Last Name" id="lname" name="lname" />
             <div id="lname_error"></div>
		
		
            <label for="username"><b>First Name :</b></label>
			<input type="text" placeholder="First Name" id="fname" name="fname" />
             <div id="fname_error"></div>
			
		
        
            <label for="username"><b>M.I :</b></label>
			<input type="text" placeholder="M.I" id="mid" name="mid" />
            <div id="mid_error"></div>
			
            <label for="username"><b>Student Number :</b></label>
            <input type="tel" placeholder="Student Number" id="stud" name="stud" maxlength="11"/>
             <div id="stud_error"></div>
           
		  
            <label for="year" ><b>Year Level :</b></label>
          <br>
            <select id="level" name="level">
            <option value=" ">Year Level</option>    
            <option value="1">1st Year</option>    
            <option value="2">2nd Year</option>    
            <option value="3">3rd year</option>    
            <option value="4">4th Year</option>    
            <option value="5">5th Year</option>   
            <option value="6">5 Year Up</option>    
            </select>
        <br>
            <label for="bdate"><b>Birth Date :</b></label>
          <br>
          <input type="date" id="bdate" name="bdate" max="2002-10-01"  />
             <div id="bdate_error"></div>
            <br>
            <br>
            <label for="username"><b>Mobile Number :</b></label>
            <select id="mob" name="mob">
            <option>+63 </option>
            </select>
            <input type="tel" placeholder="Mobile Number" id="mob" name="mob" />
             <div id="mob_error"></div>
			
        </div>
        <div class="form-control">
            <label for="email"><b>UE Email Address :</b></label>
            <input type="email" placeholder="UE Email Address" id="email" name="email"/>
             <div id="email_error"></div>
            
            <label for="user"><b>Username :</b></label>
            <input type="text" placeholder="Username" id="user" name="user" minlength="8" maxlength="15"/>
             <div id="user_error"></div>
         
            
            <label for="psw"><b>Password :</b></label>
            <input type="password" placeholder="Password" id="psw" name="psw" minlength="8" maxlength="20"/>
          
            
            <label for="pswrepeat"><b>Confirm Password :</b></label>
            <input type="password" placeholder="Confirm Password" id="pswrepeat" name="pswrepeat" />
             <div id="psw_error"></div>
          
            <br>
            <br>
            <input type="checkbox" id="check" name="check" required><h4>&nbsp &nbsp &nbsp Terms and Conditions </h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        
		<button onclick="return validate()" name="create" id="create">REGISTER</button>
            <h6><center>Already a member?<a href="login.html">.Just Sign In</a></center></h6>
        </div>
	</form>
</div>
    </body>
    
</html>

    
