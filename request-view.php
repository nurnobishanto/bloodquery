<?php require_once("header.php"); 
require_once("profile-menu.php"); 


if(isset($_REQUEST['brid'])){
    $brid=$_REQUEST['brid'];
    $sql="SELECT * FROM blood_req_post where brid='$brid'";
    $run=mysqli_query($connect,$sql);
    $count=mysqli_num_rows($run);
    if($count===0){
        header("Location: index.php");
    }
    while($getdata=mysqli_fetch_array($run)){
        $bgroup= $getdata['bgroup'];
        $title =$getdata['title'];
        $bunit=$getdata['bunit'];
        $pname=$getdata['pname'];
        $page=$getdata['page'];
        $purpose=$getdata['purpose'];
        $email=$getdata['email'];
        $phone=$getdata['phone'];
        $wnb=$getdata['wnb'];
        $gender=$getdata['gender'];
        $hname=$getdata['hname'];
        $addr=$getdata['addr'];
        $city=$getdata['city'];
        $zip=$getdata['zip'];
        $details=$getdata['detail'];
        $postdate=$getdata['today'];
        $pid=$getdata['puid'];

        

        ?>
        <div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-12">
  
    <div class="shadow imgcontainer mt-0 p-2 bg-danger text-light mt-5">
                    <h5>EMERGENCY</h5><h3><?php echo   $bgroup ?></h3> <h5>BLOOD NEED</h5>
                      <!-- <img src="IMG/avatar.png" alt="Avatar" class="avatar"> -->
                    </div>
    
      

    </div>
    <div class=" shadow p-3 col-lg-6 col-md-12 mt-lg-5 border mb-lg-5">
    <h3 class="p-2 text-danger font-weight-bold">Emergency Blood Request </h3>
    <hr>
      <div class="row ">
        <div class="col-4  "> <b>Title</b> </div>
        <div class="col-8 "><p><?php echo  $title ?></p> </div>
      </div>
      <div class="row border-top">
        <div class="col-4 "> <b>Blood group</b> </div>
        <div class="col-8 "><p><?php echo  $bgroup ?></p> </div>
      </div>
      <div class="row border-top">
        <div class="col-4 "> <b>Blood Unit/Bag</b> </div>
        <div class="col-8 "><p><?php echo  $bunit ?></p> </div>
      </div>
      <div class="row border-top">
        <div class="col-4 "> <b>Pateint Name </b> </div>
        <div class="col-8 "><p><?php echo   $pname ?></p> </div>
      </div>
      <div class="row border-top">
        <div class="col-4 "> <b>Age</b> </div>
        <div class="col-8 "><p><?php echo    $page ?> years</p> </div>
      </div>
      <div class="row border-top">
        <div class="col-4 "> <b>Gender</b> </div>
        <div class="col-8 "><p><?php echo    $gender ?></p> </div>
      </div>
      <div class="row border-top">
        <div class="col-4 "> <b>Purpose</b> </div>
        <div class="col-8 "><p><?php echo    $purpose ?></p> </div>
      </div>
      <div class="row border-top">
        <div class="col-4 "> <b>Email</b> </div>
        <div class="col-8 "><p><?php echo    $email ?></p> </div>
      </div>
      <div class="row border-top">
        <div class="col-4 "> <b>Phone Number</b> </div>
        <div class="col-8 "><p><?php echo    $phone ?></p> </div>
      </div>
      <div class="row border-top">
        <div class="col-4 "> <b>When Need ?</b> </div>
        <div class="col-8 "><p><?php echo    $wnb ?></p> </div>
      </div>
      <div class="row border-top">
        <div class="col-4 "> <b>Hospital</b> </div>
        <div class="col-8 "><p><?php echo    $hname ?></p> </div>
      </div>
      <div class="row border-top">
        <div class="col-4 "> <b>Address</b> </div>
        <div class="col-8 "><p><?php echo    $addr ?></p> </div>
      </div>
      <div class="row border-top">
        <div class="col-4 "> <b>City</b> </div>
        <div class="col-8 "><p><?php echo    $city ?></p> </div>
      </div>
      <div class="row border-top">
        <div class="col-4 "> <b>Zip</b> </div>
        <div class="col-8 "><p><?php echo    $zip ?></p> </div>
      </div>
      <div class="row border-top">
      <?php   
  
      
      ?>
        <div class="col-4 "> <b>Request Publisher</b> </div>
        <div class="col-8 "><p><a href="profile.php?did=
        <?php 
        $sql3= "SELECT did FROM doners WHERE uid ='$pid'";
        $run3=mysqli_query($connect, $sql3);
        while($getname3=mysqli_fetch_array($run3)){
          echo  $name3 =$getname3['did'];
         
       }

        ?>"><?php
        
        $sql2= "SELECT * FROM users WHERE uid='$pid'";
        $run2=mysqli_query($connect, $sql2);
        while($getname=mysqli_fetch_array($run2)){
         echo  $name1 =$getname['Fname'];
         echo " ";
         echo $name2 =$getname['Lname'];
      }
        
        
        ?></a></p> </div>
      </div>
      <div class="row border-top">
        <div class="col-4 "> <b>Post Date</b> </div>
        <div class="col-8 "><p><?php echo    $postdate ?></p> </div>
      </div>
      <div class="row border-top">
        <div class="col-4 "> <b>Details</b> </div>
        <div class="col-8 "><p><?php echo    $details ?></p> </div>
      </div>
      
    </div>



    <div class="col-2">
      
    </div>
  </div>
</div>


        <?php
    }

  
}else{
    header("Location: index.php");
}



?>

<!-- Main Page -->




      <?php require_once("footer.php"); ?>