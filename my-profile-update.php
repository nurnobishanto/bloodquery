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
          
          if($role==='member')
          {
           header("Location: my-profile-setup.php");

     
          }
     }
   }



}}else{
header("Location: login.php?nsc");
}


$checkSql= "SELECT * FROM doners WHERE uid='$uid'";
$runSQL=mysqli_query($connect,$checkSql);
while($getData=mysqli_fetch_array($runSQL)){
  $fullname=$getData['fullname'];
  $bgroup=$getData['bgroup'];
  $email=$getData['email'];
  $phone=$getData['phone'];
  $gender=$getData['gender'];
  $ability=$getData['ability'];
  $addr=$getData['addr'];
  $city=$getData['city'];
  $zip=$getData['zip'];
  $fb=$getData['fb'];
  $ld=$getData['ld'];
  $about=$getData['details'];
  $dob=$getData['dob'];
  $did = $getData['did'];
}

require_once("profile-menu.php");

?>

<!-- Main Page -->
<div class="container-fluid ">
<div class="container p-3">
    <div class="row">
   <div class=" -lg col-lg-8 col-md-10  col-center">

  
    <form class="bg-white shadow" action="bdupdate-helper.php" method="post" class="bg-light" enctype="multipart/form-data">
      <h3 class="pt-3 text-center">Profile Update</h3>
      <p class="text-center  p-1">Please fill the following information to Complete profile and become a dooner.</p>
         <hr>
        <div class="container">
 
          

          
            <div class="row">
               <div class="col-md-8">     
                   <label for="fullname"><b>Full Name</b></label>
                   <input type="text" name="fullname"  value="<?php echo $fullname; ?>" required>
               </div>
               <div class="col-md-4">
                   <label for="bgroup"><b>Blood Group </b></label> 
                   <select name="bgroup" id="bgroup">
                       <option class="bg-info" value="<?php echo $bgroup ?>"><?php echo $bgroup ?> (current)</option>
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
                    <input type="email" value="<?php echo $email ?>" name="email"  required>
                </div>
                <div class="col-md-6">
                    <label for="phone"><b>Mobile Number for Contact</b></label>
                    <input type="tel" value="<?php echo $phone ?>" name="phone" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="dob"><b>Date of Birth</b></label>
                    <input type="date" value="<?php echo $dob ?>" name="dob" required>     
                </div>
                <div class="col-md-6">
                    <label for="gender"><b>Gender</b></label>
                    <select name="gender">
                    <option class="bg-info" value="<?php echo $gender ?>"><?php echo $gender ?> (current)</option>
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
                   
                  
                </div>
                <div class="col-md-6">
                    <label for="ability"><b>Avility</b></label>
                    <select name="ability" id="">
                        <option value="<?php echo $ability ?>"><?php echo $ability ?> ( current) </option>
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
        <input type="text" value="<?php echo $addr ?>" name="addr" required>
        </div>

        <div class="col-md-4">
        <label for="city"><b>City</b></label>
        <input type="text" value="<?php echo $city ?>" name="city" required>
        </div>
        <div class="col-md-3">
        <label for="zip"><b>ZIP CODE</b></label>
        <input type="text" value="<?php echo $zip ?>" name="zip" required>
        </div>

        </div>
        <div class="row">
               <div class="col-md-6">     
                   <label for="fb"><b>Facebook profile url</b></label>
                   <input type="text" value="<?php echo $fb ?>" name="fb" >
               </div>
               <div class="col-md-6">     
                   <label for="ld"><b>Last Donate</b></label>
                   <input type="date" value="<?php echo $ld ?>"  name="ld" required>
               </div>
               </div>
        <label for="details"><b>About Dooner</b></label>
        <textarea name="details" value="<?php echo $about ?>" id="" cols="30" rows="5"><?php echo $about ?></textarea>
        <input type="hidden" name="did" value="<?php echo $did?>">
    
        
            

          <button class="btn bg-warning font-weight-bold text-dark" type="submit">Profile Update</button>
        
        </div>
      
    
      </form>
    </div>

</div>
</div>
</div>




<?php require_once("footer.php"); ?>