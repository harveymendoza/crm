<!-- Modal HTML Markup -->
<div id="modal_superusers" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Add Telco</h2>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="save_telco.php">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                        <label class="control-label">Telco
                        </label>
                        <div>
                            <input type="text" class="form-control input-lg" name="telecom" value="">
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