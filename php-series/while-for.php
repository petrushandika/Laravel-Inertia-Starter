<?php

// while
$x = 1;

while ($x <= 20) {
    echo "{$x},";
    $x++;
}

// for
for ($y = 1; $y <= 20; $y++) {
    echo "{$y},";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conditional</title>
</head>

<body>
  <div>
    <label for="date">Date</label>
    <select name="date" id="date">
      <?php
      for ($a = 1; $a <= 20; $a++) {
          echo "<option value=\"$a\">$a</option>";
      }
?>

      // reccomended way
      <?php
      for ($a = 1; $a <= 20; $a++): ?>
      <option value="<?= $a ?>">
        <?= $a?>
      </option>
      <?php endfor; ?>
    </select>
  </div>
</body>

</html>