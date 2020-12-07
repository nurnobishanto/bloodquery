<?php 

require_once("connect.php");
//$did=$_REQUEST['did'];
$target_dir = "avator/";
$target_file = $_FILES['profile']['name'];
$profiletmp=$_FILES['profile']['tmp_name'];
echo $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


$fullname=$_REQUEST['fullname'];
$bgroup=$_REQUEST['bgroup'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$dob=$_REQUEST['dob'];
$gender=$_REQUEST['gender'];
$ability=$_REQUEST['ability'];
$addr=$_REQUEST['addr'];
$city=$_REQUEST['city'];
$zip=$_REQUEST['zip'];
$fb=$_REQUEST['fb'];
$ld=$_REQUEST['ld'];
$details=$_REQUEST['details'];
$uid=$_REQUEST['uid'];
$reffer=$_REQUEST['reffer'];
if($bgroup==='bnone')
{
    if($uid==='reffer'){
        header("Location: my-profile-adr.php?bnone");
    }else{
        header("Location: become-donor.php?bnone");
    }
    

}else if($ability==='anone')
{
    if($uid==='reffer'){
        header("Location: my-profile-adr.php?anone");
    }else{
        header("Location: become-donor.php?anone");
    }
   
}else if($gender==='gnone')
{
    if($uid==='reffer'){
        header("Location: my-profile-adr.php?gnone");
    }else{
        header("Location: become-donor.php?gnone");
    }
  

}else if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    if($uid==='reffer'){
        header("Location: my-profile-adr.php?nimg");
    }else{
        header("Location: become-donor.php?nimg");
    }
   
}else if ($_FILES["profile"]["size"] > 700000) {
    if($uid==='reffer'){
        header("Location: my-profile-adr.php?simg");
    }else{
        header("Location: become-donor.php?simg");
    }
   

 
  }

else {

         $check = "SELECT * FROM doners WHERE phone='$phone'";
        $runCheck= mysqli_query($connect,$check);
        $checkCount= mysqli_num_rows( $runCheck);
        if($checkCount===0)
        {
            $avatorname =date("y-m-d").$phone.".".$imageFileType;
            move_uploaded_file($profiletmp,$target_dir.$avatorname);

             $sql = "INSERT INTO doners (fullname,bgroup,email,phone,dob,gender, profile, ability, addr, city, zip, fb, ld, details, uid, reffer) VALUES 
             ('$fullname','$bgroup','$email','$phone','$dob','$gender','$avatorname','$ability','$addr','$city','$zip','$fb','$ld','$details','$uid','$reffer')";
            $upsql="UPDATE users SET role ='doner' WHERE uid='$uid'";
            
            if (mysqli_query($connect, $sql) && mysqli_query($connect,$upsql) ) {

                header("Location: my-profile-adr.php?action=Success&msg=You are the blood donor now");
            } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connect);
            }
        }else{
            if($uid==='reffer'){
                header("Location: my-profile-adr.php?action=Doner Exists");
            }else{
                header("Location: become-donor.php?action=Doner Exists");
            }
           
           
        }

}




?>