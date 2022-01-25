<?php
$colors = ['red','green','blue','lightblue','lightgren'];

$radomArray = array_rand($colors);
echo "$colors[$radomArray]";

$shuffle = shuffle($colors);


echo "<pre>";
print_r($shuffle);
echo "</pre>";

?>