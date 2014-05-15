<?php
	class DatabaseMaster{
		private $databaseConnection;
		function __construct(){
			$this->connectDatabase();
		}

		private function connectDatabase(){
			$host = 'localhost';
			$user = 'root';
			$password = '';
			$db_name = 'egmm';
			$this->databaseConnection = mysqli_connect($host, $user, $password, $db_name); 
			mysqli_set_charset($this->databaseConnection, 'utf8');
		}
		public function querySelect($query){
			$result = mysqli_query($this->databaseConnection, $query);
			if($result){
				$resultData = array();
				$rowCount = mysqli_num_rows($result);
				if($rowCount >= 1){
					if($rowCount == 1)
						$resultData[] = mysqli_fetch_array($result, MYSQLI_ASSOC);
					else{
						while($rowData = mysqli_fetch_array($result, MYSQLI_ASSOC))
							$resultData[] = $rowData;
					}
					return $resultData;
				}
				else return $resultData;
			}
			else return false;
		}
		public function querySearch($query, $rowName){
			$result = mysqli_query($this->databaseConnection, $query);
			$data = array();
   			while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        		array_push($data, $row[$rowName]);    
    		}
    		return $data;
		}

		public function queryUpdate($query){
			$result = mysqli_query($this->databaseConnection, $query);
			if($result)	return true;	
			else return false;
		}
		public function escapeString($string){
			$string = mysqli_real_escape_string($this->databaseConnection, trim($string));
			return $string;
		}
		
		public function checkIDNo($idNo){
			$query = "SELECT idNo FROM users WHERE idNo='$idNo'";
			$result = mysqli_query($this->databaseConnection, $query);
			if($result){
				if(mysqli_num_rows($result)) return false;
				else return true;
			}
			else return false;
		}
		public function checkNodeName($nodeName){
			$query = "SELECT nodeName FROM node WHERE nodeName='$nodeName'";
			$result = mysqli_query($this->databaseConnection, $query);
			if($result){
				if(mysqli_num_rows($result)) return false;
				else return true;
			}
			else return false;
		}

		public function checkCabinetNo($cabinetNo){
			$query = "SELECT cabinetNo FROM cabinet WHERE cabinetNo='$cabinetNo'";
			$result = mysqli_query($this->databaseConnection, $query);
			if($result){
				if(mysqli_num_rows($result)) return false;
				else return true;
			}
			else return false;
		}

		public function checkPassword($idNo, $password){
			$query = "SELECT password FROM users WHERE password=SHA('$password') AND idNo = '$idNo'";
			$result = mysqli_query($this->databaseConnection, $query);
			if($result){
				if(mysqli_num_rows($result)) return true;
				else return false;
			}
			else return false;
		}

		public function checkUser_type($user_type){
			$query = "SELECT user_type FROM privileges WHERE user_type='$user_type'";
			$result = mysqli_query($this->databaseConnection, $query);
			if($result){
				if(mysqli_num_rows($result)) return true;
				else return false;
			}
			else return false;
		}

		public function checkOffice($office){
			$query = "SELECT central_officeName FROM central_offices WHERE central_officeName='$office'";
			$result = mysqli_query($this->databaseConnection, $query);
			if($result){
				if(mysqli_num_rows($result)) return true;
				else return false;
			}
			else return false;
		}

	}
?>