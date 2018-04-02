<?php
	class devicesController{

		public function createifNotExistsTable(){

			$bool = Device::createTableDevides();

		}

		public function index(){
			require_once('Views/devices/index.php');
		}

		public function listDevices(){
			$devices = Device::all();
			require_once('Views/devices/list.php');
		}

		public function registerDevice(){
			$this->createifNotExistsTable();
			require_once('Views/devices/register.php');
		}

		public function registerOnBase(){
			date_default_timezone_set('America/Sao_Paulo');

			$hostname = $_POST['hostname'];
			$ip = $_POST['ip'];
			$type = $_POST['type'];
			$manufacturer = $_POST['manufacturer'];
			$model = $_POST['model'];
			$active = $_POST['active'];

			if($active == "TRUE"){
				$boolActive = 1;
			}else{
				$boolActive = 0;
			}

			$register_date = date('Y-m-d');
			$last_register_update = $register_date;

			$bool = Device::register($hostname,$ip,$type,$manufacturer,$model,$boolActive,$register_date,$last_register_update);
			require_once('Views/devices/register.php');

		}

		public function alterDevice(){
			$devices = Device::all();
			require_once('Views/devices/alter.php');
		}

		public function alterDeviceOnBase(){
			date_default_timezone_set('America/Sao_Paulo');

			$devices = Device::all();
			$hostname = $_POST['hostname'];
			$ip = $_POST['ip'];
			$type = $_POST['type'];
			$manufacturer = $_POST['manufacturer'];
			$model = $_POST['model'];
			$active = $_POST['active'];

			if($active == "TRUE"){
				$boolActive = 1;
			}else{
				$boolActive = 0;
			}

			$last_register_update = date('Y-m-d');

			$bool = Device::alter($hostname,$ip,$type,$manufacturer,$model,$boolActive,$last_register_update);
			require_once('Views/devices/alter.php');
		}

		public function removeDevice(){
			$devices = Device::all();
			require_once('Views/devices/remove.php');
		}

		public function removeDeviceOnBase(){			

			$hostname = $_POST['hostname'];

			$bool = Device::delete($hostname);

			require_once('Views/devices/index.php');
		}

		
	}

?>