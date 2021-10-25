<?php

function validateRecipeWithQuantity(array $fridge, array $ingredients) : bool
{
    foreach ($ingredients as $key => $quantity) {
        if (!isset($fridge[$key]) || $fridge[$key] < $quantity)
            return false;
    }
    return true;
}

# basic output
var_dump(validateRecipeWithQuantity(['tomato' => 2,'onion' => 3], ['tomato' => 2,'onion' => 2]));
echo PHP_EOL;


# reading json file
$parsedFile = json_decode(file_get_contents('inputs.json'), true);
var_dump(validateRecipeWithQuantity($parsedFile['fridge'], $parsedFile['ingredients']));
echo PHP_EOL;


# if value inputs entered from command line like: php problem2-solution-osama-abdullah.php '{"tomato": 2, "onion": 3, "olives": 1}' '{"tomato": 2, "onion": 3}'
if (count($argv) === 3) {
    $fridge = json_decode($argv[1], true);
    $ingredients = json_decode($argv[2], true);
    if (!is_array($fridge) or !is_array($ingredients)) throw new Exception('wrong inputs');
    var_dump(validateRecipeWithQuantity($fridge, $ingredients));
    echo PHP_EOL;
}