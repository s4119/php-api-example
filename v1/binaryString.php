<?php header("Content-Type: text/json"); ?>
<?php $value = unpack('H*', $_GET["content"]);
$binaryconverted = base_convert($value[1], 16, 2); ?>
{"binary":"<?php echo $binaryconverted; ?>"}