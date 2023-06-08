<?php
require_once './_partials/_connect.php';
require_once './_partials/_loginCheck.php';

$id = $_SESSION["user_id"];
$preferenceList = json_encode($_POST['preferenceList']);

$query = "UPDATE `user_food_preference` SET `user_preference` = '$preferenceList'";

if (mysqli_query($connection, $query)) {
    echo "Preference Updated";
} else {
    echo "Something went Wrong";
}
