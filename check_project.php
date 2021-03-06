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
	if(isset($_POST['deadlineDate'])){
		$deadlineDate = $_POST['deadlineDate'];
		$deadlineDate = $database_master->escapeString($deadlineDate);
		$deadlineDate= strtotime($deadlineDate);
		$deadlineDate = date('Y-m-d',$deadlineDate);
	} else{
		$deadlineDate = $_POST['dlYear'].'-'.$_POST['dlMonth'].'-'.$_POST['dlDay'];
		$deadlineDate = $database_master->escapeString($deadlineDate);
	}
	if($_POST['dlCheck']=="on"){
		if(isset($_POST['deadlineTime'])){
			$deadlineTime = $_POST['deadlineTime'];
		} else{
			$deadlineTime = $_POST['dlHour'].':'.$_POST['dlMins'].' '.$_POST['dlTime'];
		}
		$deadlineTime= strtotime($deadlineTime);
		$deadlineTime = "'".date('H:i:s',$deadlineTime)."'";
	} else{
		$deadlineTime = "null";
	}

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
	if(isset($_POST['nodeName'])&&$database_master->checkNodeName($nodeName)){
		$errors['nodeName'] = $nodeName;
		$redirectPage.='nodeName='.$nodeName;
	}
	if(isset($_POST['cabinetNo'])&&$database_master->checkCabinetNo($cabinetNo)){
		$errors['cabinetNo'] = $cabinetNo;
		$redirectPage.='cabinetNo='.$cabinetNo;
	}
	if(empty($title)||(empty($nodeName)&&empty($cabinetNo))||empty($deadlineDate)){
		$errors['empty'] = "true";
		$redirectPage.='&error=empty';
	}

	if(empty($errors)){
		$query = "INSERT INTO projects VALUES((SELECT MAX(projectId)+1 FROM projects as p),
		 '$title',
		 $idNo, 
		 $idNoFrom, 
		 $nodeName, 
		 $cabinetNo, 
		 '$deadlineDate', 
		 $deadlineTime,
		 '$projectType', '$faultDescription', '$tasks', null, null, 'pending')";
		if($database_master->queryUpdate($query)){
			$page_master->redirectUser('index.php?add_project=success');
		}
		else $page_master->redirectUser('index.php?add_project=failed');
	} else{
		$page_master->redirectUser($redirectPage);
	}
?>