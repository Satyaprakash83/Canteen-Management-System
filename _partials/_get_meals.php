<?php
require_once './_connect.php';

$query = "SELECT meal_id, meal_item_list, meal_category, meal_type FROM meal_table";

$result = mysqli_query($connection, $query);

$mealList = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($mealList);
