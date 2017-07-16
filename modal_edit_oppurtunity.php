<!-- Modal HTML Markup -->
<div id="<?php echo $id; ?>" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Edit Details</h2>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="update_oppurtunity.php">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                        <label class="control-label">Recurring Meeting Date</label>
                        <div>
                            <input type="date" value="<?php echo $row['reccuringdate']; ?>" class="form-control input-sm" name="reccuringdate" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Status Percentage</label>
                        <div>
                            <input name="statuspercentage" type="text" value="<?php echo $row['statuspercentage']; ?>" class="form-control input-sm" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Remarks</label>
                        <div>
                             <textarea name="remarks" class="form-control col-md-7 col-xs-12" type="text" required="required"><?php echo $row['remarks']; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Competitors Name</label>
                        <div>
                            <input type="text" value="<?php echo $row['comname']; ?>" class="form-control input-sm" name="comname">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Signed Date</label>
                        <div>
                            <input type="date" value="<?php echo $row['signeddate']; ?>" class="form-control input-sm" name="signeddate">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">End of Contract</label>
                        <div>
                            <input type="date" value="<?php echo $row['exdate']; ?>" class="form-control input-sm" name="exdate">
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->