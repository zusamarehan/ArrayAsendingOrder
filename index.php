<?php
// timestamp: 3:00
// $array = [5, 2, 1];
// $array = [1, 2, 5];
$array = [4, 1, 2, 5];
$result = [];
if (isDescendingOrder($array)) {
    echo "The array is already arranged in descending order.";
} else {
    do {
        for ($i =count($array) - 1 ; $i >=0 ; $i--) {
            if($i!=count($array) - 1){
                if ($array[$i] < $array[$i + 1]) {
                    $temp = $array[$i + 1];
                    $array[$i + 1] = $array[$i];
                    $array[$i] = $temp;

                    array_push($result, $array);
                }
            }
        }
    } while (! isDescendingOrder($array));
    print_r($result);
}
function isDescendingOrder($array)
{
    for ($i = 0; $i < (count($array) - 1); $i++) {
        if ($array[$i + 1] > $array[$i]) {
            return false;
        }
    }
    return true;
}

// [4, 1, 5, 2]
// [4, 5, 1, 2]
// [5, 4, 1, 2]
// [5, 4, 2, 1]

// [1, 5, 2]
// [5, 1, 2]
// [5, 2, 1]