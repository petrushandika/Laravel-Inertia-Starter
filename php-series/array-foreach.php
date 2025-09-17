<?php

$names = ['Petrus', 'Handika', 'Sinaga', 'Budi', 'Joko'];

// counting elements in array
echo count($names) . "<br>";

// sum of elements in array
$number = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
echo array_sum($number) . "<br>";

foreach ($names as $name) {
    echo "$name <br>";
}

$socials = [
  "https:/facebook.com" => "Facebook",
  "https:/twitter.com" => "Twitter",
  "https:/instagram.com" => "Instagram",
  "https:/linkedin.com" => "Linkedin",
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php foreach ($socials as $url => $social) :?>
  <li><a
      href="<?= $url ?>"><?= $social ?></a>
  </li>
  <?php endforeach; ?>
</body>

</html>