<?php
// exercise 1
$numbers = [1, 2, 3, 4, 5];
foreach ($numbers as $number) {
    echo "Angka $number \n <br>";
}

// exercise 2
$students = [
    "Name" => "Petrus Handika",
    "Age" => 25,
    "City" => "Jakarta"
];
foreach ($students as $key => $value) {
 echo "". $key .": ". $value ."<br>";
}

// exercise 3
$foods = [
    "Nasi Goreng",
    "Sate",
    "Gado-Gado",
    "Rendang",
    "Bakso"
];
foreach ($foods as $food) {
    echo "Saya suka makan $food \n <br>";
}
?>