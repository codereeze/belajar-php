<?php

// named function with spread operator
function countApple(...$dataFruit): int
{
    $count = 0;
    foreach ($dataFruit as $item) {
        if ($item == "apple") {
            $count += 1;
        }
    }

    return $count;
}

echo countApple('apple', 'banana', 'orange', 'apple', 'banana', 'orange', 'apple', 'banana', 'orange', 'apple', 'banana', 'orange', 'apple', 'banana', 'orange', 'apple', 'banana', 'orange', 'apple', 'banana', 'orange') . PHP_EOL;


// named function recursive
function factorial($value)
{
    if ($value == 0) {
        return 1;
    }

    return $value * factorial($value - 1);
}

echo factorial(5);
