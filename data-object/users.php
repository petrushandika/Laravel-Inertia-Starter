<?php require 'connect.php';
$users = $db->query('SELECT * FROM users')->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semua Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
<div class="row">
<div class="col-md-6">
<h4 class="mt-5">Semua Data</h4>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Act</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $user['firstName'] ?></td>
            <td><?= $user['lastName'] ?></td>
            <td><a href="edit.php?id=<?= $user['id'] ?>">Edit User</a></td>
        </tr>
        <?php $no++; ?>
        <?php endforeach ?>
    </tbody>
</table>
</div>
</div>
</div>
</body>
</html>