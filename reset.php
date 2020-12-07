<?php require_once("header.php");

if(isset($_REQUEST['authID']) && isset($_REQUEST['tokenID'])  ){
    $authId= $_REQUEST['authID'];
    $tokenId= $_REQUEST['tokenID'];

}else{
    $authId="";
    $tokenId="";
}




?>
<div class="container-fluid">
<div class="container p-3">
    <div class="row">
      <div class="col-lg-5 col-md-6 col-sm-12 col-center">

  
    <form class="shadow" action="reset-helper.php" method="post" class="bg-light">
      <h3 class="pt-3 pb-3 text-center">Setup New Password</h3>
        <hr>
      
        <div class="container">
          <label for="epsw"><b>Enter New Password</b></label>
          <input type="text" placeholder="Enter New Password" name="epsw" required>
          <label for="cpsw"><b>Confirm Password</b></label>
          <input type="text" placeholder="Confirm Password" name="cpsw" required>
          <input type="hidden" name="authId" value="<?php echo $authId ?>">    
          <input type="hidden" name="tokenID" value="<?php echo $tokenId ?>">    

          <?php if(isset($_REQUEST["pswn"]))
          {
            ?>
            <span class="text-danger"> <?php  echo "Confirm passwrd not match !"; ?></span>
           
            <?php
          } ?> 
          
          <?php if(isset($_REQUEST["pswp"]))
          {
            ?>
            <span class="text-danger"> <?php  echo "Passwornd must be minimum 6 charecter and Maximum 18 charecter !"; ?></span>
           
            <?php
          } ?> 
          <button class="btn text-light bg-success"  type="submit">Reset password</button>
        
        </div>
      
        <div class="container" style="background-color:#f1f1f1">
       <a class="btn bg-success" href="login.php">Login</a>
          <a class="btn bg-info" href="registration.php">Create a new Account.</a>
      </form>
    </div>

</div>
</div>
</div>

<?php require_once("footer.php"); ?>