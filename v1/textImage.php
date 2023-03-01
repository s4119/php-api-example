<?php
/*
// Create a 100*30 image
$im = imagecreate(100, 30);

// White background and blue text
$bg = imagecolorallocate($im, 255, 255, 255);
$textcolor = imagecolorallocate($im, 0, 0, 0);

// Write the string at the top left
imagestring($im, 5, 0, 0, $_GET["text"], $textcolor);

// Output the image
header('Content-type: image/png');

imagepng($im);
imagedestroy($im);
*/
?>
<?php
// Set the content-type
header('Content-Type: image/png');

// Create the image
$im = imagecreatetruecolor(600, 30);

// Create some colors
$white = imagecolorallocate($im, 255, 255, 255);
$grey = imagecolorallocate($im, 128, 128, 128);
$black = imagecolorallocate($im, 0, 0, 0);
imagefilledrectangle($im, 0, 0, 599, 29, $white);

// The text to draw
$text = $_GET["text"];

// Replace path by your own font path
$font = 'HandelGothic.ttf';

// Add the text
imagettftext($im, 20, 0, 10, 20, $black, $font, $text);

// Using imagepng() results in clearer text compared with imagejpeg()
imagepng($im);
imagedestroy($im);
?>