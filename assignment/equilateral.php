<?php

$i = 5;

for($e = 1; $e <= $i; $e++){

    for($j = 0; $j < $e; $j++){
        echo "*";
    }
    echo "<br>";

}

for($e = 1; $e <= $i -1; $e++){

    for($j = 0; $j < $i - $e; $j++){
        echo "*";

    }
    echo "<br>";

}



?>