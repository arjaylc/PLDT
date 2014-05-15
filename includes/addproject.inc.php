<?php
$msie = strpos($_SERVER["HTTP_USER_AGENT"], 'MSIE') ? true : false;
$firefox = strpos($_SERVER["HTTP_USER_AGENT"], 'Firefox') ? true : false;
$safari = strpos($_SERVER["HTTP_USER_AGENT"], 'Safari') ? true : false;
$chrome = strpos($_SERVER["HTTP_USER_AGENT"], 'Chrome') ? true : false;
?>

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
					<?php
						if($chrome||$safari){ 
					?>
							<div class="form-group">
								<label for="deadline" class="col-sm-4 control-label">Deadline</label>
								<div class="col-sm-7">
									<input type="datetime-local" class="form-control" id="deadline" placeholder="Enter Deadline Date Time" name="deadline">
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
												for($i=1; $i<=12; $i++){
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
								<label for="deadline" class="col-sm-4 control-label"></label>
								<div class="row">
									<div class="row">
									<div class="col-sm-2">
										<select class="form-control" id="dlhour">
											<option>hh</option>
											<?php
												for($i=1; $i<=12; $i++){
											?>
											<option><?php echo $i ?></option>
											<?php } ?>
										</select>
									</div>
									<div class="col-sm-2">
										<select class="form-control" id="dlmins">
											<option>mm</option>
											<?php
												for($i=1; $i<=59; $i++){
											?>
											<option><?php echo $i ?></option>
											<?php } ?>
										</select>
									</div>
									<div class="col-sm-2">
										<select class="form-control" id="dlTime">
											<option>AM</option>
											<option>PM</option>
										</select>
									</div>
								</div>
								</div>
							</div>
					<?php
					}
					?>
						
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

					<?php
						if($chrome||$safari){ 
					?>
							<div class="form-group">
								<label for="deadline" class="col-sm-4 control-label">Date Time Started</label>
								<div class="col-sm-7">
									<input type="datetime-local" class="form-control" id="deadline" placeholder="Enter Date Time Started" name="dts">
								</div>
							</div>
					<?php	
					} else{
					?>
							<div class="form-group">
								<label for="deadline" class="col-sm-4 control-label">Date Time Started</label>
								<div class="row">
									<div class="col-sm-2">
										<select class="form-control" id="dtsMonth">
											<option>mm</option>
											<?php
												for($i=1; $i<=12; $i++){
											?>
											<option><?php echo $i ?></option>
											<?php } ?>
										</select>
									</div>
									<div class="col-sm-2">
										<select class="form-control" id="dtsDay">
											<option>dd</option>
											<?php
												for($i=1; $i<=12; $i++){
											?>
											<option><?php echo $i ?></option>
											<?php } ?>
										</select>
									</div>
									<div class="col-sm-2">
										<input type="text" class="form-control" id="dtsYear" placeholder="yyyy" maxlength="4">
									</div>
								</div>
							</div>	
							<div class="form-group">
								<label for="deadline" class="col-sm-4 control-label"></label>
								<div class="row">
									<div class="row">
									<div class="col-sm-2">
										<select class="form-control" id="dtshour">
											<option>hh</option>
											<?php
												for($i=1; $i<=12; $i++){
											?>
											<option><?php echo $i ?></option>
											<?php } ?>
										</select>
									</div>
									<div class="col-sm-2">
										<select class="form-control" id="dtsmins">
											<option>mm</option>
											<?php
												for($i=1; $i<=59; $i++){
											?>
											<option><?php echo $i ?></option>
											<?php } ?>
										</select>
									</div>
									<div class="col-sm-2">
										<select class="form-control" id="dtsTime">
											<option>AM</option>
											<option>PM</option>
										</select>
									</div>
								</div>
								</div>
							</div>
					<?php
					}
					?>

					<?php
						if($chrome||$safari){ 
					?>
							<div class="form-group">
								<label for="deadline" class="col-sm-4 control-label">Date Time Accomplised</label>
								<div class="col-sm-7">
									<input type="datetime-local" class="form-control" id="deadline" placeholder="Enter Date Time Accomplished" name="dta">
								</div>
							</div>
					<?php	
					} else{
					?>
							<div class="form-group">
								<label for="deadline" class="col-sm-4 control-label">Date Time Accomplished</label>
								<div class="row">
									<div class="col-sm-2">
										<select class="form-control" id="dtaMonth">
											<option>mm</option>
											<?php
												for($i=1; $i<=12; $i++){
											?>
											<option><?php echo $i ?></option>
											<?php } ?>
										</select>
									</div>
									<div class="col-sm-2">
										<select class="form-control" id="dtaDay">
											<option>dd</option>
											<?php
												for($i=1; $i<=12; $i++){
											?>
											<option><?php echo $i ?></option>
											<?php } ?>
										</select>
									</div>
									<div class="col-sm-2">
										<input type="text" class="form-control" id="dtaYear" placeholder="yyyy" maxlength="4">
									</div>
								</div>
							</div>	
							<div class="form-group">
								<label for="deadline" class="col-sm-4 control-label"></label>
								<div class="row">
									<div class="row">
									<div class="col-sm-2">
										<select class="form-control" id="dtahour">
											<option>hh</option>
											<?php
												for($i=1; $i<=12; $i++){
											?>
											<option><?php echo $i ?></option>
											<?php } ?>
										</select>
									</div>
									<div class="col-sm-2">
										<select class="form-control" id="dtamins">
											<option>mm</option>
											<?php
												for($i=1; $i<=59; $i++){
											?>
											<option><?php echo $i ?></option>
											<?php } ?>
										</select>
									</div>
									<div class="col-sm-2">
										<select class="form-control" id="dtaTime">
											<option>AM</option>
											<option>PM</option>
										</select>
									</div>
								</div>
								</div>
							</div>
					<?php
					}
					?>

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
