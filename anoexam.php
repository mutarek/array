<?php

$productList = 
[
	[
		'name'=> "Carrot",
		'price'=> 120,
		'is_stock'=> true,
		'quantity'=> 100,
		'size'=> ['L','S'],

	],
	[
		'name'=> "Fulkopi",
		'price'=> 40,
		'is_stock'=> true,
		'quantity'=> 100,
		'size'=> ['L','S'],

	],
	[
		'name'=> "Badakopi",
		'price'=> 30,
		'is_stock'=> true,
		'quantity'=> 100,
		'size'=> ['L','S'],

	]
];


$markList = 
[
	"tarek"=>
	[
		'math'=> 70,
		'eng'=> 80,

	],
	"heli"=>
	[
		'math'=> 70,
		'eng'=> 80,

	],
	"beli"=>
	[
		'math'=> 70,
		'eng'=> 80,

	]
];

echo "<pre>";
print_r($markList);
echo "</pre>";

echo $markList['tarek']['math'];


echo "<pre>";
print_r($productList);
echo "</pre>";

for ($i=0; $i <sizeof($productList) ; $i++) { 
	foreach ($productList[$i] as $value) {
		echo "$value";
	}
}

?>