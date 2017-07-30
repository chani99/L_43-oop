<?php
require_once ('IAnimle.php');
require_once ('Animle.php');

class dog extends animle implements IAnimle {
    private $Dogvoice;

    public function __construct($voice) {
        $this->Dogvoice = $voice;
    }

    public function voice() {
        return $this->Dogvoice;
    }
    
}