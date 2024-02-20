<?php

namespace App\Moedas;

class Libra {
    
    private $rate = 6.37;

    public function getRate(): float{
        return $this->rate;
    }

}