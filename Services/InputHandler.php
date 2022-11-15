<?php

namespace Services;

class InputHandler
{
    public function validateInputs(float $salary, float $additionalIncome, float $taxExemption)
    {
        $inputs = [$salary, $additionalIncome, $taxExemption];
        if (
            $salary < 0
            && $additionalIncome < 0
            && $taxExemption < 0
        ) {
            throw ('Negative ammount');
        } else if ($salary * 100 != floor($salary * 100) 
        || $additionalIncome * 100 != floor($additionalIncome * 100)
        || $taxExemption * 100 != floor($taxExemption * 100)
        ) {
            throw ('The number you entered has more than two decimals');
        }
        return $inputs;
    }
}
