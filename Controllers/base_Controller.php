<?php
	class baseController{

		public function login(){
			require_once('Views/login.php');
		}

		public function auth(){
			require_once('ope.php');
			if( isset($_SESSION['user']) && isset($_SESSION['password']) ){
				require_once('Views/home.php');
			}else{
				$bool = "Wrong user or password !!!";
				require_once('Views/login.php');
			}
		}

		public function home(){
			require_once('Views/home.php');
		}

		public function error() {
      		require_once('Views/error.php');
    	}

    	public function teste(){
    		require_once('Views/teste.php');
    	}
	}

?>