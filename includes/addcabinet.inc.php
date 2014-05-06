<!-- AddCabinetModal -->
<div class="modal fade" id="AddCabinetModal" tabindex="-1" role="dialog" aria-labelledby="AddCabinetModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
	    <div class="modal-header">
	      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	      <h2>Add Cabinet</h2>
	    </div>
	        <div class="modal-body"><div id="register-overlay" class = "form">
				<form class="form-horizontal" role="form" action="checkAddCab.php" method="POST">
					<div class="form-group">
						<label for="cabinetNo" class="col-sm-2 control-label">Cabinet Number</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="cabinetNo" name="cabinetNo" placeholder="Enter Cabinet Number">
						</div>
					</div>
					<div class="form-group">
						<label for="cabinetType" class="col-sm-2 control-label">Cabinet Type</label>
						<div class="col-sm-10">
							<select name="cabinetType">
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
				<div class="modal-footer">
	              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	              <button type="submit" class="btn btn-primary">Add Cabinet</button>
	            </div>
				</form>
			</div>
	    </div>
	  </div>
	</div>
</div> <!-- end cabinet modal -->