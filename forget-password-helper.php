<?php 

require_once("connect.php");
 $email =$_REQUEST['email'];
$check = "SELECT * FROM Users WHERE email='$email'";
$status= mysqli_query($connect,$check);
$checkCount =0;
if($status)
{
    $checkCount= mysqli_num_rows( $status);
}


if($checkCount===1)
{
    while($getRow = mysqli_fetch_array($status))
    {
        $authID =$getRow['authID'];
        $tokenID =$getRow['tokenID'];

      ?>
      <h1>This link will go to email. Use this link to change the password from the email =><a href="reset.php?authID=<?php echo $authID ?>&&tokenID=<?php echo $tokenID ?>">Reset password</a></h1>
     
      <?php  

        
    }
}else {
    header("Location: forget-password.php?action=No user registration with this email&msg");
}





?>