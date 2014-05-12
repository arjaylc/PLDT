<button class="btn btn-success btn-lg" data-toggle="modal" data-target="#addProjectModal">Add Project</button>

<!-- Add Project Modal -->
<div class="modal fade" id="addProjectModal" tabindex="-1" role="dialog" aria-labelledby="addProjectModal" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
	    <div class="modal-header">
	      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	      <h2>Assign Project</h2>
	    </div>
	    <div class="modal-body">
	    	<div id="register-overlay" class = "form">
	    		<form class="form-horizontal" role="form" action="checkAddNode.php" method="POST"> <!--- -->
	    			<div class="form-group">
	    				<label for="projectTitle" class="col-sm-4 control-label">Project Title</label>
	    				<div class="col-sm-7">
	    					<input type="text" class="form-control" id="projectTitle" placeholder="Enter Project Title" name="projectTitle">
	    				</div>
	    			</div>
					<div class="form-group">
						<label for="idnumber" class="col-sm-4 control-label">ID Number</label>
						<div class="col-sm-7">
							<input type="text" class="form-control" id="idnumber" placeholder="Enter ID number" name="idnumber">
						</div>
					</div>
					<div class="form-group">
						<label for="nodename" class="col-sm-4 control-label">Node Name</label>
						<div class="col-sm-7">
							<input type="text" class="form-control" id="nodename" placeholder="Enter Node Name" name="nodename">
						</div>
					</div>

						<!-- checklist -->


					
					<div class="form-group">
						<label for="deadline" class="col-sm-4 control-label">Deadline</label>
						<div class="col-sm-7">
							<input type="datetime-local" class="form-control" id="deadline" placeholder="Enter Deadline Date Time" name="deadline">
						</div>
					</div>
					<div class="form-group">
						<label for="typeofmaintenance" class="col-sm-4 control-label">Type of Maintenance</label>
						<div class="col-sm-3">
							<select id = "typeofmaintenance" name="typeofmaintenance" class="form-control"> <!-- SHALL BE EDITED -->
								<?php
							        require_once('includes/database_master.inc.php');
							        $database_master = new DatabaseMaster();
									$query = "SELECT central_officeName FROM central_offices";
									$queryResult = $database_master->querySelect($query);
									foreach($queryResult as $row){?>
										<option><?php echo $row['central_officeName']?></option>
								<?php
									}
								?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="actiontaken" class="col-sm-4 control-label">Action taken</label>
						<div class="col-sm-7">
							<textarea class="form-control" rows="3" id="actiontaken" placeholder="Enter Action Taken" name="actiontaken"></textarea>
						</div>
					</div>

					<div class="form-group">
						<label for="datetimestarted" class="col-sm-4 control-label">Date Time Started</label>
						<div class="col-sm-7">
							<input type="datetime-local" class="form-control" id="datetimestarted" placeholder="Enter Date Time Started" name="datetimestarted">
						</div>
					</div>

					<div class="form-group">
						<label for="datetimeaccomplished" class="col-sm-4 control-label">Date Time Accomplished</label>
						<div class="col-sm-7">
							<input type="datetime-local" class="form-control" id="datetimeaccomplished" placeholder="Enter Date Time Accomplished" name="datetimeaccomplished">
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
