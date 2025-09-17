<?php require 'connect.php';
if (!empty($_POST)) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];

$insert_query = $db->prepare(
    "INSERT INTO users (firstName, lastName) VALUES (:firstName, :lastName)"
);
$insert_query->execute(compact('firstName', 'lastName'));

    header("Location: index.php");
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Data Object</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
<div class="row">
<div class="col-md-6">
<h4 class="mt-5">Insert Users</h4>
    <form action="" method="post">
        <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" name="firstName" id="firstName" class="form-control">
        </div>
        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" name="lastName" id="lastName" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Add</button></button>

        <a href="users.php" class="btn btn-success">Lihat Semua Users</a>
    </form>
</div>
</div>
    </div>
</body>
</html>