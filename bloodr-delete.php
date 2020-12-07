<?php 
 require_once("connect.php");
 if(isset($_REQUEST['id'])){
    $brid =$_REQUEST['id'];

    $sql ="DELETE  FROM blood_req_post WHERE brid ='$brid'";
    if(mysqli_query($connect,$sql)){
        header("Location: index.php?action=deleted");
    }
    else{
        header("Location: index.php?action=unsuccess");
    }
 }


?>