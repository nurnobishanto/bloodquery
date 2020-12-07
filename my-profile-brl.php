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
<br>
<div class="container table-responsive">   
  <div class="card mb-3">
            <div class="card-header">
              <h4><i class="fas fa-table"> </i> Your Blood Requested List</h4></div>
 <div class="card-body">
  <div class="table-responsive">      
  <table class="table table-hover table-condensed table-bordered " id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th>SL</th>
        <th>Title</th>
        <th>Blood</th>
        <th>Phone</th>
        <th>Age</th>
        <th>Post date</th>
        <th>When Need?</th>  
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
       <?php

        $count =1;
        require_once('connect.php');
     $sql="SELECT * FROM blood_req_post WHERE puid='$uid'";
     $sqlRun=mysqli_query($connect,$sql);
       
       if($sqlRun){
         while($getData=mysqli_fetch_array($sqlRun))
         {

           ?>

        <tr>
       
         <td><?php echo $count ;?></td>
        <td><?php echo $getData['title'] ;?></td>
        <td><?php echo $getData['bgroup'] ;?></td>
       <!-- <td><?php echo $getData['email'] ;?></td>-->
        <td><?php echo $getData['phone'] ;?></td>
        <td><?php 
       echo $getData['page'] ;
      //  $_aged = floor((time() - strtotime($getData['dob'])) / 86400);
     //  echo   floor($_aged/365);//." yr ";
      // echo  floor(($_aged%365)/30)." m ";
      // echo  floor(($_aged%365)%30)." d ";
        
        
        
        
        ?></td>
        <td><?php echo $getData['today'] ;?></td>
        <td><?php echo $getData['wnb'] ;?></td>
       
        
        <td><a class=" btn bg-success text-light p-1 m-1" href="request-view.php?brid=<?php echo $getData['brid'] ;?>">View</a><a class=" btn delete m-1 p-1 bg-danger text-light" href="bloodr-delete.php?id=<?php echo $getData['brid'] ;?>">Delete</a></td>
       
       

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
<?php require_once("footer.php"); ?>