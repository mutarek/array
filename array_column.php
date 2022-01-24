<?php
$productList =
[
	[
		"id"=> 321,
		"price"=>1200,
		"name"=> "Tomato"
	],
	[
		"id"=> 33,
		"price"=>1200,
		"name"=> "Carrot"
	],
	[
		"id"=> 32,
		"price"=>1200,
		"name"=> "Fulkopi"
	],
];


$getName = array_column($productList, 'name');

foreach ($getName as $getTitle) {
	echo "$getTitle <br>";
}

?>