<?php
include "function.php";
use PHPMailer\PHPMailer\PHPMailer;

$alias = $_GET['alias'];
if($alias == 'admin'){
	include "login.php";
	
}else{
		if ($_SESSION["user"]=='admin') {
				if ($alias == '') {$alias = 'dashboard';}else {
					$alias = $alias;}
					// admin switch 
					switch ($alias) {
							case "logout_admin":
					session_destroy();
					header('location:home');
					
					break;
					}
					// end switch admin
				include('admin_path/index.php');
			}
			// end if it's admin
		else{

		if ($alias == '') {$alias = 'home';}else {
		$alias = $alias;}
				// user switch 
		switch ($alias) {

			case "login_admin":

			if($database->has("userinfo",["AND" => ["OR"=>["username"=>$_POST['username'],"email"=>$_POST['username']], "password"=>md5($_POST['pass'])]])){

							$_SESSION["user"] = 'admin';
							header('location:dashboard');
						}else{
							header('location:admin');
						}
					
					

					break;
				
					case "home":

					break;
					case "news":
					
if ($_GET['page']==''){$_GET['page']=1;}
	$page = ($_GET['page']-1)*8;
	$newslist = $database->select("news","*",["ORDER"=>["date_time"=>"DESC"],"status"=>"y","LIMIT"=>[$page,8]]);
	$allnews = $database->count("news","*",["status"=>"y"]);

						
					break;
					case "singlenews":
						$news = $database->get("news","*",["id"=>$_GET["id"]]);
						$right_news = $database->select("news","*",["id[!]"=>$_GET['id'],"status"=>'y',"LIMIT"=>4,"ORDER"=>["date_time"=>"DESC"]]);
						
					break;
				}
				// end switch 

				include 'app/index.php';
		}
		//end if not admin

}
// end check admin



?>