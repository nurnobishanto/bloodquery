<?php
require_once("connect.php");

 $epsw=$_REQUEST['epsw'];
 $cpsw=$_REQUEST['cpsw'];
$authId=$_REQUEST['authId'];
$tokenid=$_REQUEST['tokenID'];



  if($epsw==$cpsw && strlen($cpsw)>5 && strlen($cpsw)<32){

     $check = "SELECT * FROM Users WHERE authID='$authId'";
    $status= mysqli_query($connect,$check);


    if($status==true)
    {
       
        while($getRow = mysqli_fetch_array($status))
        {
           
             $email = $getRow['email'];
             $uid=$getRow['uid'];
             $newAuthID =sha1(md5($email.$cpsw));
      

        $updatesql = "UPDATE Users set authID='$newAuthID' WHERE uid ='$uid'";

         if(  mysqli_query($connect,$updatesql))
        { 
            $cookie_name = "bquidns";

           setcookie($cookie_name, $NewauthId, time() + (86400 * $day), "/");

           
                header("Location: login.php");
        }
       
    }
       
     
 }
}
elseif ($cpsw!=$epsw) {
    header("Location: reset.php?pswn&authID='$authId'");
}

 else{

    header("Location: reset.php?pswp&authID='$authId'");
 
 }

?>