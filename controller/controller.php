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
					case"save_step1":
					$multi = $_POST['multiple-number']== 0 || $_POST['multiple-number']==''?1:$_POST['multiple-number'];
$_SESSION['booking1']= array(["pass"=>$_POST['att_pass'],
  "multi"=>$multi,
  "spouse"=>$_POST['multiple-spouse'],
  "fixed"=>$_POST['multiple-table']
]);

           header("location:book_step2");
					break;
					case"save_step2":
					$_SESSION['booking2'] = array(["platinum"=>$_POST['platinum'],
"gold"=>$_POST['gold'],
"welcome"=>$_POST['welcome'],
"meeting"=>$_POST['meeting'],
"silver"=>$_POST['silver'],
"coffee"=>$_POST['coffee'],
"beer"=>$_POST['beer'],
"shirt"=>$_POST['shirt'],
"landyard"=>$_POST['landyard']
]);
$_SESSION['booking_adver'] = array(["insideFront"=>$_POST['insideFront'],
"insideBack"=>$_POST['insideBack'],
"spread"=>$_POST['spread'],
"fullPage"=>$_POST['fullPage'],
"halfPage"=>$_POST['halfPage'],
"quarterPage"=>$_POST['quarterPage']
]);
print_r($_SESSION['booking2']);
header("location:book_step3");
					break;
					case"save_step3":
					$_SESSION['booking3']= array([
"attendee_title"=>$_POST['titleName'],
"attendee_first"=>$_POST['firstName'],
"attendee_last"=>$_POST['lastName'],
"attendee_position"=>$_POST['position'],
"vegetarian"=>$_POST['vegetarian'],
"vegan"=>$_POST['vegan'],
"halal"=>$_POST['halal'],
"kosher"=>$_POST['kosher'],
"glute"=>$_POST['glute'],
"lactose"=>$_POST['lactose'],
"otherStep3"=>$_POST['otherStep3'],
"allergies"=>$_POST['allergies'],
"spouse_title"=>$_POST['titleS'],
"spouse_name"=>$_POST['fisrtS'],
"spouse_last"=>$_POST['lastS'],
"vegetarianS"=>$_POST['vegetarianS'],
"veganS"=>$_POST['veganS'],
"halalS"=>$_POST['halalS'],
"kosherS"=>$_POST['kosherS'],
"gluteS"=>$_POST['gluteS'],
"lactoseS"=>$_POST['lactoseS'],
"otherStep3S"=>$_POST['otherStep3S'],
"allergiesS"=>$_POST['allergiesS'],
]);
print_r($_session['booking3']);
header("location:book_step4");
					break;
					case"save_step4":
					$_SESSION['booking4']= array([
"nameCom"=>$_POST['nameCom'],
"emailCom"=>$_POST['emailCom'],
"phoneCom"=>$_POST['phoneCom'],
"mobileCom"=>$_POST['mobileCom'],
"websiteCom"=>$_POST['websiteCom'],
"iataCom"=>$_POST['iataCom'],
"addressCom"=>$_POST['addressCom'],
"cityCom"=>$_POST['cityCom'],
"countryCom"=>$_POST['countryCom'],
"currentNetCom"=>$_POST['currentNetCom'],
"courier"=>$_POST["courier"],
"dangerous"=>$_POST['dangerous'],
"events"=>$_POST['events'],
"exhibition"=>$_POST['exhibition'],
"household"=>$_POST['household'],
"liquid"=>$_POST['liquid'],
"live"=>$_POST['live'],
"nvocc"=>$_POST['nvocc'],
"perishable"=>$_POST['perishable'],
"pharmaceuticals"=>$_POST['pharmaceuticals'],
"project"=>$_POST["project"],
"ships"=>$_POST['ships'],
"time"=>$_POST['time'],
"wholesale"=>$_POST['wholesale'],
"customs"=>$_POST['customs'],
"seafreight"=>$_POST['seafreight'],
"airfreight"=>$_POST['airfreight'],
"importer"=>$_POST['importer'],
"exporter"=>$_POST["exporter"],
"ecommerce"=>$_POST['ecommerce'],
"courierSe"=>$_POST['courierSe'],
"freightMeSe"=>$_POST['freightMeSe'],
"freightPaSe"=>$_POST['freightPaSe'],
"freightTeSe"=>$_POST['freightTeSe'],
"freightEvSe"=>$_POST['freightEvSe'],
"nom-profit"=>$_POST['nom-profit'],
"howLearn"=>$_POST['howLearn'],
"textMessage"=>$_POST['textMessage']
]);
					header("location:book_step5");
					break;
					case "clear_form":
					session_destroy();
					header("location:register");
					break;
					case "confirm_booking":
						echo $_POST['nameCom']."\\".$_POST['firstName'][0];
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