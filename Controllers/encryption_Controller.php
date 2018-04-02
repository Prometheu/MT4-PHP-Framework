<?php

	class encryptionController{
		
		function __construct(){}

		public function index(){
			require_once('Views/encrypt/index.php');
		}

		public function encrypt(){
			$text = trim($_POST['textToEncrypt']);
			
			$enc = Encryption::encrypt($text);
			
			$sizeE = sizeof($enc);
			$inputName = array("CaesarCipher","AES","TheThird");

			require_once("Views/encrypt/encrypt.php");
		
		}

		public function decrypt(){
			
			$caesar = $_POST["CaesarCipher"];
			$aes = $_POST["AES"];
			$thethird = $_POST["TheThird"];

			$decCaesar = Encryption::decrypt("CaesarCipher",$caesar);
			$decAES = Encryption::decrypt("AES",$aes);
			$decTheThird = Encryption::decrypt("TheThird",$thethird);

			$dec = array(array("CaesarCipher",$caesar,$decCaesar),array("AES256 with Salt",$aes,$decAES),array("The Third",$thethird,$decTheThird));
			$sizeD = sizeof($dec);
			$inputName = array("CaesarCipher","AES","TheThird");

			require_once("Views/encrypt/decrypt.php");
		
		}

	}	

?>