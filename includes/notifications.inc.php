<?php
	require('includes/reports_modal.inc.php');
?>

<div class="table-responsive" id="urgentTasks">
	<br>
	<h2> Accomplish as soon as possible </h2>
	<div class="panel panel-default">
		<!-- Default panel contents -->
		<div class="panel-heading">Tasks</div>
		<!-- Table -->
		<table class="table" id="urgentTasksTable">
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
				<tr>
					<td>one </td>
					<td> two </td>
					<td> three </td>
					<td> four </td>
					<td> five </td>
					<td> six </td>
				</tr>
			</tbody>
		</table>
	</div> <!-- panel-->
</div> <!-- table-->

<div class="table-responsive" id="pendingTasks">
	<br>
	<h2> Pending Tasks </h2>
	<div class="panel panel-default">
		<!-- Default panel contents -->
		<div class="panel-heading">Pending Tasks</div>
		<!-- Table -->
		<table class="table" id="pendingTasksTable">
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
				<tr>
					<td>one </td>
					<td> two </td>
					<td> three </td>
					<td> four </td>
					<td> five </td>
					<td> six </td>
				</tr>
			</tbody>
		</table>
	</div> <!-- panel -->
</div> <!-- table -->
	
<div class="table-responsive" id="ongoingTasks">
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
				<tr>
					<td>one </td>
					<td> two </td>
					<td> three </td>
					<td> four </td>
					<td> five </td>
					<td> six </td>
				</tr>
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
				<tr>
					<td>one </td>
					<td> two </td>
					<td> three </td>
					<td> <button class="btn btn-danger" data-toggle="modal" data-target="#reportsModal">Details</button> </td>
				</tr>
			</tbody>
		</table>
	</div> <!-- panel-->
</div> <!-- table-->