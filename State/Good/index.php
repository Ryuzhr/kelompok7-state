<?php

include_once 'LampuLaluLintas.php';

$lampuLaluLintas = new LampuLaluLintas();

echo "Warna saat ini: " . $lampuLaluLintas->getColor() ."<br>";  
$lampuLaluLintas->switchState();  
echo "Warna saat ini: " . $lampuLaluLintas->getColor() ."<br>";  
$lampuLaluLintas->switchState(); 
echo "Warna saat ini: " . $lampuLaluLintas->getColor() ."<br>";
$lampuLaluLintas->switchState();  
echo "Warna saat ini: " . $lampuLaluLintas->getColor() ."<br>";  

?>
