<?php
require_once("header.php"); ?>

<br>
<div class="container table-responsive">   
  <div class="card mb-3">
            <div class="card-header">
              <h5><i class="fas fa-table"> </i> Doner Table</h5></div>
 <div class="card-body">
  <div class="table-responsive">      
  <table class="table table-hover table-condensed table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th>SL</th>
        <th>Full Name</th>
        <th>Blood</th>
       <!-- <th>Email</th>-->
        <th>Phone</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Ability</th>
        <th>Address</th>  
        <th>Action</th>  
 
      </tr>
    </thead>
    <tbody>
       <?php

        $count =1;
        require_once('connect.php');
     $sql="SELECT * FROM doners";
     $sqlRun=mysqli_query($connect,$sql);
       
       if($sqlRun){
         while($getData=mysqli_fetch_array($sqlRun))
         {

           ?>

        <tr>
       
         <td><?php echo $count ;?></td>
        <td><a href="<?php echo $getData['fb'] ;?>"><?php echo $getData['fullname'] ;?></a></td>
        <td><?php echo $getData['bgroup'] ;?></td>
       <!-- <td><?php echo $getData['email'] ;?></td>-->
        <td><?php echo $getData['phone'] ;?></td>
        <td><?php 
      //  echo $getData['dob'] ;
        $_aged = floor((time() - strtotime($getData['dob'])) / 86400);
       echo   floor($_aged/365);//." yr ";
      // echo  floor(($_aged%365)/30)." m ";
      // echo  floor(($_aged%365)%30)." d ";
        
        
        
        
        ?></td>
        <td><?php echo $getData['gender'] ;?></td>
        <td><?php echo $getData['ability'] ;?></td>
        <td><?php echo $getData['addr'] ;?></td>   
        
        <td><a class="btn bg-success text-light font-weight-bold" href="profile-view.php?id=<?php echo $getData['did'] ;?>">View</a></td>
       
       

      </tr>

           <?php
           $count++;
         }
       } ?>
 
      
     
    </tbody>
  </table>
</div>
</div>
<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
</div>
</div>



<?php
require_once("footer.php");
?>