<?php
	require_once('includes/database_master.inc.php');
	require_once('includes/session_master.inc.php');
	require_once('includes/page_master.inc.php');

	$database_master = new DatabaseMaster();
	$page_master = new PageMaster();
	$session_master = new SessionMaster();

	$cabinetNo = $_POST['cabinetNo'];
	$nodeName = $_POST['nodeName'];
	$nodeType = $_POST['nodeType'];
	$sinNumber = $_POST['sinNumber'];
	$ElectricMeterNo = $_POST['ElectricMeterNo'];
	$office = $_POST['office'];
	$nodeLocation = $_POST['nodelocation'];
	$cabinetNo = $database_master->escapeString($cabinetNo);
	$nodeName = $database_master->escapeString($nodeName);
	$sinNumber = $database_master->escapeString($sinNumber);
	$ElectricMeterNo = $database_master->escapeString($ElectricMeterNo);
	$office = $database_master->escapeString($office);
	$nodeLocation = $database_master->escapeString($nodeLocation);
	$nodeName = $database_master->escapeString($nodeName);
	$query = "INSERT INTO node (nodeName, sinNo, electricMeterNo, node_type, cabinetNo, central_officeName, nodeLocation)
			 VALUES ('$nodeName','$sinNumber', '$ElectricMeterNo','$node_type','$cabinetNo','$office','$nodeLocation')";
	if($database_master->queryUpdate($query)){
			$page_master->redirectUser('index.php?add_node=success');
		}
		else $page_master->redirectUser('index.php?add_node=failed');
?>