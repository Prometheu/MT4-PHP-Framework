<?php 

$user = $_POST['user'];
$password = hash("SHA512",$_POST["password"]);

$con = Db::getInstance();

$sql = "SELECT * FROM user WHERE user='$user' AND password='$password'";

$res = $con->query($sql);

if(mysqli_num_rows ($res) > 0 ){
	$_SESSION['user'] = $user;
	$_SESSION['password'] = $password;
	header('?controller=base&action=home');
}else{
    unset ($_SESSION['user']);
    unset ($_SESSION['password']);
    header('?controller=base&action=login');    
}
 
?>