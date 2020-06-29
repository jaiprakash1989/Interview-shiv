<?php

echo "ENTER  YOUR STRING";
$str = trim(fgets(STDIN));

stringRev($str);

function stringRev($str){
	$strr = '';
	//echo $str;
	for($i= strlen($str); $i >=0; $i--)
	{
		//echo"\n".$str[$i];
		$strr .=$str[$i];
	}
	echo $strr;
}

?>