<?php require_once("header.php"); ?>
   <div class="container-fluid p-0">
   

   
          <div class="container bg-danger text-white" >


          <?php require_once("query-field.php"); ?>
          </div>

          <div class="container-fluid">
            
            <div class="container">
            <div class="row">

              <div class="col-md-6">
                <h3 class="mt-5">Dooner List</h3>
              </div>
              
              <div class="col-md-6 ">
                <h3 class="mt-5 text-right"><a class="btn bg-info text-light font-weight-bold" href="donor-table.php">Dooner Table</a> </h3>
              </div>
              
            </div>
            
            
              <hr>
              <div class="row ">
                
     
              <?php

$sql="SELECT * FROM doners ORDER BY did DESC";
$runSql=mysqli_query($connect,$sql);
while($getdata=mysqli_fetch_array($runSql)){
  

 ?>
           <div class="col-lg-3 col-md-4 col-sm-6">
           <div class="mr-1 blood-request-card p-1 mb-3">
             <div class="imgcontainer mt-0">
               <img  src="avator/<?php echo $getdata['profile']; ?>" alt="Avatar" class="avatar">
             </div>
             <h5 class="text-center text-danger"><?php echo $getdata['fullname']; ?></h5>
             <ul class="list-group">
               <li class="list-group-item"><i class="fas fa-tint text-danger"></i> Blood Group : <b><?php echo $getdata['bgroup']; ?></b></li>
               <li class="list-group-item"><i class="fas fa-birthday-cake text-info"></i></i></i>  <b><?php  
             echo $getdata['dob'] ;
             echo " , (";
             $_aged = floor((time() - strtotime($getdata['dob'])) / 86400);
             echo   floor($_aged/365);
             echo " years )"; ?></b>
          
          </li>
               
               <?php
               if($getdata['ability']=='Available') {
                 ?>
                    <li class="list-group-item text-success font-weight-bold"><i class="fas fa-check-square"></i> </i> Available</li>
                 <?php

               }else{
                 ?>
                        <li class="list-group-item text-danger font-weight-bold"><i class="fas fa-window-close"></i> </i> Unavailable</li>
                 <?php

               }

               ?>
               
               <li class="list-group-item"><a href="tel:<?php echo $getdata['phone']; ?>"><i class="fas fa-phone-alt text-danger"></i> <?php echo $getdata['phone']; ?></a></li>
               <li class="list-group-item"><i class="fas fa-street-view text-success"></i>  <?php echo $getdata['addr']; ?> , <?php echo $getdata['city']; ?> , <?php echo $getdata['zip']; ?></li>
             </ul>
             <a href="profile.php?did=<?php echo $getdata['did']; ?>"> <button class="bg-info p-1 ">See Profile <i class="fas fa-eye"></i> </button></a>
            
           </div>
         </div>

 <?php
}


?>
 </div>
            </div>
          </div>
       <?php require_once("footer.php"); ?>