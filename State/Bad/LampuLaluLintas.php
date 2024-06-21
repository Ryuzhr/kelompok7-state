<?php

class LampuLaluLintas {
    private $state;

    const STATE_MERAH = 0;
    const STATE_KUNING = 1;
    const STATE_HIJAU = 2;

    public function __construct() {
        $this->state = self::STATE_MERAH; // Mulai dengan lampu merah
    }

    public function switchState() {
        switch ($this->state) {
            case self::STATE_MERAH:
                echo "Beralih dari Merah ke Kuning.<br>";
                $this->state = self::STATE_KUNING;
                break;
            case self::STATE_KUNING:
                echo "Beralih dari Kuning ke Hijau.<br>";
                $this->state = self::STATE_HIJAU;
                break;
            case self::STATE_HIJAU:
                echo "Beralih dari Hijau ke Merah.<br>";
                $this->state = self::STATE_MERAH;
                break;
            default:
                echo "State tidak dikenal!<br>";
                break;
        }
    }

    public function getColor() {
        switch ($this->state) {
            case self::STATE_MERAH:
                return "Merah";
            case self::STATE_KUNING:
                return "Kuning";
            case self::STATE_HIJAU:
                return "Hijau";
            default:
                return "State tidak dikenal!";
        }
    }
}
?>
