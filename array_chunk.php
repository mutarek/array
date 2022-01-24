<?php
$studentsList =
[
	"A","B","C","D","E","F"

];


$split = array_chunk($studentsList, 3,true);
echo $split[0][0];
echo $split[0][1];
echo "<pre>";
print_r($split);
echo "<pre>";

?>