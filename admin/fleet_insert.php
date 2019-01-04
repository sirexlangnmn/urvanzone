<?php include("include/style.php"); ?>
<body class="fix-header fix-sidebar card-no-border">
   <!-- ============================================================== -->
   <!-- Preloader - style you can find in spinners.css -->
   <!-- ============================================================== -->
   <div class="preloader">
      <svg class="circular" viewBox="25 25 50 50">
         <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
      </svg>
   </div>
   <!-- ============================================================== -->
   <!-- Main wrapper - style you can find in pages.scss -->
   <!-- ============================================================== -->
   <div id="main-wrapper">
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <?php include("include/header.php"); ?>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <?php include("include/left_sidebar.php"); ?>
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
         <!-- ============================================================== -->
         <!-- Bread crumb and right sidebar toggle -->
         <!-- ============================================================== -->
         <div class="row page-titles">
            <div class="col-md-5 align-self-center">
               <h3 class="text-themecolor">Add Vehicle</h3>
            </div>
            <div class="col-md-7 align-self-center">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                  <li class="breadcrumb-item active">Add Vehicle</li>
               </ol>
            </div>
         </div>
         <!-- ============================================================== -->
         <!-- End Bread crumb and right sidebar toggle -->
         <!-- ============================================================== -->
         <!-- ============================================================== -->
         <!-- Container fluid  -->
         <!-- ============================================================== -->
         <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="card">
               <div class="card-body">
                  <form class="" novalidate method="POST" enctype="multipart/form-data" action="queries/fleet_insert.php">
                     <div class="row">
                        <div class="col-md-4">
                           <div class="form-group">
                              <h5>Vehicle Title </h5>
                              <div class="controls">
                                 <input type="text" name="vehicle_title" placeholder="Vehicle Title" class="form-control" required data-validation-required-message="This field is required"> 
                              </div>
                           </div>
                           <div class="form-group">
                              <h5>Brand Name </h5>
                              <select class="form-control custom-select" name="brand_id" required>
                                 <option>-- Brand Name --</option>
                                 <?php
                                    $brands_query = mysqli_query($con, "SELECT * FROM tblbrands")
                                    or die(mysqli_error());
                                    while ($brands_row = mysqli_fetch_array($brands_query)) : 
                                 ?>
                                 <option value="<?php echo $brands_row['brand_id']?>">
                                    <?php echo $brands_row['BrandName']; ?>
                                 </option>
                                 <?php endwhile; ?>
                              </select>
                           </div>
                           <div class="form-group">
                              <h5>Vehicle Overview </h5>
                              <div class="controls">
                                 <input type="text" name="vehicle_overview" placeholder="Vehicle Overview" class="form-control" required data-validation-required-message="This field is required"> 
                              </div>
                           </div>
                           <div class="form-group">
                              <h5>Plate No</h5>
                              <div class="controls">
                                 <input type="text" name="plate_no" placeholder="Plate No" class="form-control" required data-validation-required-message="This field is required"> 
                              </div>
                           </div>
                           <div class="form-group">
                              <h5>Price Per Day </h5>
                              <div class="controls">
                                 <input type="text" name="price_per_day" placeholder="Price Per Day" class="form-control" required data-validation-required-message="This field is required"> 
                              </div>
                           </div>
                           <div class="form-group">
                              <h5>Select Fuel Type </h5>
                              <select class="form-control custom-select" name="fuel_type" required>
                                 <option>-- Select Fuel Type --</option>
                                 <option value="Petrol">Petrol</option>
                                 <option value="Diesel">Diesel</option>
                                 <option value="CNG">CNG</option>
                              </select>
                           </div>
                           <div class="form-group">
                              <h5>Model Year </h5>
                              <div class="controls">
                                 <input type="text" name="model_year" placeholder="Model Year" class="form-control" required data-validation-required-message="This field is required"> 
                              </div>
                           </div>
                           <div class="form-group">
                              <h5>Seating Capacity </h5>
                              <div class="controls">
                                 <input type="text" name="seating_capacity" placeholder="Seating Capacity" class="form-control" required data-validation-required-message="This field is required"> 
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <h5>Image 1</h5>
                              <input type="file" class="form-control" id="exampleInputFile" name="img1" aria-describedby="fileHelp">
                           </div>
                           <div class="form-group">
                              <h5>Image 2</h5>
                              <input type="file" class="form-control" id="exampleInputFile" name="img2" aria-describedby="fileHelp">
                           </div>
                           <div class="form-group">
                              <h5>Image 3</h5>
                              <input type="file" class="form-control" id="exampleInputFile" name="img3" aria-describedby="fileHelp">
                           </div>
                           <div class="demo-checkbox">
                              <input type="checkbox" id="md_checkbox_21" name="air_conditioning" class="filled-in chk-col-red" checked value="1" />
                              <label for="md_checkbox_21">Air Conditioning</label>
                              <input type="checkbox" id="md_checkbox_22" name="power_steering" class="filled-in chk-col-pink" checked value="1"/>
                              <label for="md_checkbox_22">Power Steering</label>
                              <input type="checkbox" id="md_checkbox_23" name="music_player" class="filled-in chk-col-purple" checked value="1"/>
                              <label for="md_checkbox_23">Music Player</label>
                              <input type="checkbox" id="md_checkbox_24" name="power_door_locks" class="filled-in chk-col-deep-purple" checked value="1"/>
                              <label for="md_checkbox_24">Power Door Locks</label>
                              <input type="checkbox" id="md_checkbox_25" name="driver_airbag" class="filled-in chk-col-indigo" checked value="1"/>
                              <label for="md_checkbox_25">Driver Airbag</label>
                              <input type="checkbox" id="md_checkbox_26" name="central_locking_system" class="filled-in chk-col-blue" checked value="1"/>                              
                              <label for="md_checkbox_26">Central Locking System</label>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <h5>Image 4</h5>
                              <input type="file" class="form-control" id="exampleInputFile" name="img4" aria-describedby="fileHelp">
                           </div>
                           <div class="form-group">
                              <h5>Image 5</h5>
                              <input type="file" class="form-control" id="exampleInputFile" name="img5" aria-describedby="fileHelp">
                           </div>
                           <div class="form-group">
                              <h5>Image 6</h5>
                              <input type="file" class="form-control" id="exampleInputFile" name="img6" aria-describedby="fileHelp">
                           </div>
                           <div class="demo-checkbox">
                              <input type="checkbox" id="md_checkbox_27" name="anti_lock_braking_system" class="filled-in chk-col-light-blue" checked value="1"/> 
                              <label for="md_checkbox_27">Anti Lock Braking System</label>
                              <input type="checkbox" id="md_checkbox_28" name="passenger_airbag"  class="filled-in chk-col-cyan" checked value="1"/>
                              <label for="md_checkbox_28">Passenger AirBag</label>
                              <input type="checkbox" id="md_checkbox_29" name="crash_sensor" class="filled-in chk-col-teal" checked value="1"/>                              
                              <label for="md_checkbox_29">Crash Sensor</label>
                              <input type="checkbox" id="md_checkbox_30" name="brake_assist" class="filled-in chk-col-green" checked value="1"/>
                              <label for="md_checkbox_30">Brake Assist</label>
                              <input type="checkbox" id="md_checkbox_31" name="power_windows" class="filled-in chk-col-light-green" checked value="1"/>
                              <label for="md_checkbox_31">Power Windows</label>
                              <input type="checkbox" id="md_checkbox_32" name="leather_seats" class="filled-in chk-col-lime" checked value="1"/>
                              <label for="md_checkbox_32">Leather Seats</label>
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button type="submit" name="submit" value="Insert Vehicle" class="btn btn-outline-success waves-effect waves-light"><i class="fa fa-plus"></i>&nbsp Add New Vehicle
                        </button>
                     </div>
                  </form>
               </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
         </div>
         <!-- ============================================================== -->
         <!-- End Container fluid  -->
         <!-- ============================================================== -->
         <!-- ============================================================== -->
         <!-- footer -->
         <!-- ============================================================== -->
         <?php include("include/footer.php"); ?>
         <!-- ============================================================== -->
         <!-- End footer -->
         <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
   </div>
   <!-- ============================================================== -->
   <!-- End Wrapper -->
   <!-- ============================================================== -->
   <!-- ============================================================== -->
   <!-- All Jquery -->
   <!-- ============================================================== -->
   <?php 
      include("include/script.php"); 
      include("include/datatables.php");
      include("include/validation.php");
      ?>