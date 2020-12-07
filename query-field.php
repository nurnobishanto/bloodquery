<?php 
require_once('connect.php');


?>

<form action="query.php" method="post" class="query-form">
                  <div class="row p-4">
                    <h3 class="text-center text-light font-italic col-12">~ Blood Query ~</h3>
                    <div class="col-lg-3 col-md-4 col-sm-12 lg-mr-5 sm-mt-2">
                        <label for="bgroup">Select Blood Group</label>  
                <select  class="form-control"  name="bgroup" id="bgroup">
                    <option value=" 1 ">Select Blood Group</option>
                    <?php 
                        $sqlbg = "SELECT DISTINCT bgroup FROM doners ORDER BY bgroup asc";
                        $sqlbgrun= mysqli_query($connect,$sqlbg);
                        while($getbg = mysqli_fetch_array($sqlbgrun)){
                           ?>
                              <option value="bgroup='<?php echo $getbg['bgroup']; ?>'" > <?php echo $getbg['bgroup']; ?></option>
                           <?php
                        }
                    ?>
                   
                  </select>
                    </div>
                  <div class="col-lg-3 col-md-4 col-sm-12 lg-mr-5 sm-mt-2">
                    <label for="city">Select City</label>    
                <select  class="form-control " name="city" id="city">
                    <option value="">Select City</option>
                    <?php 
                        $sqlbg = "SELECT DISTINCT city FROM doners ORDER BY city asc";
                        $sqlbgrun= mysqli_query($connect,$sqlbg);
                        while($getbg = mysqli_fetch_array($sqlbgrun)){
                           ?>
                              <option value=" AND city='<?php echo $getbg['city']; ?>'" > <?php echo $getbg['city']; ?></option>
                           <?php
                        }
                    ?>
                
                  </select>
                  </div>
           
                  <div class="col-lg-3 col-md-4 col-sm-12 lg-mr-5 sm-mt-2">
                    <label for="ability">Select Ability</label>         
                <select  class="form-control" name="ability" id="ability">
                    <option value="">Select Ability</option>
                    <option value="">All </option>
                    <?php 
                        $sqlbg = "SELECT DISTINCT ability FROM doners ORDER BY ability asc";
                        $sqlbgrun= mysqli_query($connect,$sqlbg);
                        while($getbg = mysqli_fetch_array($sqlbgrun)){
                           ?>
                              <option value=" AND ability='<?php echo $getbg['ability']; ?>'" > <?php echo $getbg['ability']; ?></option>
                           <?php
                        }
                    ?>  
                  </select>
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-12 lg-mr-5 sm-mt-2">
                  <label for="gender">Select Gender</label>
                  <select  class="form-control " name="gender" id="gender">
                    <option value="">Select Gender</option>
                    <option value="">Both </option>
                    <?php 
                        $sqlbg = "SELECT DISTINCT gender FROM doners ORDER BY gender asc";
                        $sqlbgrun= mysqli_query($connect,$sqlbg);
                        while($getbg = mysqli_fetch_array($sqlbgrun)){
                           ?>
                              <option value=" AND gender = '<?php echo $getbg['gender']; ?>'" > <?php echo $getbg['gender']; ?></option>
                           <?php
                        }
                    ?>
                  
                  </select>
                </div>     
                 <div class="col-lg-2 col-md-4 col-sm-12 lg-mr-5 sm-mt-2">
                    <label for="btn"></label>

                  <input class="btn form-control bg-success text-white font-weight-bold" id="btn" type="submit" value="Filter">
                  </div>
                </div>
              </form>