<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $sex = $_POST['sex'];
    $bday = $_POST['bday'];

     ?>


     <div> Your name is <?php echo $fname; echo " "; echo $lname;?>
        <br>
      </div>
      <div> Your Email is <?php echo $email;?>
         <br>
      </div>
      <div> You are <?php echo $sex;?>
         <br>
      </div>
      <div> Your birthday is on <?php echo $bday;?>
         <br>
      </div>
     </div>
  </body>
</html>
