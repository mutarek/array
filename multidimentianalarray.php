<?php
$productList =[
[1,'Mohiuddin','Ceo',50000],
[2,'Badal','Cto',20000],
[3,'Mohi','Manager',10000],
[4,'Amir','Ceo',8000],
];

echo $productList[0][0] ." ";
echo $productList[0][1] ." ";
echo $productList[0][2] ." ";
echo $productList[0][3] ." ";

echo "<br>";

echo $productList[1][0] ." ";
echo $productList[1][1] ." ";
echo $productList[1][2] ." ";
echo $productList[1][3] ." ";

echo "<br>";

echo $productList[2][0] ." ";
echo $productList[2][1] ." ";
echo $productList[2][2] ." ";
echo $productList[2][3] ." ";

echo "<br>";

echo $productList[3][0] ." ";
echo $productList[3][1] ." ";
echo $productList[3][2] ." ";
echo $productList[3][3] ." ";

echo "<pre>";
print_r($productList);
echo "</pre>";


?>