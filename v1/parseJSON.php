<?php
$people_json = file_get_contents('http://jwist.125mb.com/api/v1/reverseString?content=reversed-desrever');
$people_json2 = file_get_contents('http://jwist.125mb.com/api/v1/getVersion');
$decoded_json = json_decode($people_json, false);
$decoded_json2 = json_decode($people_json2, false);
echo $decoded_json->reversed;
echo $decoded_json2->phpversion;

// Monty 
// echo $decoded_json->email;
// monty@something.com 
// echo $decoded_json->age;
// 77 
?>