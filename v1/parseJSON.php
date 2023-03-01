<?php
$people_json = file_get_contents('reverseString?content=tacocat');
$decoded_json = json_decode($people_json, false);
echo $decoded_json->reversed;
// Monty 
// echo $decoded_json->email;
// monty@something.com 
// echo $decoded_json->age;
// 77 
?>