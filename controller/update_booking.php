<?php

if($_POST['type_form']=="new"){
						$database->insert("companies",["companyname"=>$_POST['companyname']]);
								$Comid = $database->id();
					}else{
							$Comid = $getCom['id'];
					}
						$database->update("companies",[
							"companyname"=>$_POST['companyname'],
							"email"=>$_POST['email'],
							"address"=>$_POST['address'],
							"city"=>$_POST['city'],
							"country"=>$_POST['country'],
							"phone"=>$_POST['phone'],
							"mobile"=>$_POST['mobile'],
							"specialization"=>$_POST['specialization'],
							"services"=>$_POST['services'],
							"comment"=>$_POST['comment'],
							"status"=>$_POST['status']
						],["id"=>$Comid]);

						if($_POST['logo_path']){
							$database->update("companies",["image"=>$_POST['logo_path']],["id"=>$Comid]);
						}



$attendee = array("quantity"=>$_POST['attendee'][0],"price"=>$_POST['attendee'][1]);
$spouse = array("quantity"=>$_POST["spount"][0],"price"=>$_POST['spount'][1]);
$fixTa = array("quantity"=>$_POST['fix_table'][0],"price"=>$_POST['fix_table'][1]);
	if($_POST['type_form']=='new'){
			$database->insert("booking",[
				"company_id"=>$Comid,
				"datetime"=>date("Y-m-d H:i:s")
			]);
			$bookingID = $database->id();
	}else{
		$bookingID = $_POST['type_form'];
	}
	$database->update("booking",[
				"attendee"=>json_encode($attendee),
				"spouse"=>json_encode($spouse),
				"fix_table"=>json_encode($fixTa)
			],["id"=>$bookingID]);	

	$checkspon = $database->select("sponsor","*",["type"=>"sponsor"]);
		foreach($checkspon as $spon){
				if(isset($_POST[$spon['input']]) || $_POST[$spon['input']] !=''){
					$spons[] = ["id"=>$spon['id'],
					"input"=>$spon['input'],
					"name"=>$spon['name'],
					"price"=>$_POST[$spon['input']."_pr"],
					"quantity"=>1,
					"detail"=>$spon['detail'],
					"type"=>$spon['type'],
					"status"=>$spon['status']
						];
					
				}
		}
	$checkadv = $database->select("sponsor","*",["type"=>"advertiser"]);
		foreach($checkadv as $spon){
				if(isset($_POST[$spon['input']]) || $_POST[$spon['input']] !=''){
					$adv[] = ["id"=>$spon['id'],
					"input"=>$spon['input'],
					"name"=>$spon['name'],
					"price"=>$_POST[$spon['input']."_pr"],
					"quantity"=>$_POST[$spon['input']."_qu"],
					"detail"=>$spon['detail'],
					"type"=>$spon['type'],
					"status"=>$spon['status']
						];
					
				}
		}

	$database->update("booking",[
						"sponsor"=>json_encode($spons),
						"advertiser"=>json_encode($adv),
						"discount"=>$_POST['discounts'],
						"amount"=>$_POST['amount'],
						"detail"=>$_POST['comment'],
						"last_update"=>date("Y-m-d H:i:s"),
						"status"=>$_POST['status']
					],["id"=>$bookingID]);


	header("location:edit_booking?id=".$bookingID);


?>