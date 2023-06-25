<?php
require_once './../_partials/_connect.php';
// require_once './../_partials/_loginCheck.php';

$data = json_encode($_POST['selected']);
$query = "TRUNCATE TABLE menu";

if (mysqli_query($connection, $query)) {
    $query = "INSERT INTO `menu` (`menu_list`) VALUES ('$data')";

    if (mysqli_query($connection, $query)) {
        echo "Menu Updated";
    } else {
        echo "Something went Wrong";
    }
}
