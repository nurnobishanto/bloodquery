<?php require_once("header.php");
 $cookie_name="bquidns";
 if(isset($_COOKIE[$cookie_name])) {
  $logincheck = "SELECT * FROM Users WHERE authID='$_COOKIE[$cookie_name]'";
  $runlogCheck= mysqli_query($connect,$logincheck);
  $logcheckCount= mysqli_num_rows( $runlogCheck);
  if($logcheckCount===1)
  {
    header("Location: index.php");
  }
  
}

?>
<div class="container-fluid ">
<div class="container p-3">
    <div class="row">
   <div class="col-lg-4 col-md-6 col-sm-12 ">

  
    <form class="shadow " action="forget-password-helper.php" method="post" class="bg-light">
      <h3 class="pt-3 pb-3 text-center">Forget Password</h3>
       
      
        <div class="container">
          <label for="email"><b>Email Address</b></label>
          <input type="email" placeholder="Enter Email Address" name="email" required>
   
              
          <button class="btn text-light bg-danger"  type="submit">Reset password</button>
        
        </div>
       </form>
        <div class="container" style="background-color:#f1f1f1">
          <button type="button" class="bg-warning btn text-dark" onclick="goLoginPage()">Login</button>
          <span class="psw">Create a <a href="registration.php">new Account.</a></span>
        </div>
     
    </div>

</div>
</div>
</div>

<?php require_once("footer.php"); ?>