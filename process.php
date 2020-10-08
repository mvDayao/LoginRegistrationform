<?php
require_once('config.php');
?>

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
    
    
    
    $sql = "INSERT INTO register (lname, fname, mid, stud, level, bdate, mnum, email, user, psw) VALUES(?,?,?,?,?,?,?,?,?,?)";
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
