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
	    		<form class="form-horizontal" role="form" action="check_project.php" method="POST"> <!--- -->
	    			<div class="form-group">
	    				<label for="projectTitle" class="col-sm-4 control-label">Project Title</label>
	    				<div class="col-sm-7">
	    					<input type="text" class="form-control" id="projectTitle" placeholder="Enter Project Title" name="title">
	    				</div>
	    			</div>
					<div class="form-group">
						<label for="employee" class="col-sm-4 control-label">Employee Assigned</label>
						<div class="col-sm-7">
							<input type="text" class="form-control" id="employee" placeholder="Enter Employee Details" name="idNo">
						</div>
					</div>

					<div class="form-group">
						<label for="projectFor" class="col-sm-4 control-label">Node or Cabinet</label>
						<div class="col-sm-3">
							<select id = "projectFor" name="projectFor" class="form-control"> <!-- SHALL BE EDITED -->
								<option onclick="disableInputs()">Select...</option>
								<option onclick="enableNodeInput()">Node</option>
								<option onclick="enableCabinetInput()">Cabinet</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label for="projectNodeName" class="col-sm-4 control-label">Node Name</label>
						<div class="col-sm-7">
							<input type="text" class="form-control" id="projectNodeName" disabled name="nodeName">
						</div>
					</div>

					<div class="form-group">
						<label for="projectCabinetNo" class="col-sm-4 control-label">Cabinet Number</label>
						<div class="col-sm-7">
							<input type="text" class="form-control" id="projectCabinetNo" disabled name="cabinetNo">
						</div>
					</div>

						<!-- checklist -->


					
					<div class="form-group">
						<label for="projectDeadlineDate" class="col-sm-4 control-label">Deadline Date</label>
						<div class="col-sm-7">
							<input type="date" class="form-control" id="projectDeadlineDate" 
							placeholder="Enter Deadline Date" name="deadlineDate">
						</div>
					</div>

					<div class="form-group">
						<label for="projectDeadlineTime" class="col-sm-4 control-label">Deadline Time (optional)</label>
						<div class="col-sm-7">
							<input type="time" class="form-control" id="projectDeadlineTime" 
							placeholder="Enter Deadline Time" name="deadlineTimme">
						</div>
					</div>

					<div class="form-group">
						<label for="projectType" class="col-sm-4 control-label">Type of Maintenance</label>
						<div class="col-sm-3">
							<select id = "projectType" name="projectType" class="form-control"> <!-- SHALL BE EDITED -->
								<?php
							        require_once('includes/database_master.inc.php');
							        $database_master = new DatabaseMaster();
									$query = "SELECT project_type FROM project_types";
									$queryResult = $database_master->querySelect($query);
									foreach($queryResult as $row){?>
										<option><?php echo $row['project_type']?></option>
								<?php
									}
								?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="faultDescription" class="col-sm-4 control-label">Fault Description</label>
						<div class="col-sm-7">
							<textarea class="form-control" rows="3" id="faultDescription" placeholder="Enter Description" name="faultDescription"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="projectTasks" class="col-sm-4 control-label">Required Tasks</label>
						<div class="col-sm-7">
							<textarea class="form-control" rows="3" id="projectTasks" placeholder="Enter Tasks" name="tasks"></textarea>
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

<script>
	function enableNodeInput(){
		document.getElementById("projectNodeName").disabled=false;
		document.getElementById("projectCabinetNo").disabled=true;
		document.getElementById("projectNodeName").placeholder="Enter Node Name";
		document.getElementById("projectCabinetNo").placeholder="";
	}
	function enableCabinetInput(){
		document.getElementById("projectNodeName").disabled=true;
		document.getElementById("projectCabinetNo").disabled=false;
		document.getElementById("projectNodeName").placeholder="";
		document.getElementById("projectCabinetNo").placeholder="Enter Cabinet Number";
	}
	function disableInputs(){
		document.getElementById("projectNodeName").disabled=true;
		document.getElementById("projectCabinetNo").disabled=true;
		document.getElementById("projectNodeName").placeholder="";
		document.getElementById("projectCabinetNo").placeholder="";
	}
</script>