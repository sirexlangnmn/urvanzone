<!-- ============================================================== -->
<!-- modal Brand Insert -->
<!-- ============================================================== -->
<div id="modal_brand_insert" class="modal fade" tabindex="-1" 
    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Brand</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form class="m-t-40" novalidate method="POST" action="queries/brand_insert.php">
                    <div class="form-group">
                        <h5>Brand Name </h5>
                        <div class="controls">
                            <input type="text" name="brand_name" placeholder="Brand Name" class="form-control" required data-validation-required-message="This field is required"> 
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






