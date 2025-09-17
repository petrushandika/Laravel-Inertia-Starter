<?php

// variabel
$name = "Petrus Handika";

echo $name;

$day = 7;

// concatenation
echo 'Ada '. $day .' Hari dalam seminggu';

// interpolation
echo "Ada {$day} Hari dalam seminggu";

// escape
echo 'It\'s Monday';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variable, String, and Error</title>
</head>

<body>
  // boilerplate
  My name is <?php echo $name; ?>

  // short hand
  My name is <?= $name; ?>
</body>

</html>