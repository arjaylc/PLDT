<?php
	require('includes/reports_modal.inc.php');
?>


<div class="table-responsive" id="tasks">
	<br>
	<h2> Ongoing Tasks </h2>
	<div class="panel panel-default">
		<!-- Default panel contents -->
		<div class="panel-heading">Ongoing Tasks</div>
		<!-- Table -->
		<table class="table" id="ongoingTasksTable">
			<thead>
				<tr>
					<th>Project Title</th>
					<th>Node Name</th>
					<th>Deadline</th>
					<th>Type of Maintenance</th>
					<th>Date Started</th>
					<th>Date Accomplished</th>
				</tr>
			</thead>
			<tbody>
				<?php require('includes/tasks_table.inc.php') ?>
			</tbody>
		</table>
	</div> <!-- panel-->
</div> <!-- table-->

<div class="table-responsive" id="reports">
	<br>
	<h2> Reports </h2>
	<div class="panel panel-default">
		<!-- Default panel contents -->
		<div class="panel-heading">Reports</div>
		<!-- Table -->
		<table class="table" id="reportsTable">
			<thead>
				<tr>
					<th>Report Title</th>
					<th>Reported By</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
				<?php require('includes/reports_table.inc.php') ?>
			</tbody>
		</table>
	</div> <!-- panel-->
</div> <!-- table-->