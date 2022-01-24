<?php

$productList = ['A','A','C','A','B','b'];

$totalValue = array_count_values($productList);

echo "<pre>";
print_r($totalValue);
echo "<pre>";

?>