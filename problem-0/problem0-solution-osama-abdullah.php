<?php

function whereIsMyFood(array $fridge, string $item) : int
{
    foreach ($fridge as $index => $value) {
        if ($item === $value) return $index;
    }
    return -1;
}

# basic output
echo whereIsMyFood(['1','2','3'], '7') . PHP_EOL;

# reading json file
$parsedFile = json_decode(file_get_contents('inputs.json'));
echo whereIsMyFood($parsedFile->fridge, $parsedFile->item) . PHP_EOL;

# if value inputs entered from command line like: php problem0-solution-osama-abdullah.php '["osama","akre"]' akre
if (count($argv) === 3) {
    $fridge = json_decode($argv[1]);
    $item = $argv[2];
    if (!is_array($fridge) or !is_string($item)) throw new Exception('wrong inputs');
    echo whereIsMyFood($fridge, $item) . PHP_EOL;
}

