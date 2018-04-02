<?php

class userController{
	public function index(){
		$b = $this->createifNotExistsTable(); 
		require_once("Views/user/create.php");
	}

	public function userToBase(){
		$user = $_POST["user"];
		$name = $_POST["name"];
		$lastname = $_POST["lastname"];
		$email = $_POST["email"];
		$password = hash("SHA512",$_POST["password"]);

		$bool = User::create($user,$name,$lastname,$email,$password);

		require_once("Views/user/create.php");
	}

	public function createifNotExistsTable(){
		$bool = User::createTableUser();
	}
}

?>