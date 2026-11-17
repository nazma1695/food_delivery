<?php

$conn = new mysqli(
    "localhost",
    "root",
    "",
    "food_delivery"
);

if ($conn->connect_error) {
    die("Database Connection Failed: "
        . $conn->connect_error);
}

?>