<?php
	session_start();
	class SessionMaster{
		public function isLoggedIn(){
			if(isset($_SESSION['logged'])){
				if($_SESSION['logged'] == true)
					return true;
				else return false;
			}
			else return false;
		}
		public function logUserIn($idNo){
			$_SESSION['idNo']= $idNo;
			$_SESSION['logged']= true;
		}

		public function logUserOut(){
			unset($_SESSION['idNo']);
			unset($_SESSION['logged']);
			$_SESSION = array();
		}
	}
?>