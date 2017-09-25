<?php
	session_start();
	require('db.class.php');
	
	class addUser extends Database{
		public function checkdb($table,$email){
			$count = 0;
			$condition = "email='".$email."'";
			$sql = "SELECT * FROM ".$table." WHERE ".$condition;
			$statement = $this->conn->prepare($sql);
			if($statement->execute()){
				while($row = $statement->fetch()){
					$count = $count+1;
				}
				if($count>0){
					return true;
				}
			}else{
				return false;
			}
		}
		public function add($table,$fields){
			$sql = "INSERT INTO ".$table." (".implode(",",array_keys($fields)).") VALUES ('".implode("','",array_values($fields))."')";
			
			$statement = $this->conn->prepare($sql);
			if($statement->execute()){
				return true;
			}else{
				return false;
			}
		}
	}
?>