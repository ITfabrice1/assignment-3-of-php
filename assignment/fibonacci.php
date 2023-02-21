<?php
$a = 0; 
$b = 0;
$c = 1;
$d=10;
echo "fibonacci number of 10 ".$d." number:"; 
echo "\n"; echo $b. ' '. $b. ' '; 
while ($a <$d ) { 
	$e = $c + $b;
	echo $e." ";
	 $b = $c;  
    $c = $e; 
    $a = $a + 1;   
}
?>