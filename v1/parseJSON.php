<?php
$people_json = file_get_contents('http://jwist.125mb.com/api/v1/reverseString?content=%3E?%20;2ravym$%20ohce%20;%27olleh%27%20=%202ravym$%20php?%3C');
$decoded_json = json_decode($people_json, false);
echo $decoded_json->reversed;
// Monty 
// echo $decoded_json->email;
// monty@something.com 
// echo $decoded_json->age;
// 77 
?>