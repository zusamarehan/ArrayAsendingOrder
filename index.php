<?php
// timestamp: 3:00
$array = [5, 2, 1];
//$array = [4, 1, 2];

if (isDescendingOrder($array)) {
    echo "The array is already arranged in descending order.";
} else {
    // TODO
    echo "WIP";
}
function isDescendingOrder($array)
{
    // largest
    // comparison
    for ($i = 0; $i < (count($array) - 1); $i++) {
        if ($array[$i] < $array[$i + 1]) {
            return false;
        }
    }

    return true;
}
