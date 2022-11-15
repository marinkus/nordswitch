<?php

use Services\MainClass;
use Services\InputHandler;
use Services\TaxCalculator;

require __DIR__ . '\vendor\autoload.php';

$input = new TaxCalculator;
$input->calculateTax($num);