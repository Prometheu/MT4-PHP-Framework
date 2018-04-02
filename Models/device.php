<?php
	
	class Device{
		
		protected $hostname;
		protected $ip;
		protected $type;
		protected $manufacturer;
		protected $model;
		protected $active;
		protected $register_date;

		function __construct($hostname,$ip,$type,$manufacturer,$model,$active,$register_date){
			
			$this->hostname = $hostname;
			$this->ip = $ip;
			$this->type = $type;
			$this->manufacturer = $manufacturer;
			$this->model = $model;
			$this->active = $active;
			$this->register_date = $register_date;
		}

		public static function createTableDevides(){
			$con = Db::getInstance();						

			$sql = "CREATE TABLE devices (
                      	id int(11) AUTO_INCREMENT,
                      	hostname varchar(255) NOT NULL,
                      	ip varchar(255) NOT NULL,
                      	type varchar(255) NOT NULL,
                      	manufacturer varchar(255) NOT NULL,
                      	model varchar(255) NOT NULL,
                      	active tinyint(1),
                      	register_date date,
                      	last_register_update date,
                      	PRIMARY KEY  (id),
                      	UNIQUE (hostname),
                      	UNIQUE (ip)
                      	)";

            if ($con->query($sql) === TRUE) {
			    $bool = "Table created successfully";
			} else {
			    $bool = "Error creating table: " . $con->error;
			}

			$con->close();

			return $bool;
		}

		public static function all(){
			$list = [];
			$con = Db::getInstance();

			$sql = "SELECT * FROM devices";

			$res = $con->query($sql);

			if($res->num_rows > 0){
				while ($row = $res->fetch_assoc()){
					$list[] = array($row['id'],
									$row['hostname'],
									$row['ip'],
									$row['type'],
									$row['manufacturer'],
									$row['model'],
									$row['active'],
									$row['register_date'],
									$row['last_register_update']);
				}
			}else{
				$list = null;
			}
		
			return $list;
		}

		public static function host(){
			$host = [];
			$con = Db::getInstance();

			$sql = "SELECT hostname FROM devices";

			$res = $con->query($sql);

			if($res->num_rows > 0){
				while ($row = $res->fetch_assoc()){
					$host[] = $row['hostname'];
				}
			}else{
				$host = null;
			}
		
			return $host;
		}

		public static function register($hostname,$ip,$type,$manufacturer,$model,$active,$register_date,$last_register_update){

			$con = Db::getInstance();

			$insert = "INSERT INTO devices";

			$values = "(hostname,ip,type,manufacturer,model,active,register_date,last_register_update)
							VALUES
						('".$hostname."', 
						 '".$ip."',
						 '".$type."',
						 '".$manufacturer."',
						 '".$model."',
						 '".$active."',
						 '".$register_date."',
						 '".$last_register_update."')";

			$sql = $insert.$values;

			if($con->query($sql) === TRUE){
			    $bool = TRUE;
			    $message = "New record created successfully !";
			}else{
			    $bool = FALSE;
			    $message = $sql . "<br>" . $con->error;
			}

			$con->close();

			$return = array($bool,$message);
			return $return;

		}

		public static function alter($hostname,$ip,$type,$manufacturer,$model,$boolActive,$last_register_update){
			$con = Db::getInstance();

			$sql = "SELECT id FROM devices WHERE hostname='$hostname'";

			$res = $con->query($sql);

			if($res->num_rows > 0){
				while ($row = $res->fetch_assoc()){
					$whereToUpdate = $row['id'];
				}
			}

			$update = "UPDATE devices SET ip='$ip',
										  type='$type',
										  manufacturer='$manufacturer',
			                              model='$model',
			                              active='$boolActive',
			                              last_register_update='$last_register_update' WHERE id='$whereToUpdate' ";

			if ($con->query($update) === TRUE) {
			    $bool = TRUE;
			    $message = "Record updated successfully";
			} else {
				$bool = FALSE;
			    $message =  "Error updating record: " . $con->error;
			}

			$con->close();

			$return = array($bool,$message);
			return $return;
			
		}

		public static function delete($hostname){
			$con = Db::getInstance();

			$sql = "SELECT id FROM devices WHERE hostname='$hostname'";

			$res = $con->query($sql);

			if($res->num_rows > 0){
				while ($row = $res->fetch_assoc()){
					$whereToDelete = $row['id'];
				}
			}else{
				$bool = FALSE;
			    $message =  "No Data to Delete";
			    $return = array($bool,$message);
				return $return;
			}	

			$delete = "DELETE FROM devices WHERE id='$whereToDelete'"; 

			if ($con->query($delete) === TRUE) {
			    $bool = TRUE;
			    $message = "Record deleted successfully";
			} else {
				$bool = FALSE;
			    $message =  "Error deleting record: " . $con->error;
			}

			$con->close();

			$return = array($bool,$message);
			return $return;
		}
	}


?>