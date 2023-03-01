<?php header("Content-Type: text/json"); ?>
{"reversed":"<?php echo strrev($_GET["content"]); ?>"}