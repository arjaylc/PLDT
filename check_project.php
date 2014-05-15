<?php
	require_once('includes/database_master.inc.php');
	require_once('includes/page_master.inc.php');
	require_once('includes/session_master.inc.php');

	$database_master = new DatabaseMaster();
	$page_master = new PageMaster();
	$session_master = new SessionMaster();

	$title = $_POST['title'];
	$title = $database_master->escapeString($title);

	$idNo = $_POST['idNo'];
	$idNo = $database_master->escapeString($idNo);

	$nodeName = $_POST['nodeName'];
	$nodeName = $database_master->escapeString($nodeName);

	$cabinetNo = $_POST['cabinetNo'];
	$cabinetNo = $database_master->escapeString($cabinetNo);

	$deadlineDate = $_POST['deadlineDate'];
	$deadlineDate = $database_master->escapeString($deadlineDate);

	$projectType = $_POST['projectType'];
	$projectType = $database_master->escapeString($projectType);

	$faultDescription = $_POST['faultDescription'];
	$faultDescription = $database_master->escapeString($faultDescription);

	$tasks = $_POST['tasks'];
	$tasks = $database_master->escapeString($tasks);

	$redirectPage = 'index.php?';
	if($database_master->checkIdNo($idNo)){
		$errors['idNo'] = $idNo;
		$redirectPage.='id='.$idNo;
	}
	if($database_master->checkNodeName($nodeName)){
		$errors['nodeName'] = $nodeName;
		$redirectPage.='nodeName='.$nodeName;
	}
	if($database_master->checkCabinetNo($cabinetNo)){
		$errors['cabinetNo'] = $cabinetNo;
		$redirectPage.='cabinetNo='.$cabinetNo;
	}
	if(empty($title)||(empty($nodeName&&empty($cabinetNo))||empty($deadlineDate)){
		$errors['empty'] = "true";
		$redirectPage.='&error=empty';
	}

	if(empty($errors)){
		$query = "INSERT INTO users VALUES ('$idNo', '$user_type', SHA('$password'), '$firstName', '$lastName', 
			'$position', '$office')";
		if($database_master->queryUpdate($query)){
			$page_master->redirectUser('index.php?register=success&new_user='.$idNo);
		}
		else $page_master->redirectUser('index.php?register=failed');
	} else{
		$page_master->redirectUser($redirectPage);
	}
?>