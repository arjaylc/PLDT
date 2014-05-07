<?php
	require_once('includes/database_master.inc.php');
	require_once('includes/page_master.inc.php');
	require_once('includes/session_master.inc.php');

	$database_master = new DatabaseMaster();
	$page_master = new PageMaster();
	$session_master = new SessionMaster();
	$query = "DELETE FROM node WHERE nodeName='".$_GET['node']."'";
	if($database_master->queryUpdate($query)){
		$page_master->redirectUser('index.php?node_delete=success');
	} else{
		$page_master->redirectUser('index.php?node_delete=failed');
	}
?>