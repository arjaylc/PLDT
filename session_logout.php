<?php
	require_once('includes/database_master.inc.php');
	require_once('includes/page_master.inc.php');
	require_once('includes/session_master.inc.php');

	$database_master = new DatabaseMaster();
	$session_master = new SessionMaster();
	$session_master->logUserOut();
	$page_master = new PageMaster();
	$page_master->redirectUser();
?>