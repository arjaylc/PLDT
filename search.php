<?php
include ("includes/database_master.inc.php");
session_start();
	if($_GET['type'] == 'cabinetNo'&&!empty($_GET['name_startsWith'])){
			$database_master = new DatabaseMaster();
			$query = "SELECT cabinetNo FROM cabinet WHERE cabinetNo LIKE '".strtoupper($_GET['name_startsWith'])."%' LIMIT 10";
	    	$data = $database_master->querySearch($query, 'cabinetNo'); 
	    echo json_encode($data);
	}
	else if($_GET['type'] == 'employee'&&!empty($_GET['name_startsWith'])){
			$database_master = new DatabaseMaster();

			$query = "SELECT CONCAT(firstName, ' ', lastName, '(', idNo, ')') as employee FROM users 
			WHERE (firstName LIKE '".strtoupper($_GET['name_startsWith'])."%'
			OR lastName LIKE'".strtoupper($_GET['name_startsWith'])."%'
			OR CONCAT(firstName, ' ', lastName) LIKE'".strtoupper($_GET['name_startsWith'])."%'
			OR idNo LIKE '".strtoupper($_GET['name_startsWith'])."%') 
			AND NOT idNo=".$_SESSION['idNo']." LIMIT 10";
	    	$data = $database_master->querySearch($query, 'employee'); 
	    echo json_encode($data);
	} else if($_GET['type'] == 'nodeName'&&!empty($_GET['name_startsWith'])){
			$database_master = new DatabaseMaster();
			$query = "SELECT nodeName FROM node WHERE nodeName LIKE '".strtoupper($_GET['name_startsWith'])."%' LIMIT 10";
	    	$data = $database_master->querySearch($query, 'nodeName'); 
	    echo json_encode($data);
	}
?>