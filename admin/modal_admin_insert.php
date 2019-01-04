<!-- ============================================================== -->
<!-- modal Brand Insert -->
<!-- ============================================================== -->
<div id="modal_admin_insert" class="modal fade" tabindex="-1" 
    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Brand</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form class="m-t-10" novalidate method="POST" action="queries/admin_insert.php">
                    <div class="form-group">
                        <div class="form-controls">
                            <input type="text" name="fullname" placeholder="Fullname" class="form-control" required data-validation-required-message="This field is required"> 
                        </div>
                        <h5 class="m-t-10">Username</h5>
                        <div class="controls">
                            <input type="text" name="username" placeholder="Username" class="form-control" required data-validation-required-message="This field is required"> 
                        </div>
                        <h5 class="m-t-10">Password</h5>
                        <div class="controls">
                            <input type="password" name="password" placeholder="Password" class="form-control" required data-validation-required-message="This field is required"> 
                        </div>
                        <h5 class="m-t-10">Email</h5>
                        <div class="controls">
                            <input type="email" name="email" placeholder="Email" class="form-control" required data-validation-required-message="This field is required"> 
                        </div>
                        <div class="form-controls">
                            <h5 class="m-t-10">Position</h5>
                            <select class="form-control custom-select" name="position" required data-validation-required-message="This field is required">
                                <option>-- Select Position Type --</option>
                                <option value="Admin">Admin</option>
                                <option value="Staff">Staff</option>
                            </select>
                        </div>
                        <h5 class="m-t-10">Contact</h5>
                        <div class="controls">
                            <input type="text" name="contact" placeholder="Contact Number" class="form-control" required data-validation-required-message="This field is required"> 
                        </div>
                    </div>                    
                    <div class="modal-footer">
                        <button type="submit" name="submit" class="btn btn-outline-success waves-effect waves-light"><i class="fa fa-plus"></i>&nbsp Add
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End modal Brand Insert -->
<!-- ============================================================== -->






