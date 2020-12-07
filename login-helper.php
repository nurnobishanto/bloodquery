<?php 
require_once("connect.php");
$email =$_REQUEST['email'];
$pass = $_REQUEST['psw'];
if(isset($_REQUEST['remember']))
{
    $day = 30;
}else{
    $day = 1;
}


$authId= sha1(md5($email.$pass));


$check = "SELECT * FROM Users WHERE email='$email'AND authID='$authId'";
$status= mysqli_query($connect,$check);




if($status==true)
{
    $run= mysqli_num_rows($status);
    if($run===1){
    $cookie_name = "bquidns";
    $cookie_value = $authId;
    setcookie($cookie_name, $cookie_value, time() + (86400 * $day), "/");
    header("Location: my-profile.php"); 
    }else{
        header("Location: login.php?action=Invalid Email or Password&msg"); 
    }
   
}
else{
    
    


    header("Location: login.php?wrong"); 
}

?>