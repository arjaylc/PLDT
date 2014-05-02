<?php
	require_once('includes/database_master.inc.php');
	require_once('includes/page_master.inc.php');
	require_once('includes/session_master.inc.php');

	$database_master = new DatabaseMaster();
	$page_master = new PageMaster();

	$idNo = $_POST['idNo'];
	$idNo = $database_master->escapeString($idNo);

	$password = $_POST['password'];
	$password = $database_master->escapeString($password);

	$query = "SELECT idNo FROM users WHERE idNo = '$idNo' AND password = SHA('$password')";

	$queryResult = $database_master->querySelect($query);

	if(is_array($queryResult) && count($queryResult)){
		$session_master = new SessionMaster();
		$session_master->logUserIn($idNo);
		$page_master->redirectUser("index.php");
	}
	else $page_master->redirectUser('index.php?error=login');

?>
<<<<<<< HEAD

highlight_file

=======
blH
>>>>>>> 75bc087568821b091df8b2932c98db8a47939d7c
