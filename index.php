<?php require_once("header.php"); ?>

<img src="images/s1.jpg" alt="Header Image" width="100%">





















   <div class="container-fluid p-0">



   
          <div class="container bg-danger text-white" >


          <div class="row">
            <div class="col-lg-12">
                <h2 class="text-light p-2 pt-3 pb-3 ">
                   Online Blood Query Management System
                </h2>
                <hr class="bg-light">
            </div>
            		 <div class="col-md-4">
                <div class=" bg-light">
                    <div class="bg-success p-2">
                        <h6><i class="fa fa-fw fa-user"></i> Donor Registration</h6>
                    </div>
                    <div class="text-dark p-2 text-justify">
                        <p>Have you at anytime witnessed a relative of yours or a close friend searching frantically for a blood donor, when blood banks say out of stock, the donors in mind are out of reach and the time keeps ticking?This thought laid our foundation. </p>
                        <a href="registration.php" class="btn btn-primary">View More</a>
                    </div>
                </div>
            </div>
			 <div class="col-md-4">
                <div class="bg-light">
                    <div class="bg-success p-2">
                        <h6><i class="fa fa-fw fa-medkit"></i> Need Blood</h6>
                    </div>
                    <div class="text-dark p-2 text-justify">
                        <p>Every 2 seconds someone needs blood. Your blood helps more than one life at a time. Accident victims, premature babies, patients undergoing major surgeries require whole blood, where your blood after testing is used directly.  </p>
                        <a href="blood-request-post.php" class="btn btn-primary">View More</a>
                    </div>
                </div>
            </div>
			 
			  <div class="col-md-4">
                <div class="bg-light">
                    <div class="bg-success p-2">
                        <h6><i class="fa fa-fw fa-search"></i> Search Donor</h6>
                    </div>
                    <div class="text-dark p-2 text-justify">
                        <p>Some people who have serious injuries they need blood transfusions to replace blood lost during the injury.Regular blood donors ensure that a safe and plentiful supply of blood is available whenever and wherever it is needed. Be Smile :)</p>
                        <a href="doner.php" class="btn btn-primary">View More</a>
                    </div>
                </div>
            </div>
			 
        </div>

              <?php require_once("query-field.php"); ?>
          </div>

          <div class="container-fluid">
            
            <div class="container">
              <h2 class="mt-5">Emergency blood Requested</h2>
              <hr>
              <div class="row ">

<?php

       $sql="SELECT * FROM blood_req_post ORDER BY brid DESC";
       $runSql=mysqli_query($connect,$sql);
       while($getdata=mysqli_fetch_array($runSql)){
         

        ?>
                  <div class="col-lg-3 col-md-4 col-sm-6">
                  <div class="mr-1 blood-request-card p-1 mb-3">
                    <div class="imgcontainer mt-0 p-2 bg-danger text-light">
                    <h5>EMERGENCY</h5><h3><?php echo $getdata['bgroup']; ?></h3> <h5>BLOOD NEED</h5>
                      <!-- <img src="IMG/avatar.png" alt="Avatar" class="avatar"> -->
                    </div>
                    <h5 class="text-center text-danger"><?php echo $getdata['title']; ?></h5>
                    <p class="text-center text-secondary">Post Date: <i class="far fa-check-circle"></i>  <?php echo $getdata['today']; ?></p>

                    <ul class="list-group">
                      <li class="list-group-item"><i class="fas fa-tint text-danger"></i> Blood Group : <b><?php echo $getdata['bgroup']; ?></b></li>
                      <li class="list-group-item"><i class="fas fa-hand-holding-water text-danger"></i></i> Unit/Bag (S): <b><?php echo $getdata['bunit']; ?></b></li>
                      <li class="list-group-item"><i class="far fa-calendar-check text-danger"></i>  <?php echo $getdata['wnb']; ?></li>
                      <li class="list-group-item"><a href="tel:<?php echo $getdata['phone']; ?>"><i class="fas fa-phone-alt text-danger"></i> <?php echo $getdata['phone']; ?></a></li>
                    </ul>
                    <a href="blood-request.php?brid=<?php echo $getdata['brid']; ?>"> <button class="btn bg-info p-1 text-light font-weight-bold">See Deatils <i class="fas fa-eye"></i> </button></a>
                   
                  </div>
                </div>

        <?php
       }


?>


              </div>
              

                 <!-- Call to Action Section -->
        
            <div class="row bg-warning p-3 mb-2">
                <div class="col-md-8 font-weight-bold">
                    <p>We expect your loyal feedback to improve our standard.For more details and any subject related queries..</p>
                </div>
                <div class="col-md-4 ">
                    <a class="btn btn-primary btn-block " href="contact.php"><i class="fa fa-phone"></i> Call to Action</a>
                </div>
            </div>
        
              </div>
</div>
      
       
       <?php 


       
       
       require_once("footer.php"); 
       
       
       ?>