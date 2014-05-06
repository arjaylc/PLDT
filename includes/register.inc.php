<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
	    <div class="modal-header">
	      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	      <h2>Add User</h2>
	    </div>
	    <div class="modal-body">
	    	<div id="register-overlay" class = "form">
				<form class="form-horizontal" action = "check_register.php" method="POST" role="form">
					<div class="form-group">
						<label for="firstname" class="col-sm-2 control-label">First Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="firstname" id="firstname" 
							required placeholder="Enter First Name">
						</div>
					</div>
					<div class="form-group">
						<label for="lastname" class="col-sm-2 control-label">Last Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="lastname" id="lastname" 
							required placeholder="Enter Last Name">
						</div>
					</div>
					<div class="form-group">
						<label for="idno" class="col-sm-2 control-label">ID Number</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="idno" id="idno" 
							required placeholder="ID Number">
						</div>
					</div>
					<div class="form-group">
						<label for="password" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" name="password" id="password" 
							required placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<label for="repass" class="col-sm-2 control-label">Retype Password</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" name="repass" id="repass" 
							required placeholder="Retype Password">
						</div>
					</div>
					<div class="form-group">
						<label for="usertype" class="col-sm-2 control-label">User Type</label>
						<div class="col-sm-10">
							<select name = "user_type" required>
								<?php
							        require_once('includes/database_master.inc.php');
							        $database_master = new DatabaseMaster();
									$query = "SELECT user_type FROM privileges";
									$queryResult = $database_master->querySelect($query);
									foreach($queryResult as $row){?>
										<option><?php echo $row['user_type']?></option>
								<?php
									}
								?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="office" class="col-sm-2 control-label">Office</label>
						<div class="col-sm-10">
							<select name = "office">
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
						<label for="position" class="col-sm-2 control-label">Position</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="position" id="position" 
							required placeholder="Enter Position">
						</div>
					</div>
				    <div class="modal-footer">
				      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      <button type="submit" class="btn btn-primary">Save changes</button>
				    </div>
				</form>
			</div>
	    </div>
	  </div>
	</div>
</div>
