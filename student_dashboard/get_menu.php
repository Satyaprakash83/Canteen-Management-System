<?php
require_once './../_partials/_connect.php';

$query = "SELECT * FROM menu";

$result = mysqli_query($connection, $query);

echo json_encode(mysqli_fetch_all($result, MYSQLI_ASSOC));
