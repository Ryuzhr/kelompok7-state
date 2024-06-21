<?php

require_once 'LampuMerah.php';
require_once 'LampuKuning.php';
require_once 'LampuHijau.php';

class LampuLaluLintas {
    private $lampuMerah;
    private $lampuKuning;
    private $lampuHijau;

    private $currentState;

    public function __construct() {
        $this->lampuMerah = new LampuMerah($this);
        $this->lampuKuning = new LampuKuning($this);
        $this->lampuHijau = new LampuHijau($this);

        $this->currentState = $this->lampuMerah; // Mulai dengan lampu merah
    }

    public function setState($state) {
        $this->currentState = $state;
    }

    public function getLampuMerah() {
        return $this->lampuMerah;
    }

    public function getLampuKuning() {
        return $this->lampuKuning;
    }

    public function getLampuHijau() {
        return $this->lampuHijau;
    }

    public function switchState() {
        $this->currentState->switchState();
    }

    public function getColor() {
        return $this->currentState->getColor();
    }
}
