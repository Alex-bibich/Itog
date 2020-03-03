<?php
$content = file_get_contents("second.json");
$json = json_decode($content, "true");
$a = $json["first"];
$b = $json["second"];
$i = $json["operation"];

if (gettype($a) != "integer" or gettype($b) != "integer") {
	die();
};


switch ($i) {
        case 1:
        	$result = $a + $b;
        break;
        case 2:
        	$result = $a - $b;
        break;
        case 3:
        	$result = $a * $b;
        break;
        case 4:
        	$result = $a / $b;
        break;
        default:
            $result = 'Неизвестный оператор';
        break;
    };

$res = array('Результат' => $result);    
$res = json_encode($res);

$content = fopen("result.json", "w");
fwrite($content, $res);
fclose($content);
