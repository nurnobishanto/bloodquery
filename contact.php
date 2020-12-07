<?php require_once("header.php") ?>
<div class="container-fluid ">
<div class="container ">
    <div class="row pt-5 pb-5">
   <div class="col-lg-6 col-md-6 col-sm-12 col-center">

  
    <form class="bg-muted shadow" action="contact-helper.php" method="post" class="bg-light">
      <h2 class="pt-3 text-center">Contact Form</h2>
      <hr>
        <div class="container">
          <label for="name"><b>Full Name</b></label>
          <input type="text" placeholder="Full name " name="name" required>
          <label for="phone"><b>Mobile Number</b></label>
          <input type="tel" placeholder="+880 17 000 0000" name="phone" required>
          <label for="email"><b>Email Address</b></label>
          <input type="email" placeholder="Enter Email Address" name="email" required>
          <label for="subj"><b>Subject</b></label>
          <input type="text" placeholder="Subject" name="subj" required>
          <label for="message"><b>Message</b></label>
          <textarea id="message" name="message" placeholder="Write something.." style="height:170px; width:100%;"></textarea>
          <input class="btn bg-success text-light mb-3" type="submit" value="Sendmessage">
          <?php if(isset($_REQUEST['success'])){
            ?>
            <span class="text-success"> <?php
            echo "Message sent Successfully "; ?> </span>

           <?php
          } ?>
   
            
        
        </div>
      </form>
    </div>

</div>
</div>
</div>

<?php require_once("footer.php"); ?>