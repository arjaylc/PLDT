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
		
		public function checkEmail($email){
			$query = "SELECT email_address FROM users WHERE email_address='$email'";
			$result = mysqli_query($this->databaseConnection, $query);
			if($result){
				if(mysqli_num_rows($result)) return false;
				else return true;
			}
			else return false;
		}
		public function checkPassword($email, $password){
			$query = "SELECT password FROM users WHERE password=SHA('$password') AND email_address = '$email'";
			$result = mysqli_query($this->databaseConnection, $query);
			if($result){
				if(mysqli_num_rows($result)) return true;
				else return false;
			}
			else return false;
		}

		public function checkProvince($provinces){
			$query = "SELECT province FROM provinces WHERE province='$provinces'";
			$result = mysqli_query($this->databaseConnection, $query);
			if($result){
				if(mysqli_num_rows($result)) return true;
				else return false;
			}
			else return false;
		}

	}
?>