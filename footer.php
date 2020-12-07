 <?php

 require_once('connect.php');
 $apc= mysqli_num_rows(mysqli_query($connect,"SELECT * FROM doners WHERE bgroup='A+'"));
 $anc= mysqli_num_rows(mysqli_query($connect,"SELECT * FROM doners WHERE bgroup='A-'"));
 $bpc= mysqli_num_rows(mysqli_query($connect,"SELECT * FROM doners WHERE bgroup='B+'"));
 $bnc= mysqli_num_rows(mysqli_query($connect,"SELECT * FROM doners WHERE bgroup='B-'"));
 $opc= mysqli_num_rows(mysqli_query($connect,"SELECT * FROM doners WHERE bgroup='O+'"));
 $onc= mysqli_num_rows(mysqli_query($connect,"SELECT * FROM doners WHERE bgroup='O-'"));
 $abpc= mysqli_num_rows(mysqli_query($connect,"SELECT * FROM doners WHERE bgroup='AB+'"));
 $abnc= mysqli_num_rows(mysqli_query($connect,"SELECT * FROM doners WHERE bgroup='AB-'"));
 $tdc= mysqli_num_rows(mysqli_query($connect,"SELECT * FROM doners"));
 $malec= mysqli_num_rows(mysqli_query($connect,"SELECT * FROM doners WHERE gender='male'"));
 $femalec= mysqli_num_rows(mysqli_query($connect,"SELECT * FROM doners WHERE gender='female'"));

 $tuser= mysqli_num_rows(mysqli_query($connect,"SELECT * FROM users"));


?>

 <!-- Footer area start-->

  <div class="container-fluid badge-dark">
           <div class="container pt-3 pb-2">
             <div class="row">

               <div class="col-lg-3 col-md-4 col-sm-6">
                 <div class="m-2 footer-card">
                   <h4 class="text-center text-light">Total Dooner</h4>
                   <h4 class="text-center text-light"><?php echo $tdc;  ?></h4>
                 </div>
               </div>

               <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="m-2 footer-card">
                  <h4 class="text-center text-light">Male Dooner</h4>
                  <h4 class="text-center text-light"> <?php echo $malec;  ?></h4>
                </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="m-2 footer-card">
                  <h4 class="text-center text-light">Female Dooner</h4>
                  <h4 class="text-center text-light"> <?php echo $femalec;  ?></h4>
                </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="m-2 footer-card">
                  <h4 class="text-center text-light">Total User</h4>
                  <h4 class="text-center text-light"> <?php echo $tuser;  ?></h4>
                </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="m-2 footer-card">
                  <h4 class="text-center text-light">A+ Dooner</h4>
                  <h4 class="text-center text-light"> <?php echo $apc;  ?></h4>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="m-2 footer-card">
                  <h4 class="text-center text-light">B+ Dooner</h4>
                  <h4 class="text-center text-light"> <?php echo $bpc;  ?></h4>
                </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="m-2 footer-card">
                  <h4 class="text-center text-light">AB+ Dooner</h4>
                  <h4 class="text-center text-light"> <?php echo $abpc;  ?></h4>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="m-2 footer-card">
                  <h4 class="text-center text-light">O+ Dooner</h4>
                  <h4 class="text-center text-light"> <?php echo $opc;  ?></h4>
                </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="m-2 footer-card">
                  <h4 class="text-center text-light">A- Dooner</h4>
                  <h4 class="text-center text-light"> <?php echo $anc;  ?></h4>
                </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="m-2 footer-card">
                  <h4 class="text-center text-light">B- Dooner</h4>
                  <h4 class="text-center text-light"> <?php echo $bnc;  ?></h4>
                </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="m-2 footer-card">
                  <h4 class="text-center text-light">AB- Dooner</h4>
                  <h4 class="text-center text-light"> <?php echo $abnc;  ?></h4>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="m-2 footer-card">
                  <h4 class="text-center text-light">O- Dooner</h4>
                  <h4 class="text-center text-light"> <?php echo $onc;  ?></h4>
                </div>
              </div>





             </div>

           </div>
         </div>


        
         <div class="container-fluid badge-dark " style="background-color:black;">
             <div class="container">
               <div class="row pt-2">
                 <p class="col-10">  &copy; Copyright 2020 Blood Query  |   All Rights Reserrved   |   Powered by <a class="text-light" href="http://nurnobishanto.com">NurnobiShanto</a></p>
                 <p class="col-2"><a href="https://www.facebook.com/mdnurnobishanto/"><i class="fab fa-facebook-square"></i></a></p>
             </div>
            </div>
         </div>
          <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!--<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>-->

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>

         <script src="JS/index.js"></script>
         
         <script src="ajax.js"></script>



</body>
</html>