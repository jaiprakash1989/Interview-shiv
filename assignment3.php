<?php

echo "ENTER  YOUR NUMBER";
$number = trim(fgets(STDIN));

echo decimalToBinary($number);

function decimalToBinary($number) 
{ 
    if ($number == 0) 
        return "0"; 
      
    $binary = "";  
    while ($number > 0)  
    { 
        $binary = (($number & 1) == 0 ?  
                          '0' : '1') . $binary; 
          
        $number >>= 1; 
    } 
      
    // required binary number 
    return $binary; 
} 

?>