<?php

namespace Guttadauria;


class VendingMachine
{
    private $drinks;

    public function getDrinks() {
        return $this->drinks;
    }

    public function setDrinks($amount) {
        $this->drinks = $amount;
    }

    public function getADrink() {
        $this->setDrinks($this->getDrinks() - 1);
    }

}