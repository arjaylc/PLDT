<h1> Add Report </h1>
<button class="btn btn-success btn-lg" data-toggle="modal" data-target="#addReportModal">Add Report</button>

<!-- Add Report Modal -->
<div class="modal fade" id="addReportModal" tabindex="-1" role="dialog" aria-labelledby="addReportModal" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
	    <div class="modal-header">
	      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	      <h2>Add Report</h2>
	    </div>
	    <div class="modal-body">
	    	<div id="register-overlay" class = "form">
	    		<form class="form-horizontal" role="form" action="" method="POST"> <!--- -->
					<div class="form-group">
	    				<label for="IDNumber" class="col-sm-4 control-label">ID Number</label>
	    				<div class="col-sm-7">
	    					<input type="text" class="form-control" id="id_number" placeholder="Enter ID Number" name="id_number">
	    				</div>
	    			</div>
	    			<div class="form-group">
	    				<label for="reportTitle" class="col-sm-4 control-label">Report Title</label>
	    				<div class="col-sm-7">
	    					<input type="text" class="form-control" id="reportTitle" placeholder="Enter Report Title" name="title">
	    				</div>
	    			</div>

					<div class="form-group">
						<label for="reportNodeName" class="col-sm-4 control-label">Node Name</label>
						<div class="col-sm-7">
							<input type="text" class="form-control" id="reportNodeName" placeholder="Enter Node Name" name="nodeName">
						</div>
					</div>

					<div class="form-group">
						<label for="reportCabinetNo" class="col-sm-4 control-label">Cabinet Number</label>
						<div class="col-sm-7">
							<input type="text" class="form-control" id="reportCabinetNo" placeholder="Enter Cabinet Number" name="cabinetNo">
						</div>
					</div>

									
					
					<div class="form-group">
						<label for="faultDescription" class="col-sm-4 control-label">Fault Description</label>
						<div class="col-sm-7">
							<textarea class="form-control" rows="3" id="faultDescription" placeholder="Enter Description" name="faultDescription"></textarea>
						</div>
					</div>
					
					
					
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Assign</button>
					</div>
				</form>
			</div>
	    </div>
	  </div>
	</div>
</div> <!-- end Add Project Modal -->

