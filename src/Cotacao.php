<?php

namespace App;

class Cotacao {
    
    private $moeda;
    private $value;

    public function setMoeda(object $moeda): void{
        $this->moeda = $moeda;
    }

    public function getMoeda(): object{
        return $this->moeda;
    }

    public function getValue(): float{
        return $this->value * $this->getMoeda()->getRate();
    }

    public function setValue(float $value): void{
        $this->value = $value;
    }

}