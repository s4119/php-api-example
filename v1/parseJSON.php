<?php
$linebreak = '<br>';
$spanstart = '<span class="w3-text-red">';
$spanend = '</span>';
// binaryString?content=works
$w3css = '<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"><link rel="icon" href="https://www.php.net/images/logos/php_script.ico"><title>API Status</title>';
$people_json = file_get_contents('http://jwist.125mb.com/api/v1/reverseString?content=reversed-desrever');
$people_json2 = file_get_contents('http://jwist.125mb.com/api/v1/getVersion');
$people_json3 = file_get_contents('http://jwist.125mb.com/api/v1/getNumber');
$people_json4 = file_get_contents('http://jwist.125mb.com/api/v1/getString');
$people_json5 = file_get_contents('http://jwist.125mb.com/api/v1/getIPv4');
$people_json6 = file_get_contents('http://jwist.125mb.com/api/v1/binaryString?content=works');

$decoded_json = json_decode($people_json, false);
$decoded_json2 = json_decode($people_json2, false);
$decoded_json3 = json_decode($people_json3, false);
$decoded_json4 = json_decode($people_json4, false);
$decoded_json5 = json_decode($people_json5, false);
$decoded_json6 = json_decode($people_json6, false);

$data1 = 'http://jwist.125mb.com/api/v1/reverseString?content=';
$data2 = $decoded_json4->string;

$result = $data1 . $data2;

$people_json7 = file_get_contents($result);
$decoded_json7 = json_decode($people_json7, false);




echo '<html><head>';
echo $w3css;
echo '</head><body class="w3-padding-large"><div class="w3-card w3-container w3-red"><h2>PHP API Status</h2></div><br><h3>';
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
echo $linebreak;
echo $spanstart;
echo 'getString: ';
echo $spanend;
echo $decoded_json4->string;
echo $linebreak;
echo $spanstart;
echo 'getIPv4: ';
echo $spanend;
echo $decoded_json5->ipv4;
echo $linebreak;
echo $spanstart;
echo 'binaryString: ';
echo $spanend;
echo $decoded_json6->binary;
echo $linebreak;
echo $linebreak;
echo $spanstart;
echo 'if anything is not working sorry';
echo $spanend;
echo $linebreak
echo $decoded_json7->reversed;






echo '</h3></body></html>';

// Monty 
// echo $decoded_json->email;
// monty@something.com 
// echo $decoded_json->age;
// 77 
?>