<?php

// operators
$x = 5;
$y = 10;

$z = $x * $y;

echo $z;

// conditional
$day = "Sunday";

if ($day == "Sunday") {
    echo "It's Sunday, time to relax!";
} elseif ($day == "Monday") {
    echo "It's Monday, back to work!";
} else {
    echo "It's just another day.";
}

// ternary
$isWeekend = ($day == "Saturday" || $day == "Sunday") ? true : false;
echo $isWeekend ? "It's the weekend!" : "It's a weekday.";

// another
if ($x + $y = 15) {
    $z = "True";
} else {
    $z = "False";
}

echo $z;
