<?php
include "../db.php";

$result = $conn->query(
    "SELECT * FROM customers"
);
?>

<!DOCTYPE html>
<html>

<head>

<title>Customers</title>

<link rel="stylesheet"
      href="../bootstrap/css/bootstrap.min.css">

</head>

<body>

<div class="container mt-5">

<h2>Customer List</h2>

<a href="add.php"
   class="btn btn-primary mb-3">
   Add Customer
</a>

<table class="table table-bordered">

<tr class="table-dark">

    <th>ID</th>
    <th>Name</th>
    <th>Phone</th>
    <th>Address</th>
    <th>Action</th>

</tr>

<?php while ($row =
    $result->fetch_assoc()) { ?>

<tr>

    <td><?= $row['id'] ?></td>

    <td><?= $row['name'] ?></td>

    <td><?= $row['phone'] ?></td>

    <td><?= $row['address'] ?></td>

    <td>

        <a href="edit.php?id=<?= $row['id'] ?>"
           class="btn btn-warning btn-sm">
           Edit
        </a>

        <a href="delete.php?id=<?= $row['id'] ?>"
           class="btn btn-danger btn-sm">
           Delete
        </a>

    </td>

</tr>

<?php } ?>

</table>

</div>

</body>
</html>