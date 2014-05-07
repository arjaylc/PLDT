<!-- AddNodeModal -->
<div class="modal fade" id="AddNodeModal" tabindex="-1" role="dialog" aria-labelledby="AddNodeModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
	    <div class="modal-header">
	      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	      <h2>Add Node</h2>
	    </div>
	    <div class="modal-body">
			<div id="register-overlay" class = "form">
				<form class="form-horizontal" role="form" action="checkAddNode.php" method="POST">
					<div class="form-group">
						<label for="nodeName" class="col-sm-2 control-label">Node Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="nodeName" placeholder="Enter Node Name" name="nodeName">
						</div>
					</div>
					<div class="form-group">
						<label for="nodeType" class="col-sm-2 control-label">Node Type</label>
						<div class="col-sm-10">
							<select id = "nodeType" name="nodeType">
								<?php
							        require_once('includes/database_master.inc.php');
							        $database_master = new DatabaseMaster();
									$query = "SELECT node_type FROM node_types";
									$queryResult = $database_master->querySelect($query);
									foreach($queryResult as $row){?>
										<option><?php echo $row['node_type']?></option>
								<?php
									}
								?>
							</select>
						</div>
					</div>
					<div class="form-group">
							<?php require_once('includes/search_textfield.inc.php');?>
					</div>
					<div class="form-group">
						<label for="sinNumber" class="col-sm-2 control-label">Sin Number</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="sinNumber" placeholder="Enter Sin Number" name="sinNumber">
						</div>
					</div>
					<div class="form-group">
						<label for="ElectricMeterNo" class="col-sm-2 control-label">Electric Meter Number</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="ElectricMeterNo" placeholder="Enter Electric Meter Number" name="ElectricMeterNo">
						</div>
					</div>
					<div class="form-group">
						<label for="office" class="col-sm-2 control-label">Office</label>
						<div class="col-sm-10">
							<select id = "office" name="office">
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
						<label for="nodeLocation" class="col-sm-2 control-label">Node Location</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="nodeLocation" placeholder="Enter Node Location" name="nodelocation">
						</div>
					</div>
				<div class="modal-footer">
				                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				                  <button type="submit" class="btn btn-primary">Add Node</button>
				                </div>
				</form>
			</div>
	    </div>
	  </div>
	</div>
</div> <!-- end AddNodeModal -->
