<!-- ============================================================== -->
<!-- modal Brand update -->
<!-- ============================================================== -->
<div id="modal_brand_update<?php echo $id; ?>" class="modal fade" tabindex="-1" 
    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Brand Name</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form class="m-t-40" novalidate method="POST" action="queries/brand_update.php">
                    <div class="form-group">
                        <h5>Brand Name </h5>
                        <div class="controls">
                            <input type="hidden" name="brand_id" value="<?php echo $id; ?>" required>

                            <input type="text" name="brand_name" value="<?php echo htmlentities($row['BrandName']); ?>" placeholder="Brand Name" class="form-control" required data-validation-required-message="This field is required"> 
                        </div>
                    </div>                    
                    <div class="modal-footer">
                        <button type="submit" name="update" class="btn btn-outline-success waves-effect waves-light"><i class="fa fa-plus"></i>&nbsp Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End modal Brand update -->
<!-- ============================================================== -->






