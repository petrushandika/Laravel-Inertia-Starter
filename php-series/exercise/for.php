<?php
// exercise 1
for ($i=1; $i <= 10; $i++) {
    echo "Angka $i \n <br>";
}

// exercise 2
$total = 0;
$x = "";

for ($i = 1; $i <= 10; $i++) {
    $total += $i;
    $x .= $i; 
    if ($i < 10) {
        $x .= " + "; 
    }
}

echo $x . " = " . $total . "\n <br>";

// exercise 3
$multiple = 1;
$limit = 5;
for ($multiple = 1; $multiple <= 10; $multiple++) {
    $result = $multiple * 5;
    echo "5 x $multiple = $result \n <br>";
}
?>