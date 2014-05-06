<div id="register-overlay" class = "form">
	<form class="form-horizontal" action = "check_register.php" method="POST" role="form">
		<div class="form-group">
			<label for="firstname" class="col-sm-2 control-label">First Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="firstname" placeholder="Enter First Name">
			</div>
		</div>
		<div class="form-group">
			<label for="lastname" class="col-sm-2 control-label">Last Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="lastname" placeholder="Enter Last Name">
			</div>
		</div>
		<div class="form-group">
			<label for="idno" class="col-sm-2 control-label">ID Number</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="idno" placeholder="ID Number">
			</div>
		</div>
		<div class="form-group">
			<label for="password" class="col-sm-2 control-label">Password</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" id="password" placeholder="Password">
			</div>
		</div>
		<div class="form-group">
			<label for="usertype" class="col-sm-2 control-label">User Type</label>
			<div class="col-sm-10">
				<select>
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
				<select>
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
			<label for="lastname" class="col-sm-2 control-label">Position</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="position" placeholder="Enter Position">
			</div>
		</div>
	</form>
</div>
