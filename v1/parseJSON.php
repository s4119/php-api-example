<?php
$linebreak = '<br>';
$w3css = '<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">';
$people_json = file_get_contents('http://jwist.125mb.com/api/v1/reverseString?content=reversed-desrever');
$people_json2 = file_get_contents('http://jwist.125mb.com/api/v1/getVersion');
$decoded_json = json_decode($people_json, false);
$decoded_json2 = json_decode($people_json2, false);
echo '<html><head>';
echo $w3css;
echo '</head><body><h3>';
echo $decoded_json->reversed;
echo $linebreak;
echo $decoded_json2->phpversion;
echo $linebreak;

echo '</h3></body></html>';

// Monty 
// echo $decoded_json->email;
// monty@something.com 
// echo $decoded_json->age;
// 77 
?>