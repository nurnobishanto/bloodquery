<?php require_once("header.php"); 



if(isset($_REQUEST['did'])){
    $did=$_REQUEST['did'];

    $sql="SELECT * FROM doners where did='$did'";

    $run=mysqli_query($connect,$sql);

    $count=mysqli_num_rows($run);


    if($count===0){
        header("Location: doner.php");
    }
    
    while($getdata=mysqli_fetch_array($run)){
        // $bgroup= $getdata['bgroup'];
        // $title =$getdata['title'];
        // $bunit=$getdata['bunit'];
        // $pname=$getdata['pname'];
        // $page=$getdata['page'];
        // $purpose=$getdata['purpose'];
        // $email=$getdata['email'];
        // $phone=$getdata['phone'];
        // $wnb=$getdata['wnb'];
        // $gender=$getdata['gender'];
        // $hname=$getdata['hname'];
        // $addr=$getdata['addr'];
        // $city=$getdata['city'];
        // $zip=$getdata['zip'];
        // $details=$getdata['detail'];
        // $postdate=$getdata['today'];
        // $pid=$getdata['puid'];

        

        ?>
        <div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-12 ">
    <div class="imgcontainer mt-0 mt-5 shadow pb-3 pt-3">
    <h3 class="p-3">Profile Details</h3>
  <hr>
               <img  src="avator/<?php echo $getdata['profile']; ?>" alt="Avatar" class="avatar">
               <hr>
         <h2 class="text-danger text-center bg-muted p-3 "><?php echo $getdata['bgroup']; ?></h2>      
    </div>
    
    
      

    </div>
    <div class="col-lg-6 col-md-12 mt-lg-5 border mb-lg-5 shadow p-3">
      <div class="row ">
        <div class="col-4  "> <b>Full Name</b> </div>
        <div class="col-8 "><p><?php echo $getdata['fullname']; ?></p> </div>
      </div>
      <div class="row border-top">
        <div class="col-4 "> <b>Blood group</b> </div>
        <div class="col-8 "><p><?php echo $getdata['bgroup']; ?></p> </div>
      </div>
    
     
      <div class="row border-top">
        <div class="col-4 "> <b>Age</b> </div>
        <div class="col-8 "><p><?php echo $getdata['dob']; ?> years</p> </div>
      </div>
      <div class="row border-top">
        <div class="col-4 "> <b>Gender</b> </div>
        <div class="col-8 "><p><?php echo $getdata['gender']; ?></p> </div>
      </div>
      <div class="row border-top">
        <div class="col-4 "> <b>Date of Birth</b> </div>
        <div class="col-8 "><p><?php echo $getdata['dob']; ?></p> </div>
      </div>
      <div class="row border-top">
        <div class="col-4 "> <b>Email</b> </div>
        <div class="col-8 "><p><?php echo $getdata['email']; ?></p> </div>
      </div>
      <div class="row border-top">
        <div class="col-4 "> <b>Phone Number</b> </div>
        <div class="col-8 "><p><?php echo $getdata['phone']; ?></p> </div>
      </div>
      <div class="row border-top">
        <div class="col-4 "> <b>Ability</b> </div>
        <div class="col-8 "><p><?php echo $getdata['ability']; ?></p> </div>
      </div>
      <div class="row border-top">
        <div class="col-4 "> <b>Last Donate</b> </div>
        <div class="col-8 "><p><?php echo $getdata['ld']; ?></p> </div>
      </div>
      <div class="row border-top">
        <div class="col-4 "> <b>Address</b> </div>
        <div class="col-8 "><p><?php echo $getdata['addr']; ?></p> </div>
      </div>
      <div class="row border-top">
        <div class="col-4 "> <b>City</b> </div>
        <div class="col-8 "><p><?php echo $getdata['city']; ?></p> </div>
      </div>
      <div class="row border-top">
        <div class="col-4 "> <b>Zip</b> </div>
        <div class="col-8 "><p><?php echo $getdata['zip']; ?></p> </div>
      </div>
      <div class="row border-top">
      <?php   
  
      
      ?>
        <div class="col-4 "> <b>Added by</b> </div>
        <div class="col-8 "><a href="#"><?php
        $reffer=$getdata['reffer'];
        if($reffer==='self'){
           // echo  $name =$getname['fullname'];
           echo "Self Registered";
        }else{
        $sql2= "SELECT * FROM doners WHERE uid='$reffer'";
        $run2=mysqli_query($connect, $sql2);
        while($getname=mysqli_fetch_array($run2)){
        $name =$getname['fullname'] ;
         $nameid=$getname['did'];
    
         echo  '<a href="profile.php?did='.$nameid.'"><p>'.$name.'</p></a>';
         
        }
        
     
      }
        
        
        ?></a></div>
      </div>
      <div class="row border-top">
        <div class="col-4 "> <b>Facebook</b> </div>
        <div class="col-8 "><p><a href="<?php echo $getdata['fb']; ?>"><?php echo $getdata['fb']; ?></a></p> </div>
      </div>
      <div class="row border-top">
        <div class="col-4 "> <b>Details</b> </div>
        <div class="col-8 "><p><?php echo $getdata['details']; ?></p> </div>
      </div>
      
    </div>



    <div class="col-2">
      
    </div>
  </div>
</div>


        <?php
    }

  
}else{
    header("Location: doner.php");
}



?>

<!-- Main Page -->




      <?php require_once("footer.php"); ?>