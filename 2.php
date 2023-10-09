<?php
$n = 10;
$a = 0;
$b = 1;

echo "Fibonacci Series is ";

for ($i = 1; $i <= $n; $i++) {
    echo $a . " ";

    $temp = $a;
    $a = $b;
    $b = $temp + $b;
}
?>