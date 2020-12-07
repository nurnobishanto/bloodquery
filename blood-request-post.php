<?php require_once("header.php") ;

 $cookie_name="bquidns";
 if(!isset($_COOKIE[$cookie_name])) {
  
     header("Location: login.php?action=Please Login First&msg");

  
}

?>

<div class="container-fluid ">
<div class="container p-3">
    <div class="row">
   <div class="col-lg-8 col-md-10  col-center">

  
    <form class="shadow bg-white" action="brp-helper.php" method="post" class="bg-light">
      <h3 class="pt-3 text-center">Submit Your Request</h3>
      <p class="text-center  pb-3">Please fill the following information to post your blood request.</p>
       <hr>  
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <label for="title"><b>Request Title</b></label>
          <input type="text" placeholder="Request Title" name="title" required>
                </div>
                <div class="col-md-4">
                <label for="bunit"><b>Blood Unit / Bag (S)</b></label>
          <input type="number" placeholder="Blood Unit / Bag (S)" name="bunit" required>
                </div>
            </div>
          

          <div class="row">
               <div class="col-md-8">     
                   <label for="pname"><b>Pateint Name</b></label>
                   <input type="text" placeholder="Pateint Name" name="pname" required>
                </div>
                <div class="col-md-4">
                    <label for="page"><b>Pateint Age</b></label>
                    <input type="number" placeholder="Pateint Age" name="page" required> 
                
                 
                </div>
            </div>
            <div class="row">
               <div class="col-md-8">     
                   <label for="Purpose"><b>Purpose</b></label>
                   <input type="text" placeholder="Purpose" name="purpose" required>
               </div>
               <div class="col-md-4">
                   <label for="bgroup"><b>Blood Group </b></label> 
                   
                   <select name="bgroup" id="bgroup" >
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
                   <?php if(isset($_REQUEST['bnone']))
                   {?>
                    <span class="text-danger"> <?php  echo "Please Selecte blood group !"; ?></span>
                    <?php
                   }?>
                   
                </div>
             </div>
             <div class="row">
                 <div class="col-md-6">     
                    <label for="email"><b>Email for Contact </b></label> 
                    <input type="email" placeholder="Enter Email Address" name="email" required>
                </div>
                <div class="col-md-6">
                    <label for="phone"><b>Mobile Number for Contact</b></label>
                    <input type="tel" placeholder="+880 170 0000000" name="phone" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="wnb"><b>When Need Blood ?</b></label>
                    <input type="date" placeholder="When Need Blood ?" name="wnb" required>     
                </div>
                <div class="col-md-6">
                    <label for="gender"><b>Gender</b></label>
                    <select name="gender" id="">
                     <option value="gnone">Select gender</option> 
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other's">Other's</option>
                    </select>
                    <?php if(isset($_REQUEST['gnone']))
                   {?>
                    <span class="text-danger"> <?php  echo "Please Selecte Gender !"; ?></span>
                    <?php
                   }?>
                   
        </div>

        </div>

        <label for="hname"><b>Hospital Name</b></label>
        <input type="text" placeholder="Hospital Name" name="hname" required>
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
        <label for="details"><b>Details (Optional)</b></label>
        <textarea name="details" id="" cols="30" rows="5" placeholder="Details..."></textarea>
            

          <button class="btn bg-info text-white font-weight-bold" type="submit">Post request for Blood</button>
        
        </div>
      
    
      </form>
    </div>

</div>
</div>
</div>





<?php require_once("footer.php") ?>