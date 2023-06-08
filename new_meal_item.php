<?php
require_once './_partials/_connect.php';
require_once './_partials/_loginCheck.php';

$mealList = json_encode($_POST['mealList']);
$mealCatagory = $_POST['mealCatagory'];
$mealType = $_POST['mealType'];
$ratingArray = json_encode($_POST['ratingArray']);

$query = "INSERT INTO `meal_table` (`meal_id`, `meal_item_list`, `meal_category`, `meal_type`, `yearly_meal_rating`) VALUES (NULL, '$mealList', '$mealCatagory', '$mealType', '$ratingArray')";

if (mysqli_query($connection, $query)) {
    echo "Item Added Successfully";
} else {
    echo "Something went Wrong, Please try Again";
}
