<?php
	require_once('includes/session_master.inc.php');
	$session_master = new SessionMaster();
	if($session_master->isLoggedIn()){
		require("includes/home.inc.php");
	} else{
		require("includes/login.inc.php");

	}
?>