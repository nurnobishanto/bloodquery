<?php 
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
                       
                    ?>
                      <div id="mySidenav" class="sidenav">
                      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                      <?php if($role==='member'){
                        ?>
                         <a href="my-profile-setup.php"><?php echo "Setup Profile"; ?></a>

                        <?php
                      }else{?>
                     
                      <a href="my-profile.php">Dashboard</a>
                      <a href="my-profile-update.php">Update Profile</a>
                      <a href="my-profile-adr.php">Add Dooner</a>
                      <a href="my-profile-dl.php">Dooner List</a>
                      <a href="my-profile-br.php">Blood request</a> 
                      <a href="my-profile-brl.php">Blood request List</a> <?php } ?>
                      <a href="my-profile-cp.php">Change Password</a>
                      <a href="logout.php">Logout</a>
                    </div>
                    
                    <div class="bg-dark" id="main">
                      
                      <span style="font-size:20px;cursor:pointer; color: white;" onclick="openNav()">&#9776; More Menu</span>
                      <?php
                      if(isset($_REQUEST['success'])){
                        echo '<span class="text-success font-weight-bold">Success</span>';
                      }else if(isset($_REQUEST['donerexist']))
                      {
                        echo '<span class="text-danger font-weight-bold">Dooner Already Exist !</span>';
                      }
                      else if(isset($_REQUEST['donordeleted']))
                      {
                        echo '<span class="text-danger font-weight-bold">Dooner  Deleted !</span>';
                      }
                      
                      ?>
                    </div>
                    <?php
                     }else{
                       header("Location: login.php");
                     }
    

             
  
                 }
                }
                  ?>


