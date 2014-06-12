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

	$idNoFrom = $_SESSION['idNo'];
	$idNoFrom = $database_master->escapeString($idNoFrom);

	if(isset($_POST['nodeName'])){
		$nodeName = $_POST['nodeName'];
		$nodeName = "'".$database_master->escapeString($nodeName)."'";
		$cabinetNo = 'null';
	} else{
		$cabinetNo = $_POST['cabinetNo'];
		$cabinetNo = "'".$database_master->escapeString($cabinetNo)."'";
		$nodeName = 'null';
	}

	$faultDescription = $_POST['faultDescription'];
	$faultDescription = $database_master->escapeString($faultDescription);

	$redirectPage = 'index.php?';
	if($database_master->checkIdNo($idNo)){
		$errors['idNo'] = $idNo;
		$redirectPage.='id='.$idNo;
	}
	if(isset($_POST['nodeName'])&&$database_master->checkNodeName($nodeName)){
		$errors['nodeName'] = $nodeName;
		$redirectPage.='nodeName='.$nodeName;
	}
	if(isset($_POST['cabinetNo'])&&$database_master->checkCabinetNo($cabinetNo)){
		$errors['cabinetNo'] = $cabinetNo;
		$redirectPage.='cabinetNo='.$cabinetNo;
	}
	if(empty($title)||(empty($nodeName)&&empty($cabinetNo))){
		$errors['empty'] = "true";
		$redirectPage.='&error=empty';
	}

	if(empty($errors)){
		$query = "INSERT INTO reports VALUES((SELECT MAX(reportId)+1 FROM reports as r),
		 '$title',
		 $idNo, 
		 $idNoFrom, 
		 $nodeName, 
		 $cabinetNo, '$faultDescription', now(), 'pending')";
		if($database_master->queryUpdate($query)){
			$page_master->redirectUser('index.php?add_report=success');
		}
		else $page_master->redirectUser('index.php?add_report=failed');
	} else{
		$page_master->redirectUser($redirectPage);
	}
?>