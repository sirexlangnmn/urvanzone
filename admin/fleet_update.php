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
               <h3 class="text-themecolor">Update Vehicle Details</h3>
            </div>
            <div class="col-md-7 align-self-center">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                  <li class="breadcrumb-item active">Update Vehicle Details</li>
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
                  <?php
                     $id = ($_GET['id']);
                     $run_vehicles = mysqli_query($con, "SELECT * FROM tblvehicles LEFT JOIN tblbrands ON tblbrands.brand_id = tblvehicles.brand_id WHERE tblvehicles.id = '$id'") or die(mysqli_error());
                     while($row=mysqli_fetch_array($run_vehicles)) :
                     $brand_id = $row['brand_id'];
                  ?>
                  <form novalidate method="POST" enctype="multipart/form-data" action="queries/fleet_update.php">
                     <div class="row">
                        <div class="col-md-4">
                           <input type="hidden" name="id" value="<?php echo htmlentities($row['id']); ?>" required>
                           <div class="form-group">
                              <h5>Vehicle Title </h5>
                              <div class="controls">
                                 <input type="text" name="vehicle_title" value="<?php echo htmlentities($row['VehiclesTitle']); ?>" placeholder="Vehicle Title" class="form-control" required data-validation-required-message="This field is required"> 
                              </div>
                           </div>
                           <div class="form-group">
                              <h5>Brand Name </h5>
                              <select class="form-control custom-select" name="brand_id" required>
                              <option value="<?php echo htmlentities($brand_id); ?>"><?php echo htmlentities($row['BrandName']); ?></option>
                                 <?php
                                    $brands_query = mysqli_query($con, "SELECT * FROM tblbrands WHERE brand_id != $brand_id; ")
                                    or die(mysqli_error());
                                    while ($brands_row = mysqli_fetch_array($brands_query)) : ?>
                                    
                                 <option value="<?php echo htmlentities($brands_row['brand_id']); ?>"><?php echo htmlentities($brands_row['BrandName']); ?></option>
                                    
                                 <?php endwhile; ?>
                              </select>
                           </div>
                           <div class="form-group">
                              <h5>Vehicle Overview </h5>
                              <div class="controls">
                                 <input type="text" name="vehicle_overview" value="<?php echo htmlentities($row['VehiclesOverview']); ?>" placeholder="Vehicle Overview" class="form-control" required data-validation-required-message="This field is required"> 
                              </div>
                           </div>
                           <div class="form-group">
                              <h5>Plate No</h5>
                              <div class="controls">
                                 <input type="text" name="plate_no" value="<?php echo htmlentities($row['Plate_No']); ?>" placeholder="Plate No" class="form-control" required data-validation-required-message="This field is required"> 
                              </div>
                           </div>
                           <div class="form-group">
                              <h5>Price Per Day </h5>
                              <div class="controls">
                                 <input type="text" name="price_per_day" value="<?php echo htmlentities($row['PricePerDay']); ?>" placeholder="Price Per Day" class="form-control" required data-validation-required-message="This field is required"> 
                              </div>
                           </div>
                           <div class="form-group">
                              <h5>Select Fuel Type </h5>
                              <select class="form-control custom-select" name="fuel_type" required>
                                 <option><?php echo htmlentities($row['FuelType']); ?></option>
                                 <option>-- Select Fuel Type --</option>
                                 <option value="Petrol">Petrol</option>
                                 <option value="Diesel">Diesel</option>
                                 <option value="CNG">CNG</option>
                              </select>
                           </div>
                           <div class="form-group">
                              <h5>Model Year </h5>
                              <div class="controls">
                                 <input type="text" name="model_year" value="<?php echo htmlentities($row['ModelYear']); ?>"placeholder="Model Year" class="form-control" required data-validation-required-message="This field is required"> 
                              </div>
                           </div>
                           <div class="form-group">
                              <h5>Seating Capacity </h5>
                              <div class="controls">
                                 <input type="text" name="seating_capacity" value="<?php echo htmlentities($row['SeatingCapacity']); ?>" placeholder="Seating Capacity" class="form-control" required data-validation-required-message="This field is required"> 
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <img src="img/vehicleimages/<?php echo htmlentities($row['Vimage1']); ?>" width="320" height="160" >
                           <div class="form-group">
                              <a class="btn btn-outline-success" href="update_image1.php?id=<?php echo htmlentities($row['id']); ?>"><i class="fa fa-pencil m-r-10 text-info" data-toggle="tooltip" data-placement="top" title="Update Image"></i>Edit Image 1</a>
                           </div>

                           <img src="img/vehicleimages/<?php echo htmlentities($row['Vimage2']); ?>" width="320" height="160" >
                           <div class="form-group">
                              <a class="btn btn-outline-success" href="update_image2.php?id=<?php echo htmlentities($row['id']); ?>"><i class="fa fa-pencil m-r-10 text-info" data-toggle="tooltip" data-placement="top" title="Update Image"></i>Edit Image 2</a>
                           </div>

                           <img src="img/vehicleimages/<?php echo htmlentities($row['Vimage3']); ?>" width="320" height="160" >
                           <div class="form-group">
                              <a class="btn btn-outline-success" href="update_image3.php?id=<?php echo htmlentities($row['id']); ?>"><i class="fa fa-pencil m-r-10 text-info" data-toggle="tooltip" data-placement="top" title="Update Image"></i>Edit Image 3</a>
                           </div>
                        </div>

                        <div class="col-md-4">
                           <img src="img/vehicleimages/<?php echo htmlentities($row['Vimage4']); ?>" width="320" height="160" >
                           <div class="form-group">
                              <a class="btn btn-outline-success" href="update_image4.php?id=<?php echo htmlentities($row['id']); ?>"><i class="fa fa-pencil m-r-10 text-info" data-toggle="tooltip" data-placement="top" title="Update Image"></i>Edit Image 4</a>
                           </div>
                           <img src="img/vehicleimages/<?php echo htmlentities($row['Vimage5']); ?>" width="320" height="160" >
                           <div class="form-group">
                              <a class="btn btn-outline-success" href="update_image5.php?id=<?php echo htmlentities($row['id']); ?>"><i class="fa fa-pencil m-r-10 text-info" data-toggle="tooltip" data-placement="top" title="Update Image"></i>Edit Image 5</a>
                           </div>
                           <img src="img/vehicleimages/<?php echo htmlentities($row['Vimage6']); ?>" width="320" height="160" >
                           <div class="form-group">
                              <a class="btn btn-outline-success" href="update_image6.php?id=<?php echo htmlentities($row['id']); ?>"><i class="fa fa-pencil m-r-10 text-info" data-toggle="tooltip" data-placement="top" title="Update Image"></i>Edit Image 6</a>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-3">
                              <div class="demo-checkbox">
                                 <?php if ($row['AirConditioner'] == 1): ?>
                                 <input type="checkbox" id="md_checkbox_21" name="air_conditioning" class="filled-in chk-col-red" checked value="1" />
                                 <label for="md_checkbox_21">Air Conditioner</label>
                                 <?php else: ?>
                                 <input type="checkbox" id="md_checkbox_21" name="air_conditioning" class="filled-in chk-col-red" value="1" />
                                 <label for="md_checkbox_21">Air Conditioner</label>
                                 <?php endif; ?>
                                 <?php if ($row['PowerSteering'] == 1): ?>
                                 <input type="checkbox" id="md_checkbox_22" name="power_steering" class="filled-in chk-col-pink" checked value="1"/>
                                 <label for="md_checkbox_22">Power Steering</label>
                                 <?php else: ?>
                                 <input type="checkbox" id="md_checkbox_22" name="power_steering" class="filled-in chk-col-pink" value="1"/>
                                 <label for="md_checkbox_22">Power Steering</label>
                                 <?php endif; ?>
                                 <?php if ($row['CDPlayer'] == 1): ?>
                                 <input type="checkbox" id="md_checkbox_23" name="music_player" class="filled-in chk-col-purple" checked value="1"/>
                                 <label for="md_checkbox_23">Music Player</label>
                                 <?php else: ?>
                                 <input type="checkbox" id="md_checkbox_23" name="music_player" class="filled-in chk-col-purple" value="1"/>
                                 <label for="md_checkbox_23">Music Player</label>
                                 <?php endif; ?>
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="demo-checkbox">
                                 <?php if ($row['PowerDoorLocks'] == 1): ?>
                                 <input type="checkbox" id="md_checkbox_24" name="power_door_locks" class="filled-in chk-col-deep-purple" checked value="1"/>
                                 <label for="md_checkbox_24">Power Door Locks</label>
                                 <?php else: ?>
                                 <input type="checkbox" id="md_checkbox_24" name="power_door_locks" class="filled-in chk-col-deep-purple" value="1"/>
                                 <label for="md_checkbox_24">Power Door Locks</label>
                                 <?php endif; ?>
                                 <?php if ($row['DriverAirbag'] == 1): ?>
                                 <input type="checkbox" id="md_checkbox_25" name="driver_airbag" class="filled-in chk-col-indigo" checked value="1"/>
                                 <label for="md_checkbox_25">Driver Airbag</label>
                                 <?php else: ?>
                                 <input type="checkbox" id="md_checkbox_25" name="driver_airbag" class="filled-in chk-col-indigo" value="1"/>
                                 <label for="md_checkbox_25">Driver Airbag</label>
                                 <?php endif; ?>
                                 <?php if ($row['DriverAirbag'] == 1): ?>
                                 <input type="checkbox" id="md_checkbox_26" name="central_locking_system" class="filled-in chk-col-blue" checked value="1"/>                              
                                 <label for="md_checkbox_26">Central Locking System</label>
                                 <?php else: ?>
                                 <input type="checkbox" id="md_checkbox_26" name="central_locking_system" class="filled-in chk-col-blue" value="1"/>                              
                                 <label for="md_checkbox_26">Central Locking System</label>
                                 <?php endif; ?>
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="demo-checkbox">
                                 <?php if ($row['AntiLockBrakingSystem'] == 1): ?>
                                 <input type="checkbox" id="md_checkbox_27" name="anti_lock_braking_system" class="filled-in chk-col-light-blue" checked value="1"/> 
                                 <label for="md_checkbox_27">Anti Lock Braking System</label>
                                 <?php else: ?>
                                 <input type="checkbox" id="md_checkbox_27" name="anti_lock_braking_system" class="filled-in chk-col-light-blue" value="1"/> 
                                 <label for="md_checkbox_27">Anti Lock Braking System</label>
                                 <?php endif; ?>
                                 <?php if ($row['PassengerAirbag'] == 1): ?>
                                 <input type="checkbox" id="md_checkbox_28" name="passenger_airbag"  class="filled-in chk-col-cyan" checked value="1"/>
                                 <label for="md_checkbox_28">Passenger AirBag</label>
                                 <?php else: ?>
                                 <input type="checkbox" id="md_checkbox_28" name="passenger_airbag"  class="filled-in chk-col-cyan" value="1"/>
                                 <label for="md_checkbox_28">Passenger AirBag</label>
                                 <?php endif; ?>
                                 <?php if ($row['CrashSensor'] == 1): ?>
                                 <input type="checkbox" id="md_checkbox_29" name="crash_sensor" class="filled-in chk-col-teal" checked value="1"/>                              
                                 <label for="md_checkbox_29">Crash Sensor</label>
                                 <?php else: ?>
                                 <input type="checkbox" id="md_checkbox_29" name="crash_sensor" class="filled-in chk-col-teal" value="1"/>                              
                                 <label for="md_checkbox_29">Crash Sensor</label>
                                 <?php endif; ?>
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="demo-checkbox">
                                 <?php if ($row['BrakeAssist'] == 1): ?>
                                 <input type="checkbox" id="md_checkbox_30" name="brake_assist" class="filled-in chk-col-green" checked value="1"/>
                                 <label for="md_checkbox_30">Brake Assist</label>
                                 <?php else: ?>
                                 <input type="checkbox" id="md_checkbox_30" name="brake_assist" class="filled-in chk-col-green" value="1"/>
                                 <label for="md_checkbox_30">Brake Assist</label>
                                 <?php endif; ?>
                                 <?php if ($row['PowerWindows'] == 1): ?>
                                 <input type="checkbox" id="md_checkbox_31" name="power_windows" class="filled-in chk-col-light-green" checked value="1"/>
                                 <label for="md_checkbox_31">Power Windows</label>
                                 <?php else: ?>
                                 <input type="checkbox" id="md_checkbox_31" name="power_windows" class="filled-in chk-col-light-green"  value="1"/>
                                 <label for="md_checkbox_31">Power Windows</label>
                                 <?php endif; ?>
                                 <?php if ($row['LeatherSeats'] == 1): ?>
                                 <input type="checkbox" id="md_checkbox_32" name="leather_seats" class="filled-in chk-col-lime" checked value="1"/>
                                 <label for="md_checkbox_32">Leather Seats</label>
                                 <?php else: ?>
                                 <input type="checkbox" id="md_checkbox_32" name="leather_seats" class="filled-in chk-col-lime" value="1"/>
                                 <label for="md_checkbox_32">Leather Seats</label>
                                 <?php endif; ?>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button type="submit" name="submit" value="Update Vehicle" class="btn btn-outline-success waves-effect waves-light"><i class="fa fa-plus"></i>&nbsp Save Update
                        </button>
                     </div>
                  </form>
                  <?php endwhile; ?>
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