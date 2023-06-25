<?php
require_once './_connect.php';
$query = "SELECT * FROM food_items";

$result = mysqli_query($connection, $query);

$foodList = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($foodList);
