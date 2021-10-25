<?php

require_once 'problem0-solution-osama-abdullah.php';

function assertSame($expected, $actual)
{
    if ($expected === $actual) {
        echo 'test passed '.PHP_EOL;
    }
    else {
        echo 'test failed '.PHP_EOL;
    }
}

assertSame(0, whereIsMyFood(['tomato', 'onion', 'olives'], 'tomato'));
assertSame(1, whereIsMyFood(['tomato', 'onion', 'olives'], 'onion'));
assertSame(2, whereIsMyFood(['tomato', 'onion', 'olives'], 'olives'));
assertSame(-1, whereIsMyFood(['tomato', 'onion', 'olives'], 'olivess'));
assertSame(-1, whereIsMyFood([], 'onion'));

