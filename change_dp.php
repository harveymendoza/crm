<!-- Modal HTML Markup -->
<div id="change_profile_picture_modal" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Change Profile Picture</h2>
            </div>
            <div class="modal-body">
               <form method="POST" action="update_profile_picture.php" enctype="multipart/form-data">
							<div class="form-group">
								<label for="exampleInputFile">File input</label>
								<input name="image" type="file" id="exampleInputFile" required>
							</div>
							<button type="submit" class="btn btn-default">Submit</button>
					</form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->