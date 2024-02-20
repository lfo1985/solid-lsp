<?php

namespace App\Moedas;

class Dolar {
    
    private $rate = 5.25;

    public function getRate(): float{
        return $this->rate;
    }

}