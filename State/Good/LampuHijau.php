<?php

include_once 'LampuLaluLintas.php';

class LampuHijau {
    private $lampuLaluLintas;

    public function __construct($lampuLaluLintas) {
        $this->lampuLaluLintas = $lampuLaluLintas;
    }

    public function switchState() {
        echo "Beralih dari Hijau ke Merah.<br>";
        $this->lampuLaluLintas->setState($this->lampuLaluLintas->getLampuMerah());
    }

    public function getColor() {
        return "Hijau";
    }
}
