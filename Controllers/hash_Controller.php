<?php

	class hashController{
		function __construct(){}

		public function index(){
			require_once('Views/hash/index.php');
		}

		public function doHash(){
			$text = $_POST['textToHash'];
			$compare = $_POST['secondHash'];

			$arr = Hash::structure($text,$compare);

			$bool = $arr[0];
			$tbl = $arr[1];
			require_once('Views/hash/doHash.php');

		}	

	}

?>