<?php

require_once 'LampuLaluLintas.php';

$lampuLaluLintas = new LampuLaluLintas();

echo "Warna saat ini: " . $lampuLaluLintas->getColor() . "<br>";  // Output: Merah
$lampuLaluLintas->switchState();  // Output: Beralih dari Merah ke Kuning.
echo "Warna saat ini: " . $lampuLaluLintas->getColor() . "<br>";  // Output: Kuning
$lampuLaluLintas->switchState();  // Output: Beralih dari Kuning ke Hijau.
echo "Warna saat ini: " . $lampuLaluLintas->getColor() . "<br>";  // Output: Hijau
$lampuLaluLintas->switchState();  // Output: Beralih dari Hijau ke Merah.
echo "Warna saat ini: " . $lampuLaluLintas->getColor() . "<br>";  // Output: Merah
?>
