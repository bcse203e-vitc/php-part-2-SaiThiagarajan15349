<?php
class NumberException extends Exception {}

function average($numbers) {
    if (empty($numbers)) {
        throw new NumberException("No numbers provided");
    }
    return array_sum($numbers) / count($numbers);
}

try {
    $arr = [10, 20, 30, 40, 50]; 
    echo "Average: " . average($arr);
} catch (NumberException $e) {
    echo "Error: " . $e->getMessage();
}
?>

