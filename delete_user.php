<?php
	require_once('includes/database_master.inc.php');
	require_once('includes/page_master.inc.php');
	require_once('includes/session_master.inc.php');

	$database_master = new DatabaseMaster();
	$page_master = new PageMaster();
	$session_master = new SessionMaster();
	$query = "DELETE FROM users WHERE idNo=".$_GET['idNo'];
	if($database_master->queryUpdate($query)){
		$page_master->redirectUser('index.php?user_delete=success&user='.$_GET['idNo']);
	} else{
		$page_master->redirectUser('index.php?user_delete=failed');
	}
?>