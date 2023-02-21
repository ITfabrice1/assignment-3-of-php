<?php

$n = 2023;  
$revn = 0;  
while ($n > 1)  
{  
$rem = $n % 10;  
$revn = ($revn* 10) + $rem;  
$n = ($n / 10);   
}  
echo "Reverse number of 2023 is: $revn";  



?>