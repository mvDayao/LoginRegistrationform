<?php
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $mid   = $_POST['mid'];
    $stud  = $_POST['stud'];
    $level  = $_POST['level'];
    $bdate = $_POST['bdate'];
    $mnum = $_POST['mnum'];
    $email = $_POST['email'];
    $user  = $_POST['user'];
    $psw = sha1($_POST['psw']);

if (!empty($lname) || !empty($fname) || !empty($mid) || !empty($stud) || !empty($level) || !empty($bdate) || !empty($mnum) || !empty($email) || !empty($user) || !empty($psw)){
   $host = "localhost";
   $dbUsername ="root";
    $dbPassword=" ";
    $dbname="trylang";
    
   //connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    
    if (mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_error().')'. mysqli_connect_error());
    }else{
       $SELECT = "SELECT email FROM register Where email = ? Limit 1"; 
       $INSERT = "INSERT INTO register (lname, fname, mid, stud, level, bdate, mnum, email, user, psw) VALUES (?,?,?,?,?,?,?,?,?,?)";
        
        //PREPARE STATEMENT
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
        
        
    if($rnum==0){
        $stmt->close();
        
        $stmt= $conn->prepare($INSERT);
        $stmt->bind_param("sssiiiissi", $lname, $fname, $mid, $stud, $level, $bdate, $mnum, $email, $user, $psw);
        echo"New Record Inserted Successfully";
    }else{
        echo "Someone already register using this email. Please try again.";
    }
        $stmt->close();
        $conn->close();
    }
    
    
}else{
   echo "All Field are required" ;
    die();
}
?>
