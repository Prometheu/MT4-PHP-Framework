<?php

class SSH{
	public static function authenticate($l,$p){
		$con = Db::getInstance();

		$sql = "SELECT password FROM user WHERE user='$l'";

		$res = $con->query($sql);

		if($res->num_rows > 0){
			while ($row = $res->fetch_assoc()){
				$reqPass = $row['password'];
			}
		}

		if($reqPass === $p)
			return TRUE;
		else
			return FALSE;
		
	}

	public static function connect($host,$auth){
		
		if($auth){
			$boolHost = SSH::checkHost($host);
			return TRUE;
		}else{
			return FALSE;
		}

	}

	public static function checkHost($host){
		$hostList = Device::host($host);
		
		$size = sizeof($hostList);
		$bool = FALSE;
		while ($size) {
			
			if($host == $hostList[$size - 1]){
				$bool = TRUE;
				break;
			}

			$size--;
		}

		return $bool;

	}
}

?>