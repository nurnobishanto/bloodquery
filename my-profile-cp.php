<?php require_once("header.php"); 

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
        
          $role = $getRow['role'];
          $fname=$getRow['Fname'];
          $lname=$getRow['Lname'];
          $email=$getRow['email'];
          $phone=$getRow['phone'];
          $uid=$getRow['uid'];
          

          if($role==='doner')
          {
           // header("Location: index.php?alrd");

     
          }
     }
   }



}}else{
header("Location: login.php?nsc");
}


require_once("profile-menu.php");

?>

<!-- Main Page -->
<div class="container-fluid ">
<div class="container p-3">
    <div class="row">
   <div class="col-lg-6 col-md-10  col-center ">

  
    <form  class="shadow text-dark bg-white" action="passchange-helper.php" method="post" class="bg-light" enctype="multipart/form-data">
      <h2 class="pt-3 text-center">Change Passwor</h2>
      <hr>
      
         
        <div class="container">

        <label for="cpass"><b>Current Password</b></label>
        <input type="password" name="cpass"  placeholder="Current Password"  required>

        <label for="npass"><b>Enter New password</b></label>
        <input type="password" name="npass" placeholder="Enter New Password"  required>

        <label for="conpass"><b>Confirm Password</b></label>
        <input type="password" name="conpass"  placeholder="Confirm Password"  required>

          <button class="btn bg-warning font-weight-bold" type="submit">Change Password</button>
        
        </div>
      
    
      </form>
    </div>

</div>
</div>
</div>




<?php require_once("footer.php"); ?>