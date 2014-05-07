<?php
include ("includes/database_master.inc.php");
if($_GET['type'] == 'cabinetNo'&&!empty($_GET['name_startsWith'])){
		$database_master = new DatabaseMaster();
		$query = "SELECT cabinetNo FROM cabinet WHERE cabinetNo LIKE '".strtoupper($_GET['name_startsWith'])."%' LIMIT 10";
    	$data = $database_master->querySearch($query, 'cabinetNo'); 
    echo json_encode($data);
}
?>