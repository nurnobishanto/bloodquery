<?php

 //session_start();
require_once("connect.php"); 
require_once("customize.php");
 
  
 
 
 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Query | One Stop Blood Searching Free Platform</title>
    <link rel="shortcut icon" href="IMG/favicon.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
    <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>





  

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    
    <link rel="stylesheet" href="CSS/style.css">

    <script language="JavaScript" type="text/javascript">
$(document).ready(function(){
    $("a.delete").click(function(e){
        if(!confirm('Are you sure?')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});


</script>
</head>
<body>
<?php 

if(isset($_REQUEST['action'])){
  ?>
<div class="container">
  <div class="alert alert-info alert-dismissible mb-0">
  <strong><?php echo $_REQUEST['action'] ?> !</strong> <?php echo $_REQUEST['msg'] ?>
 <span type="button" class="close" data-dismiss="alert">x</span>
  </div>
    
    
  </div>
</div>

  <?php
}?>


    <!--Header Area-->

  <div class="container-fluid  bg-<?php echo $header_bg ;?>">

    <div class="container ">
        <nav class="navbar navbar-expand-md  navbar-<?php echo $header_bg ;?>">
            <a class="navbar-brand font-weight-bold text-<?php echo $site_name_color ;?>" href="index.php"><?php echo $site_name ;?></a>

            <button class="navbar-toggler col-2" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
              <ul class="navbar-nav ">
                <li class="nav-item sm-border-none">
                  <a class="nav-link text-<?php echo $header_text_color ;?>" href="index.php">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-<?php echo $header_text_color ;?>" href="blood-request-post.php">Blood Request Post</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-<?php echo $header_text_color ;?>" href="doner.php">Doner</a>
                  </li>
              
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
                       
                        while($getRow = mysqli_fetch_array($status))
                        {
                           
                             $role = $getRow['role'];
                             

                             if($role==='member')
                             {
                               ?>
                              <li class="nav-item">
                              <a class="nav-link text-white" href="become-donor.php">Become a Doner</a>
          
                            </li>
                            <?php
                             }
                        }
                      }
    

                ?>
                  <li class="nav-item"><a class="nav-link text-<?php echo $header_text_color ;?>" href="my-profile.php">Profile</a> </li>
          

                <?php
  
                 }}else{
                  ?>
                    <li class="nav-item">
                              <a class="nav-link text-<?php echo $header_text_color ;?>" href="become-donor.php">Become a Doner</a>
          
                            </li>
                 <li class="nav-item">
                    <a class="nav-link text-<?php echo $header_text_color ;?>" href="login.php">Login</a>
                  </li>
                 
                  <li class="nav-item">
                    <a class="nav-link text-<?php echo $header_text_color ;?>" href="registration.php">Registration</a>
                  </li>

                <?php

                 }
                 
                 ?>
                  
              
                  <li class="nav-item">
                    <a class="nav-link text-<?php echo $header_text_color ;?>" href="contact.php">Contact</a>
                  </li>
              </ul>
            </div>  
          </nav>
        </div>
        </div>


    <!-- Header End -->

    