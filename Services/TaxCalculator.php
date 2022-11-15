<?php

namespace Services;

class TaxCalculator
{
    public function calculateTax(float $salary, float $additionalIncome, float $taxExemption) {
        $totalIncome = $salary + $additionalIncome - $taxExemption;
        if ($totalIncome < 30000) {
            return $totalIncome * 0.2;
        } else {
            return $totalIncome * 0.25;
        }
    }
}
