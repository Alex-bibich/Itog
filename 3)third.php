<?php
$mass = array(
	"lname" => "Gates",
	"fname" => "Bill",
	"address" => array(
		"contry" => "USA",
		"state" => "Washington",
		"city" => "Medina"	
	)
); 

print_r($mass);
echo "<br>";
$mass = sort_mass($mass, 2);
print_r($mass);
// 1 - по ключу
// 2 - по значению

function sort_mass($arr, $a = 1) {
	if ($a == 1) {
		ksort($arr);
		return $arr;
	} elseif ($a == 2) {
		asort($arr);
		echo "Yes";
		return $arr;
	} else {
		return "Неизвестный параметр!";
	}
}

$mass = json_encode($mass);

$file = fopen("result3.json", "w");
fwrite($file, $mass);
fclose($file);
