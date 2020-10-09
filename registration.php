<?php
require_once('config.php');

?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="login.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>REGISTRATION FORM</title>
</head>

<body> <!--JAVASCRIPT-->
    <div>
        <?php
    if(isset($_POST['create'])){
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $mid   = $_POST['mid'];
    $stud  = $_POST['stud'];
    $level = $_POST['level'];
    $bdate = $_POST['bdate'];
    $mnum  = $_POST['mnum'];
    $email = $_POST['email'];
    $user  = $_POST['user'];
    $psw = sha1($_POST['psw']);
    
    
    
    $sql = "INSERT INTO register (LastName, FirstName, Initial, StudentNo, Year, Birthdate, Mobile, Email, Username, Password) VALUES(?,?,?,?,?,?,?,?,?,?)";
    $stminsert = $db->prepare($sql);
    $result = $stminsert->execute([$lname, $fname, $mid, $stud, $level, $bdate, $mnum, $email, $user, $psw]);
    if($result){
        echo 'Succesfully Saved';
        
    }else{
        echo 'There were errors while saving this';
    }
}else{
    echo 'No data';
}

?>

    
    
    
    </div>
    <div class="contain">
        <div class="containtt">
  <div class="login-container">
      <form class="" action="process.php" method="POST">
      <center>
        
        <h2>ACCOUNT REGISTRATION</h2> 
        
<br>
        <br>
        <br>
    <div class="textbox">
        <i class="fas fa-user"></i>
        <label for="lname">Last Name :</label>
        <br>
        <input type="text" placeholder="Last Name" id="lname" name="lname" required>
</div></center>

<div class="textboxfirst">
    <i class="fas fa-user"></i>
   <label for="fname">First Name :</label><br>
 <input type="text" placeholder="First Name" id="fname" name="fname" required> 
    </div>

    <div class="textboxinitial">
        <i class="fas fa-user"></i>
        <label for="mid">M.I :</label>
        <br>
        <input type="texti" placeholder="M.I" id="mid" name="mid" maxlength="2">
    </div>
      
      <div class="textboxnum">
      <i class="fas fa-address-card"></i>
          <label for="stud">Student Number :</label>
          <br>
          <input type="tel" placeholder="Student Number"id="stud" name="stud" minglength="11" maxlength="11" required>
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
          <input type="tel"  placeholder="Mobile Number" id="mnum" name="mnum" required>
      
      </div>
 
      <div class="emailadd">
      <i class="fas fa-envelope"></i>
          <label for="email">UE Email Address :</label>
          <br>
          <input type="email" placeholder="Email Address" id="email" name="email" required>
      </div>
      
      <div class="usern">
      <i class="fas fa-user"></i>
          <label for="user">Username :</label>
          <br>
          <input type="text" placeholder="Username" id="user" name="user" minlength="8" maxlength="15" required>
      </div>
      
      <div class="pass">
      <i class="fas fa-lock"></i>
          <label for="psw">Password :</label>
          <br>
          <input type="password" placeholder="Password" id="psw" name="psw" required>
      </div>
      
      <div class="passtwo">
      <i class="fas fa-lock"></i>
      <label for="psw-repeat">Confirm Password :</label>
      <br>
      <input type="password" placeholder="Confirm Password" id="psw-repeat" name="psw-repeat" minlength="8" maxlength="20" required>
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
     <input type="submit" id="create" name="create" value="REGISTER"></div>     
<h6> Already a member?<a href="login.html">.Just Sign In</a></h6>

    
          
   </form>   
</div>  
</div>
</div>
    <script>
        function myFunction(){
            var x = document.getElementById("psw");
            var y = document.getElementById("hide1");
            var z = document.getElementById("hide2");
            
            if(x.type === "password"){
                x.type = "text";
                y.style.display = "block";
                z.style.display = "none";
                
            }
            else{
                x.type = 'password';
                y.style.display = "none";
                z.style.display = "block"; 
            }
            
        }
    </script>
    
</body>
</html>
