<?php
$n = 4;

if ($n <= 0) {
    echo "Please enter greater than 0";
    return;
}

$first = 0;
$second = 1;

for ($i = 0; $i < $n; $i++) {
    echo $first . " ";
    $next = $first + $second;
    $first = $second;
    $second = $next;
}
?>