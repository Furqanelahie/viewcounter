<?php

header('Access-Control-Allow-Origin: *');


$dataid=$_GET['id'];

 $json_object= file_get_contents('https://irreverent-hinge.000webhostapp.com/viewcounter/index.php?id=01');

$data=json_decode($json_object,true);

echo $data['views'];
?>
