<?php
$file = fopen("test.json","w");
$json = array(
	"Moscow" => date('d.m.Y H:j:s')
);

$json = json_encode($json);

fwrite($file, $json);
fclose($file);

