<?php
require_once("connect.php");
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$epsw = $_POST['epsw'];
$cpsw = $_POST['cpsw'];
$authId= sha1(md5($email.$cpsw));
$token =sha1(md5($email));
if(strlen($cpsw)>5 && strlen($cpsw)<20 ){
     if($epsw===$cpsw)
    {
        $check = "SELECT * FROM Users WHERE email='$email'";
        $runCheck= mysqli_query($connect,$check);
        $checkCount= mysqli_num_rows( $runCheck);
        if($checkCount===0)
        {
                $sql = "INSERT INTO Users (Fname, Lname, email,phone,authID,tokenID)
            VALUES ('$fname', '$lname', '$email', '$phone', '$authId', '$token')";
            
            if (mysqli_query($connect, $sql)) {
                $cookie_name = "bquidns";
              $cookie_value = $authId;
              setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
                header("Location: index.php?action=Registartion&msg=New User Registration Successfull");
            } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connect);
            }
        }else{
            header("Location: registration.php?pswa");
        }
       
    }
    else{
    header("Location: registration.php?pswn");
    }  
}
else{
    header("Location: registration.php?pswp");
}





//header("Location: .php?success");

?>