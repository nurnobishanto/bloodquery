<?php
 require_once("header.php"); 

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
<div class="container-fluid">
<div class="container p-3">
    <div class="row">
   <div class="col-lg-4 col-md-6 col-sm-12 ">

  
    <form class="bg-muted shadow" action="login-helper.php" method="post" class="bg-light">
      <h3 class="pt-3 text-center">Login User</h3>
      <hr>
   
      
        <div class="container">
          <label for="email">Email Address</label>
          <input type="email" placeholder="Enter Email Address" name="email" required>
      
          <label for="psw">Password</label>
          <input type="password" placeholder="Enter Password" name="psw" required>
              
          <button class="btn bg-warning font-weight-bold text-dark" type="submit">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>
        <?php if(isset($_REQUEST["wrong"]))
          {
            ?>
            <span class="text-danger pl-3 pr-3"> <?php  echo "Invalid Email or Password"; ?></span>
           
            <?php
          } ?> 
      
        <div class="container" style="background-color:#f1f1f1">
        <a href="registration.php"> <button type="button" class=" regbtn btn text-light">Registration</button></a>
         
          <span class="psw">Forgot <a href="forget-password.php">password?</a></span>
        </div>
      </form>
    </div>

</div>
</div>
</div>

<?php require_once("footer.php"); ?>