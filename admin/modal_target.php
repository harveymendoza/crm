<!-- Modal HTML Markup -->
<div id="modal_superusers" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Add Target</h2>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="save_target.php">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                        <label class="control-label">Target</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="target" value="">
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