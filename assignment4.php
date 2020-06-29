<?php

echo "ENTER  1st ELEMENT OF ARRAY :  \n";
$arr[] = trim(fgets(STDIN));
echo "ENTER  2nd ELEMENT  OF ARRAY : \n";
$arr[] = trim(fgets(STDIN));
echo "ENTER  3rd ELEMENT  OF ARRAY : \n";
$arr[] = trim(fgets(STDIN));
echo "ENTER  4th ELEMENT  OF ARRAY : \n";
$arr[] = trim(fgets(STDIN));

echo "\n ELEMENTS OF ARRAY AS FOLLOW \n";
print_r($arr);
// $arr = array(1,5,8,7,6,4,2);

echo "\nSum of array is : ".sumArr($arr);

function sumArr($arr) 
{ 
	$sum = 0;
    foreach($arr as $k => $val)
	{
		$sum += $val;
	}
	return $sum;
} 

?>