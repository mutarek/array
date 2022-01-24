<?php
$names = ['tarek','faruk','rahim'];
$numbers = [1203,32323,43434];

$combine = array_combine($names,$numbers);

foreach ($combine as $key => $value) {
	echo "$key: $value <br>";
}

?>