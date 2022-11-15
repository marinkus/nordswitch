<?php

namespace Services;

class InputHandler
{
    public function validateInputs(array $input) {
        if (count($input) === 3) {
            foreach ($input as $i) {
                if ($i <= 0) {
                    throw('Negative ammount');
                }
                else if ($i * 100 != floor($i * 100)) {
                    throw('The number you entered has more than two decimals');
                }
            }
        }   
    }
}