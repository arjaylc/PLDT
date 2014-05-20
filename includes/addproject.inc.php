<?php
$msie = strpos($_SERVER["HTTP_USER_AGENT"], 'MSIE') ? true : false;
$firefox = strpos($_SERVER["HTTP_USER_AGENT"], 'Firefox') ? true : false;
$safari = strpos($_SERVER["HTTP_USER_AGENT"], 'Safari') ? true : false;
$chrome = strpos($_SERVER["HTTP_USER_AGENT"], 'Chrome') ? true : false;
?>

<h1>Projects</h1>
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
	    		<form class="form-horizontal" role="form" action="check_project.php" method="get"> <!--- -->
	    			<div class="form-group">
	    				<label for="projectTitle" class="col-sm-4 control-label">Project Title</label>
	    				<div class="col-sm-7">
	    					<input type="text" class="form-control" id="projectTitle" required placeholder="Enter Project Title" name="title">
	    				</div>
	    			</div>
					<div class="form-group">
						<label for="employee" class="col-sm-4 control-label">Employee Assigned</label>
						<div class="col-sm-7">
							<input type="text" class="form-control" id="employee" required placeholder="Enter Employee Details" name="idNo">
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-4 control-label">Node or Cabinet</label>
						<div class="row">

				            <input type="radio" name="radios2" id="nodeRadio" value="With" checked="checked"
				            onclick="enableNodeInput()">
				            <label for="nodeRadio">Node</label>
				            <input type="radio" name="radios2" id="cabinetRadio" value="Without"
				            onclick="enableCabinetInput()">
				            <label for="cabinetRadio">Cabinet</label>
						</div>
					</div>

					<div id="nodeNameDiv" class="form-group">
						<label for="projectNodeName" class="col-sm-4 control-label">Node Name</label>
						<div class="col-sm-7">
							<input type="text" class="form-control" id="projectNodeName" name="nodeName"
							placeholder = "Enter Node Name">
						</div>
					</div>

					<div id="cabinetNoDiv" class="form-group" style="display:none;">
						<label for="projectCabinetNo" class="col-sm-4 control-label">Cabinet Number</label>
						<div class="col-sm-7">
							<input type="text" class="form-control" id="projectCabinetNo" name="cabinetNo"
							disabled placeholder = "Enter Cabinet Number">
						</div>
					</div>

										<!-- checklist -->
					<?php
						if($chrome||$safari){ 
					?>
							<div class="form-group">

								<div class="row">
									<label for="deadline" class="col-sm-4 control-label">Deadline</label>
									<div class="col-sm-7">
										<input type="date" class="form-control" id="deadline" placeholder="Enter Deadline Date" name="deadline">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<label for = "deadlineTime"class="col-sm-4 control-label">Time
									<input type="checkbox" name="deadlineTime" value="time"
									onchange = "enableTime()"></label>
									<div class="col-sm-7">
										<input type="time" class="form-control" id="deadlineTime" placeholder="Enter Deadline Time" name="deadlineTime" disabled>
									</div>
								</div>
							</div>
					<?php	
					} else{
					?>
							<div class="form-group">
								<label for="deadline" class="col-sm-4 control-label">Deadline</label>
								<div class="row">
									<div class="col-sm-2">
										<select class="form-control" id="dlMonth">
											<option>mm</option>
											<?php
												for($i=1; $i<=12; $i++){
											?>
											<option><?php echo $i ?></option>
											<?php } ?>
										</select>
									</div>
									<div class="col-sm-2">
										<select class="form-control" id="dlDay">
											<option>dd</option>
											<?php
												for($i=1; $i<=31; $i++){
											?>
											<option><?php echo $i ?></option>
											<?php } ?>
										</select>
									</div>
									<div class="col-sm-2">
										<input type="text" class="form-control" id="dlYear" placeholder="yyyy" maxlength="4">
									</div>
								</div>
							</div>	
							<div class="form-group">
								<label class="col-sm-4 control-label">Time
								<input type="checkbox" name="deadlineTime" value="time"
								onchange = "enableTimes()"></label>
								
								<div class="row">
									<div class="col-sm-2">
										<select class="form-control" id="dlhour" disabled>
											<option>hh</option>
											<?php
												for($i=1; $i<=12; $i++){
											?>
											<option><?php echo $i ?></option>
											<?php } ?>
										</select>
									</div>
									<div class="col-sm-2">
										<select class="form-control" id="dlmins" disabled>
											<option>mm</option>
											<?php
												for($i=00; $i<=59; $i++){
											?>
											<option><?php echo $i ?></option>
											<?php } ?>
										</select>
									</div>
									<div class="col-sm-2">
										<select class="form-control" id="dlTime" disabled>
											<option>AM</option>
											<option>PM</option>
										</select>
									</div>
								</div>
							</div>
					<?php
					}
					?>

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
	var nodeNameDiv = document.getElementById("nodeNameDiv");
	var cabinetNoDiv = document.getElementById("cabinetNoDiv");
	var deadlineTime = document.getElementById("deadlineTime");
	var dlhour= document.getElementById("dlhour");
	var dlmins=document.getElementById("dlmins");
	var dlTime =document.getElementById("dlTime");
	function enableNodeInput(){
		nodeNameDiv.style.display="";
		cabinetNoDiv.style.display="none";
		document.getElementById("projectNodeName").disabled=false;
		document.getElementById("projectCabinetNo").disabled=true;
		document.getElementById("projectCabinetNo").value="";
	}
	function enableCabinetInput(){
		nodeNameDiv.style.display="none";
		cabinetNoDiv.style.display="";
		document.getElementById("projectNodeName").disabled=true;
		document.getElementById("projectCabinetNo").disabled=false;
		document.getElementById("projectNodeName").value="";
	}
	function enableTime(){
		if(deadlineTime.disabled==true){
			deadlineTime.disabled=false;
		} else{
			deadlineTime.disabled=true;
			deadlineTime.value="";

		}
	}
	function enableTimes(){
		if(dlTime.disabled==true){
			dlTime.disabled=false;
			dlhour.disabled=false;
			dlmins.disabled=false;
		} else{
			dlTime.disabled=true;
			dlhour.disabled=true;
			dlmins.disabled=true;
			dlTime.selectedIndex=0;
			dlhour.selectedIndex=0;
			dlmins.selectedIndex=0;
		}
	}
</script>