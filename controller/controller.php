<?php

$alias = $_GET['alias'];
if($alias == 'admin'){
	include "login.php";
	
}else{
		if ($_SESSION["user"]=='admin') {
				if ($alias == '') {$alias = 'dashboard';}else {
					$alias = $alias;}
				include('admin_path/index.php');
			}
		else{

				if ($alias == '') {$alias = 'home';}else {
					$alias = $alias;}
				include 'app/index.php';
		}

}


switch ($alias) {

	case "login_admin":

		if($database->has("userinfo",["AND" => ["OR"=>["username"=>$_POST['username'],"email"=>$_POST['username']], "password"=>md5($_POST['pass'])]])){

			$_SESSION["user"] = 'admin';
			header('location:dashboard');
		}else{
			header('location:admin');
		}
	
	

	break;
	case "logout_admin":
	session_destroy();
	location.reload();
	break;
}
// end switch 
?>