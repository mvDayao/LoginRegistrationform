<?php
session_start();


?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="logincss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>WELCOME</title>
</head>
<body>
    <div class="container">
         <div class="form-container log-in-container">
            <form class="myform" action="login.php" method="post">
                
                  <h1>LOGIN</h1>
                <br>
                
                
                  <div class="textbox">
                      <i class="fas fa-user"></i>
                      <label for="user">EMAIL :</label>
                 <input type="text"  placeholder="Email" name="user" id="user" required>
                      
                      
                  </div>
                
                <br>
                  
                <div class="textbox">
                    <i class="fas fa-lock"></i>
                    <label for="psw">PASSWORD : </label>
                <input type="password" placeholder="Password" name="psw" id="psw" required>
                    <span class="eye" onclick="myFunction()">
                      <i id="hide1" class="fas fa-eye"></i>
                      <i id="hide2" class="fas fa-eye-slash"></i>
                   </span>
                </div>
                
                <br>
                
                <div class="remember">  
                 <input type="checkbox" id="remember "name="remember" ?>
                    <label for="remember">Remember me</label>
                 </div>  

                 <div class="button">
                 <button type="Sign In" id="signin_btn" name="signin_btn" value="SignIn">
                  SIGN IN</button>
                </div>
                
                <p class="forgot-pass">Forgot Password ?</p>
             
             </form>
        </div>
    
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    
                      <h2>&nbsp &nbsp &nbsp NEW HERE?</h2>
          <p>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Sign up and discover great amount of new opportunities!</p>  
                    <br>
                    
                    <div class="button">
                        <a href="registration.php">
                 <button> SIGN UP</button></a>
                </div>
                </div>
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
                
            }
            else{
                x.type = "password";
                y.style.display = "none";
                z.style.display = "block"; 
            }
            
        }
    </script>
</body>
</html>
<?php
if(isset($_POST['signin_btn'])){
    $user=$_POST['user'];
    $psw = $_POST['psw'];
    
    if ($user=='admin' && $psw=='password'){
        header("location:mybio.htm");
        exit();
    }
    else
        echo "<script>alert('INVALID USERNAME/PASSWORD. PLEASE TRYAGAIN');</script>";
    
    
}
?>