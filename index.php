<?php
// timestamp: 3:00
//$array = [5, 2, 1];
//$array = [1, 2, 5];
$array = [4, 1, 2, 5];
$result = [];
if (isDescendingOrder($array)) {
    echo "The array is already arranged in descending order.";
} else {
    do {
        for ($i = 0; $i < count($array) - 1; $i++) {
            if ($array[$i] < $array[$i + 1]) {
                $temp = $array[$i + 1];
                $array[$i + 1] = $array[$i];
                $array[$i] = $temp;
                // $result[] = $array;
                //
                array_push($result, $array);
            }
        }
    } while (! isDescendingOrder($array));
    print_r($result);
}
function isDescendingOrder($array)
{
    for ($i = 0; $i < (count($array) - 1); $i++) {
        if ($array[$i] < $array[$i + 1]) {
            return false;
        }
    }
    return true;
}
