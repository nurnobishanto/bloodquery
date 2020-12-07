<?php 

require_once ("header.php");

?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">customize</li>
          </ol>

          <!-- Page Content -->
          <h2>Website Customize Area</h2>
          <hr>
          <p>This is a great starting point for new custom pages.</p>


          <form class="form-horizontal" action="#">
          <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Save All </button>
                </div>
            </div>
            <div class="row form-group">
                <label class="control-label col-sm-2" for="site_title">Site Title:</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" id="site_title" placeholder="Enter site title">
                </div>
            </div>
            <div class="row form-group">
                <label class="col-sm-2" for="header_bg_color">Header Background Color:</label>
                <div class="col-sm-6">
                    <select class="form-control" name="header_bg_color" id="header_bg_color">
                        <option  class="text-primary" value="primary">Primary</option>
                        <option class="text-secondary" value="secondary">Secondary</option>
                        <option class="text-success" value="success">Success</option>
                        <option class="text-danger" value="danger">Danger</option>
                        <option class="text-warning" value="warning">Warning</option>
                        <option class="text-info" value="info">Info</option>
                        <option selected class="text-light bg-dark" value="light">Light </option>
                        <option class="text-dark" value="dark">Dark</option>
                        <option class="text-muted" value="muted">Muted</option>
                        <option class="text-white bg-secondary" value="white">White</option>
                       

                    </select>
              
                </div>
            </div>
           




            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Save All</button>
                </div>
            </div>
</form>







        </div>
        <!-- /.container-fluid -->

        <?php 

require_once ("footer.php");

?>