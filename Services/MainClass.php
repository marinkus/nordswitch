<?php

namespace Services;

use Services\InputHandler;
use Services\TaxCalculator;

class MainClass
{
    public InputHandler $inputHandler;
    public TaxCalculator $taxCalculator;

    public function __construct()
    {
        $this->inputHandler = new InputHandler;
        $this->taxCalculator = new TaxCalculator;
    }

    public function main()
    {

    }
}
