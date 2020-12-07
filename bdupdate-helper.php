<?php
if(isset($_REQUEST['fullname'])){
  $fullname = $_REQUEST['fullname'];
}
if(isset($_REQUEST['bgroup'])){
  $bgroup = $_REQUEST['bgroup'];
 }
 if(isset($_REQUEST['email'])){
  $email = $_REQUEST['email'];
 }
 if(isset($_REQUEST['phone'])){
  $phone = $_REQUEST['phone'];
 }

 if(isset($_REQUEST['dob'])){
   $dob = $_REQUEST['dob'];
 }

 if(isset($_REQUEST['gender'])){
$gender = $_REQUEST['gender'];
 }

 if(isset($_REQUEST['ability'])){
$ability = $_REQUEST['ability'];
 }

 if(isset($_REQUEST['addr'])){
   $addr = $_REQUEST['addr'];
 }
 if(isset($_REQUEST['city'])){
   $city = $_REQUEST['city'];
 }
 if(isset($_REQUEST['zip'])){
  $zip = $_REQUEST['zip'];
 }
 if(isset($_REQUEST['fb'])){
    $fb = $_REQUEST['fb'];
 }
 if(isset($_REQUEST['ld'])){
  $ld = $_REQUEST['ld'];
 }
 if(isset($_REQUEST['details'])){
$about = $_REQUEST['details'];
 }
 if(isset($_REQUEST['did'])){
    $did = $_REQUEST['did'];
     }
    

 require_once("connect.php"); 
 $sql="UPDATE doners SET fullname='$fullname',bgroup='$bgroup',email='$email',phone='$phone',
 dob='$dob',gender='$gender',ability='$ability',addr='$addr',city='$city',zip='$zip',fb='$fb',
 ld='$ld',details='$about' 
 WHERE did='$did'";
if(mysqli_query($connect,$sql)){
    header("Location: http://localhost/bloodquery/profile.php?did=".$did."&action=updated&msg=Profile Updated Successfully");
  
}else{
    header("Location: http://localhost/bloodquery/profile.php?did=".$did."&action=Failed&msg=Profile Updated failed");
}


?>