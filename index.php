<?php
$group = array("petja","vasja","vova");

$somebody = array(
	"name"     => "",
	"surname"  => "",
	"birthday" => ""
);

foreach($group as $value){
	echo $value."<br/>";
}

for($i=0; $i < count($group); $i+=2)
	echo $group[$i]."<br/>";


