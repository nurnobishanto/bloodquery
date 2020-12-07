<?php

require_once('connect.php');
 $currentPass=$_REQUEST['cpass'];
$newPass=$_REQUEST['npass'];
 $confirmpass=$_REQUEST['conpass'];
 

$cookie_name="bquidns";
if(isset($_COOKIE[$cookie_name])) {
 $currenAuth=$_COOKIE[$cookie_name];
$passCheck = "SELECT * FROM Users WHERE authID='$currenAuth'";
$runlogCheck= mysqli_query($connect,$passCheck);
while($getRow=mysqli_fetch_array($runlogCheck))
{
    $email=$getRow['email'];
    $uid=$getRow['uid'];

}   



}else {
    
    header('Location: index.php');
}

$realPass=sha1(md5($email.$currentPass));
if($currenAuth===$realPass){
     if(($newPass===$confirmpass) && (strlen($newPass) >5) && (strlen($newPass) <33))
    {
        echo $NewauthId= sha1(md5($email.$newPass));
      $updatesql = "UPDATE Users set authID='$NewauthId' WHERE uid ='$uid'";
        if(mysqli_query($connect,$updatesql)) {
         $cookie_name = "bquidns";
         setcookie($cookie_name, $NewauthId, time() + (86400 * 6), "/");
         header('Location: my-profile.php?passchanged');

         }

    }
    else if($newPass >32)
    {
        header('Location: my-profile-cp.php?rm');
    }

    else{
        header('Location: my-profile-cp.php?nm');
    }

}else {
    header('Location: my-profile-cp.php?invp');
}




?>