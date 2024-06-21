<?php

include_once 'LampuLaluLintas.php';

class LampuKuning {
    private $lampuLaluLintas;

    public function __construct($lampuLaluLintas) {
        $this->lampuLaluLintas = $lampuLaluLintas;
    }

    public function switchState() {
        echo "Beralih dari Kuning ke Hijau.<br>";
        $this->lampuLaluLintas->setState($this->lampuLaluLintas->getLampuHijau());
    }

    public function getColor() {
        return "Kuning";
    }
}
