<?php
  class Db {
    private static $instance = NULL;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance(){
      if (!isset(self::$instance)){
        $server = "localhost";
        $user = "root";
        $pass = "myroot";
        $db = "base";
        self::$instance = new mysqli($server,$user,$pass,$db);
      }
      return self::$instance;
    }
  }
?>