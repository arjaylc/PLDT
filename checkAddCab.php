<?php
	require_once('includes/database_master.inc.php');
	require_once('includes/session_master.inc.php');
	require_once('includes/page_master.inc.php');

	$database_master = new DatabaseMaster();
	$page_master = new PageMaster();
	$session_master = new SessionMaster();

	$cabinetNo = $_POST['cabinetNo'];
	$cabinetType = $_POST['cabinetType'];
	$cabinetNo = $database_master->escapeString($cabinetNo);
	$cabinetType = $database_master->escapeString($cabinetType);
	$query = "INSERT INTO cabinet (cabinetNo, cabinet_type) VALUES ('$cabinetNo', '$cabinetType')";
	if($database_master->queryUpdate($query)){
			$page_master->redirectUser();
		}
		else $page_master->redirectUser('index.php?error=database');
?>