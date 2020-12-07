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

<div class="container-fluid ">
<div class="container p-3">
    <div class="row">
   <div class=" p-3 col-lg-5 col-md-6 col-sm-12 col-center">

  
    <form class="bg-white shadow" action="registration-helper.php" method="post" class="bg-light">
      <h3 class="pt-3 text-center">Registration</h3>
       <hr>
      
        <div class="container">
          <label for="fname"><b>First Name</b></label>
          <input type="text" placeholder="First Name" name="fname" required>
          <label for="lname"><b>Last Name</b></label>
          <input type="text" placeholder="Last Name" name="lname" required>
          <label for="email"><b>Email Address</b></label>
          <input type="email" placeholder="Enter Email Address" name="email" required>
          <label for="phone"><b>Mobile Number</b></label>
          <input type="tel" placeholder="+880 170 0000000" name="phone" required>
          <label for="epsw"><b>Enter New Password</b></label>
          <input type="password" placeholder="Enter Password" name="epsw" required>
          <label for="cpsw"><b>Confirm Password</b></label>
          <input type="password" placeholder="Confirm Password" name="cpsw" required>   
          <?php if(isset($_REQUEST["pswp"]))
          {
            ?>
            <span class="text-danger"> <?php  echo "Passwornd must be minimum 6 charecter and Maximum 12 charecter !"; ?></span>
           
            <?php
          } ?> 

          <?php if(isset($_REQUEST["pswn"]))
          {
            ?>
            <span class="text-danger"> <?php  echo "Confirm passwrd not match !"; ?></span>
           
            <?php
          } ?> 
              
            <?php if(isset($_REQUEST["pswa"]))
          {
            ?>
            <span class="text-danger"> <?php  echo "Already account created with this email"; ?></span>
           
            <?php
          } ?> 
              <?php if(isset($_REQUEST["success"]))
          {
            ?>
            <span class="text-success font-weight-bold"> <?php  echo "Account Created successfully"; ?></span>
           
            <?php
          } ?> 

          <button class="btn bg-success text-white" type="submit">Registration</button>
        
        </div>
      
        <div class="container" style="background-color:#f1f1f1">
        <a href="login.php"><button type="button" class="regbtn btn btn-success">Login</button></a>
          
          <span class="psw">Forget <a href="forget-password.php">Password</a></span>
        </div>
      </form>
    </div>

</div>
</div>
</div>

<?php require_once("footer.php") ?>