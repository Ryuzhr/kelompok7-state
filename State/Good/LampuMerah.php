<?php

include_once 'LampuLaluLintas.php';

class LampuMerah {
    private $lampuLaluLintas;

    public function __construct($lampuLaluLintas) {
        $this->lampuLaluLintas = $lampuLaluLintas;
    }

    public function switchState() {
        echo "Beralih dari Merah ke Kuning.<br>";
        $this->lampuLaluLintas->setState($this->lampuLaluLintas->getLampuKuning());
    }

    public function getColor() {
        return "Merah";
    }
}
