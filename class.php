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

for ($i=0; $i <sizeof($productList) ; $i++) { 
	foreach ($productList[$i] as $key => $value) {
		$size = $key;
		
	}
}

?>