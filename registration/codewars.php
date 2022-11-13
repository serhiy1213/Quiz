<?php
function countPositivesSumNegatives($input)
{
    if ($input == null || count($input) == 0) return [];
    $sum = 0;
    $k = 0;
    foreach ($input as $item) {
        if ($item > 0) $sum += $item;
        elseif($item < 0) $k += 1;
    }
    return [$sum, $k];
}