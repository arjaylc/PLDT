<?php
include ("includes/database_master.inc.php");
if($_GET['type'] == 'province'&&!empty($_GET['name_startsWith'])){
		$database_master = new DatabaseMaster();
		$query = "SELECT  FROM provinces where province LIKE '%".strtoupper($_GET['name_startsWith'])."%' LIMIT 3";
    	$data = $database_master->querySearch($query, 'province'); 
    echo json_encode($data);
}
?>