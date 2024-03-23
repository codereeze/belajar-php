<?php
$fibonacci = function ($n) use (&$fibonacci) {
    if ($n <= 1) {
        return $n;
    } else {
        return $fibonacci($n - 1) + $fibonacci($n - 2);
    }
};


for ($i = 0; $i <= 10; $i++) {
    echo $fibonacci($i) . " ";
}
