<div id="register-overlay" class = "form">
	<form class="form-horizontal" role="form">
		<div class="form-group">
			<label for="cabinetno" class="col-sm-2 control-label">Cabinet Number</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="nodeName" placeholder="Enter Cabinet Number">
			</div>
		</div>
		<div class="form-group">
			<label for="cabinettype" class="col-sm-2 control-label">Cabinet Type</label>
			<div class="col-sm-10">
				<select>
					<?php
				        require_once('includes/database_master.inc.php');
				        $database_master = new DatabaseMaster();
						$query = "SELECT cabinet_types FROM cabinet_types";
						$queryResult = $database_master->querySelect($query);
						foreach($queryResult as $row){?>
							<option><?php echo $row['cabinet_types']?></option>
					<?php
						}
					?>
				</select>
			</div>
		</div>

	</form>
</div>
