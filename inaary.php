<?php
$studentList =['tarek','barek',3,'4'];
$productList =
[
	['Tomato','Alu'],
	['Gajor','Potol'],
	['Moric','Patha'],
];

if (in_array(['Tomato','Alu'],$productList)) {
	echo "Product Is availeable";
}
else
{
	echo "Not available";
}

?>