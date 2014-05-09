<?php
	require_once('includes/database_master.inc.php');
	require_once('includes/page_master.inc.php');
	require_once('includes/session_master.inc.php');

	$database_master = new DatabaseMaster();
	$page_master = new PageMaster();
	$session_master = new SessionMaster();

	$idNo = $_POST['idno'];
	$idNo = $database_master->escapeString($idNo);

	$firstName = $_POST['firstname'];
	$firstName = $database_master->escapeString($firstName);

	$lastName = $_POST['lastname'];
	$lastName = $database_master->escapeString($lastName);

	$password = $_POST['password'];
	$password = $database_master->escapeString($password);

	$repass = $_POST['repass'];
	$repass = $database_master->escapeString($repass);

	$user_type = $_POST['user_type'];
	$user_type = $database_master->escapeString($user_type);

	$office = $_POST['office'];
	$office = $database_master->escapeString($office);

	$position = $_POST['position'];
	$position = $database_master->escapeString($position);

	$redirectPage = 'index.php?';
<<<<<<< HEAD
	if(!$database_master->checkIdNo($idNo)){
		$errors['idNo'] = $idNo;
		$redirectPage.='id='.$idNo;
	}
=======
>>>>>>> 8fbc03dec422aab78b2c56e6fc61be8230e1374d
	if($password!=$repass){
		$errors['password'] = "nomatch";
		$redirectPage.='password=nomatch';
	}

	if(empty($idNo)||empty($password)||empty($repass)||empty($user_type)||empty($position)){
		$errors['error'] = "empty";
		$redirectPage.='&error=empty';
	}
	if(!$database_master->checkUser_type($user_type)){
		$errors['user_type'] = $user_type;
		$redirectPage.='&user_type='.$user_type;
	}
	if(!$database_master->checkOffice($office)){
		$errors['office'] = $office;
		$redirectPage.='&office='.$office;
	}

	if(empty($errors)){
		$query = "INSERT INTO users VALUES ('$idNo', '$user_type', SHA('$password'), '$firstName', '$lastName', 
			'$position', '$office')";
		if($database_master->queryUpdate($query)){
<<<<<<< HEAD
			$page_master->redirectUser('index.php?register=success&new_user='.$idNo);
=======
			$page_master->redirectUser();
>>>>>>> 8fbc03dec422aab78b2c56e6fc61be8230e1374d
		}
		else $page_master->redirectUser('index.php?error=database');
	} else{
		$page_master->redirectUser($redirectPage);
	}
?>