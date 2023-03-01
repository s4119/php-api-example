<?php
$people_json = file_get_contents('http://jwist.125mb.com/api/v1/reverseString.php?content=this is reversed');
$decoded_json = json_decode($people_json, false);
echo $decoded_json->reversed;
// Monty 
// echo $decoded_json->email;
// monty@something.com 
// echo $decoded_json->age;
// 77 
?>