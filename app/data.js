<?php
$data = $database->select("news","*");

$json_data = json_encode($data); 
echo $json_data;

?>

var data = 55;
console.log(data);