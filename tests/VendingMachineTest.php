<?php

use Guttadauria\VendingMachine;
use PHPUnit\Framework\TestCase;

class VendingMachineTest extends TestCase
{

    protected VendingMachine $vendingMachineInstance;

    public function setUp() : void {
        $this->vendingMachineInstance = new VendingMachine();
        $this->vendingMachineInstance->setDrinks(100);
    }

    /** @test  */
    public function testGetDrinks()
    {
        $this->assertEquals(100, $this->vendingMachineInstance->getDrinks());


    }

    /** @test  */
    public function testGetADrink()
    {
        $this->vendingMachineInstance->getADrink();
        $this->assertEquals(99, $this->vendingMachineInstance->getDrinks());
    }

    /** @test */
    public function testManyDrinks() {
        $amount = 21;
        $i = 0;

        for ($i; $i < $amount; $i++) {
            $this->vendingMachineInstance->getADrink();
        }
        $this->assertEquals(79, $this->vendingMachineInstance->getDrinks());
    }

    /** @test  */
    public function testSetDrinks()
    {
        $this->vendingMachineInstance->setDrinks(120);
        $this->assertEquals(120, $this->vendingMachineInstance->getDrinks());
    }
}
