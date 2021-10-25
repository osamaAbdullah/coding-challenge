<?php

require_once 'problem2-solution-osama-abdullah.php';

function assertSame($expected, $actual)
{
    if ($expected === $actual) {
        echo 'test passed '.PHP_EOL;
    }
    else {
        echo 'test failed '.PHP_EOL;
    }
}

assertSame(true, validateRecipeWithQuantity(['tomato' => 2, 'onion' => 3, 'olives' => 4], ['tomato' => 1, 'onion' => 3]));
assertSame(false, validateRecipeWithQuantity(['tomato' => 3, 'onion' => 4, 'olives' => 5], ['olives' => 1, 'apples' => 3]));
assertSame(true, validateRecipeWithQuantity(['tomato' => 5, 'onion' => 4, 'olives' => 3], ['tomato' => 1, 'olives' => 3]));
assertSame(false, validateRecipeWithQuantity(['tomato' => 9, 'onion' => 7, 'olives' => 6], ['onion' => 5, 'banana' => 3]));
assertSame(false, validateRecipeWithQuantity([], ['onion' => 1]));

