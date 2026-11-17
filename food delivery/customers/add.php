<?php
include "../db.php";

if (isset($_POST['save'])) {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $sql = "INSERT INTO customers
            (name, phone, address)
            VALUES ('$name', '$phone', '$address')";

    $conn->query($sql);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Add Customer</title>

    <link rel="stylesheet"
          href="../bootstrap/css/bootstrap.min.css">
</head>

<body>

<div class="container mt-5">

<h2>Add Customer</h2>

<form method="POST">

    <label>Name</label>

    <input type="text"
           name="name"
           class="form-control"
           required>

    <label class="mt-3">Phone</label>

    <input type="text"
           name="phone"
           class="form-control">

    <label class="mt-3">Address</label>

    <input type="text"
           name="address"
           class="form-control">

    <button name="save"
            class="btn btn-primary mt-3">
        Save Customer
    </button>

</form>

</div>

</body>
</html>