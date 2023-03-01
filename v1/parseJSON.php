<?php
$linebreak = '<br>';
$spanstart = '<span class="w3-text-red">';
$spanend = '</span>';
$w3css = '<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">';
$people_json = file_get_contents('http://jwist.125mb.com/api/v1/reverseString?content=reversed-desrever');
$people_json2 = file_get_contents('http://jwist.125mb.com/api/v1/getVersion');
$people_json3 = file_get_contents('http://jwist.125mb.com/api/v1/getNumber');
$decoded_json = json_decode($people_json, false);
$decoded_json2 = json_decode($people_json2, false);
$decoded_json3 = json_decode($people_json3, false);
echo '<html><head>';
echo $w3css;
echo '</head><body class="w3-padding-large"><h3>';
echo $spanstart;
echo 'reverseString: ';
echo $spanend;
echo $decoded_json->reversed;
echo $linebreak;
echo $spanstart;
echo 'getVersion: ';
echo $spanend;
echo $decoded_json2->phpversion;
echo $linebreak;
echo $spanstart;
echo 'getNumber: ';
echo $spanend;
echo $decoded_json3->number;


echo '</h3></body></html>';

// Monty 
// echo $decoded_json->email;
// monty@something.com 
// echo $decoded_json->age;
// 77 
?>