<?php

class User{
	public static function createTableUser(){
		$con = Db::getInstance();						

		$sql = "CREATE TABLE user (
                      	id int(11) NOT NULL AUTO_INCREMENT,
                      	name varchar(80) NOT NULL,
                      	lastname varchar(80) NOT NULL,
                      	email varchar(80) NOT NULL,
                      	user varchar(50) NOT NULL,
                      	password char(128) NOT NULL,
                      	PRIMARY KEY  (id),
                      	UNIQUE (email),
                      	UNIQUE (user)
                      	)";

        if ($con->query($sql) === TRUE) {
			$bool = "Table created successfully";
		} else {
			$bool = "Error creating table: " . $con->error;
		}

		$con->close();

		return $bool;
	}

	public static function create($user,$name,$lastname,$email,$password){
		$con = Db::getInstance();

		$insert = "INSERT INTO user";

		$values = "(name,lastname,email,user,password)
							VALUES
						('".$name."', 
						 '".$lastname."',
						 '".$email."',
						 '".$user."',
						 '".$password."')";

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
}

?>