<?php

require_once("connect.php"); 

$title=$_REQUEST['title'];
$bunit=$_REQUEST['bunit'];
$pname=$_REQUEST['pname'];
$page=$_REQUEST['page'];
$purpose=$_REQUEST['purpose'];
$bgroup=$_REQUEST['bgroup'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$wnb=$_REQUEST['wnb'];
$gender=$_REQUEST['gender'];

$hname=$_REQUEST['hname'];
$addr=$_REQUEST['addr'];
$city=$_REQUEST['city'];
$zip=$_REQUEST['zip'];
$details=$_REQUEST['details'];
$today=date("Y-m-d");


if($bgroup==='bnone')
{
    if(isset($_REQUEST['ref'])){
        header("Location: my-profile-br.php?bnone");
    }else {
          header("Location: blood-request-post.php?bnone");
    }
  
}elseif($gender==='gnone')
{
    if(isset($_REQUEST['ref'])){
        header("Location: my-profile-br.php?gnone");
    }else {
          header("Location: blood-request-post.php?gnone");
    }
 
}





$cookie_name="bquidns";
if(isset($_COOKIE[$cookie_name])) {
$logincheck = "SELECT * FROM Users WHERE authID='$_COOKIE[$cookie_name]'";
$runlogCheck= mysqli_query($connect,$logincheck);
$logcheckCount= mysqli_num_rows( $runlogCheck);


if($logcheckCount==1){
 $sql = "SELECT * FROM Users WHERE authID='$_COOKIE[$cookie_name]'";
 $status= mysqli_query($connect,$sql);


 if($status==true)
 {
    
     while($getRow = mysqli_fetch_array($status))
     {
        
          $uid = $getRow['uid'];
          $insertSQL="INSERT INTO blood_req_post (title,bunit,pname,page,purpose,bgroup,email,phone,wnb,gender,hname,addr,city,zip,detail,puid)
                        VALUES('$title','$bunit','$pname','$page','$purpose','$bgroup','$email','$phone','$wnb','$gender','$hname','$addr','$city','$zip','$details','$uid')";
          
          $check = "SELECT * FROM blood_req_post WHERE puid='$uid' AND today='$today' AND bgroup='$bgroup'";
         $runCheck= mysqli_query($connect,$check);
         $checkCount= mysqli_num_rows( $runCheck);

         if($checkCount===1)
         { 
             echo "Today You requested another post for this blood group ".$bgroup;  
          
         }
         else{
            if(mysqli_query($connect,$insertSQL))
            {
                if(isset($_REQUEST['ref'])){
                    header("Location: my-profile.php?action=Blood Request Post Added Successfully&msg");
                }else{
                    header("Location: blood-request-post.php?action=Blood Request Post Added Successfully&msg"); 
                }
                
            } else{

            } 

             
         }  




     }
   }



}}else{
header("Location: login.php?nsc");
}



?>