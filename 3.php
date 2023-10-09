<?php
function bubbleSort($arr) {
    $n = count($arr);
       do {
    
        $swapped = false;
        for ($i = 0; $i < $n - 1; $i++) {
            if ($arr[$i] > $arr[$i + 1]) {
               $temp = $arr[$i];
              $arr[$i]=$arr[$i + 1];
              $arr[$i + 1]=$temp;
                $swapped = true;
            }
        }
    } while ($swapped);
    return $arr;
}

$unsortedArray = [64, 34, 25, 12, 22, 11, 90];
$sortedArray = bubbleSort($unsortedArray);

echo "Original Array: " . implode(", ", $unsortedArray) . "<br>";
echo "Sorted Array: " . implode(", ", $sortedArray);
?>
