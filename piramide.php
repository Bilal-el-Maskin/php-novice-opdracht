<?php

echo "hoeveel lagen voor je piramide? \n";
$lagen = readline();

$x = 1; 
$k = "";
while ($x <= $lagen) { 
    $k = $k . str_repeat("*", $x) . "\n";
    $x++; 
}


echo $k;

?>
