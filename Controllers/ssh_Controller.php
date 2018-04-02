<?php

class SSH_Controller{
	public function index(){		
		$devices = Device::all();
		require_once("Views/ssh/selectDevice.php");
	}

	public function respond(){
		$login = $_POST["user"];
		$password = hash("SHA512",$_POST["password"]);
		$device = $_POST["device"];

		$auth = SSH::authenticate($login,$password);

		$sshCon = SSH::connect($device,$auth);


		if(!$auth){
			$devices = Device::all();
			$bool = "User and/or Password Incorrect !";
			require_once("Views/ssh/selectDevice.php");
		}else{	
			if(!$sshCon){
				$bool = "SSH Connection Failed !";
				require_once("Views/ssh/selectDevice.php");
			}else{
				$device = $_POST["device"];
				require_once("Views/ssh/shell.php");
			}
		}
	}

	public function sshcommands(){
		$device = $_POST["device"];
		require_once("Views/ssh/shell.php");
	}
	
}

?>