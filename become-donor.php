<?php require_once("header.php") ;

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
                header("Location: index.php?alrd");

         
              }
         }
       }



  }}else{
    header("Location: login.php?nsc");
  }

?>

<div class="container-fluid">
<div class="container p-3">
    <div class="row">
   <div class="col-lg-8 col-md-10  col-center">

  
    <form class="shadow" action="bdoner-helper.php" method="post" class="bg-light" enctype="multipart/form-data">
      <h3 class="pt-3 text-center">Become a Doner</h3>
      <p class="text-center  pb-2">Please fill the following information to Complete profile and become a dooner.</p>
         <hr>
        <div class="container">
 
          

          
            <div class="row">
               <div class="col-md-8">     
                   <label for="fullname"><b>Full Name</b></label>
                   <input type="text" name="fullname" value="<?php echo $fname." ".$lname ?>" required>
               </div>
               <div class="col-md-4">
                   <label for="bgroup"><b>Blood Group </b></label> 
                   <select name="bgroup" id="bgroup">
                       <option value="bnone">Select Blood Group</option>
                       <option value="A+">A+</option>
                       <option value="B+">B+</option>
                       <option value="AB+">AB+</option>
                       <option value="O+">O+</option>
                       <option value="A-">A-</option>
                       <option value="B-">B-</option>
                       <option value="AB-">AB-</option>
                       <option value="O-">O-</option>

                   </select>
                   <?php if(isset($_REQUEST['bnone'])){
                        ?>
                        <span class="text-danger"><?php echo "Please Select Blood group"; ?></span>

                   <?php } ?>
                   
                </div>
             </div>
             <div class="row">
                 <div class="col-md-6">     
                    <label for="email"><b>Email for Contact </b></label> 
                    <input type="email" placeholder="Enter Email Address" name="email" value="<?php echo $email ?>" required>
                </div>
                <div class="col-md-6">
                    <label for="phone"><b>Mobile Number for Contact</b></label>
                    <input type="tel" placeholder="+880 170 0000000" name="phone" value="<?php echo $phone?>" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="dob"><b>Date of Birth</b></label>
                    <input type="date" placeholder="When Need Blood ?" name="dob" required>     
                </div>
                <div class="col-md-6">
                    <label for="gender"><b>Gender</b></label>
                    <select name="gender">
                    <option value="gnone">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other's">Other's</option>
                    </select>
                    <?php if(isset($_REQUEST['gnone'])){
                        ?>
                        <span class="text-danger"><?php echo "Please Select Gender !"; ?></span>

                   <?php } ?>
        </div>

        </div>
        <div class="row">
                <div class="col-md-6">
                    <label for="profile"><b>Profile Picture</b></label>
                    <input type="file" placeholder="Select Profile Picture" name="profile" required>     
                </div>
                <div class="col-md-6">
                    <label for="ability"><b>Avility</b></label>
                    <select name="ability" id="">
                        <option value="anone">Select Ability</option>
                        <option value="Available">Available</option>
                        <option value="Unavailable">Unavailable</option>
                    </select>
                    <?php if(isset($_REQUEST['anone'])){
                        ?>
                        <span class="text-danger"><?php echo "Please Select Ability !"; ?></span>

                   <?php } ?>
        </div>

        </div>
        <div class="row">

        <div class="col-md-5">     
        <label for="addr"><b>Address</b></label> 
        <input type="text" placeholder="Address" name="addr" required>
        </div>

        <div class="col-md-4">
        <label for="city"><b>City</b></label>
        <input type="text" placeholder="City" name="city" required>
        </div>
        <div class="col-md-3">
        <label for="zip"><b>ZIP CODE</b></label>
        <input type="text" placeholder="ZIP" name="zip" required>
        </div>

        </div>
        <div class="row">
               <div class="col-md-6">     
                   <label for="fb"><b>Facebook profile url</b></label>
                   <input type="text" placeholder="https://fb.com/username" name="fb" >
               </div>
               <div class="col-md-6">     
                   <label for="ld"><b>Last Donate</b></label>
                   <input type="date"  name="ld" required>
               </div>
               </div>
        <label for="details"><b>About Dooner</b></label>
        <textarea name="details" id="" cols="30" rows="5"></textarea>
        <input type="hidden" name="uid" value="<?php echo $uid?>">
        <input type="hidden" name="reffer" value="self">
            

          <button class="btn bg-success text-light font-weight-bold" type="submit">Submit</button>
        
        </div>
      
    
      </form>
    </div>

</div>
</div>
</div>





<?php require_once("footer.php") ?>