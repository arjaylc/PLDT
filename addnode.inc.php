<div id="register-overlay" class = "form">
	<form class="form-horizontal" role="form" action="checkAddNode.php" method="POST">
		<div class="form-group">
			<label for="nodename" class="col-sm-2 control-label">Node Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="nodeName" placeholder="Enter Node Name" name="nodeName">
			</div>
		</div>
		<div class="form-group">
			<label for="nodeType" class="col-sm-2 control-label">Node Type</label>
			<div class="col-sm-10">
				<select name="nodeType">
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
			<label for="cabinetnumber" class="col-sm-2 control-label">Cabinet Number</label>
			<div class="col-sm-10">
				<select name="cabinetNo">
					<?php
				        require_once('includes/database_master.inc.php');
				        $database_master = new DatabaseMaster();
						$query = "SELECT cabinetNo FROM cabinet";
						$queryResult = $database_master->querySelect($query);
						foreach($queryResult as $row){?>
							<option><?php echo $row['cabinetNo']?></option>
					<?php
						}
					?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="sinNumber" class="col-sm-2 control-label">Sin Number</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="sinNumber" placeholder="Enter Sin Number" name="sinNumber">
			</div>
		</div>
		<div class="form-group">
			<label for="electricmeterno" class="col-sm-2 control-label">Electric Meter Number</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="ElectricMeterNo" placeholder="Enter Electric Meter Number" name="ElectricMeterNo">
			</div>
		</div>
		<div class="form-group">
			<label for="office" class="col-sm-2 control-label">Office</label>
			<div class="col-sm-10">
				<select name="office">
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
			<label for="nodelocation" class="col-sm-2 control-label">Node Location</label>
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