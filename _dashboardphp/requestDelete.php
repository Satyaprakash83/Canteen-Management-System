<?php
include "./../_partials/_connect.php";
$userid = $_GET['id'];
$qry = "DELETE from `registration_requests` where user_id= '$userid'";
if (mysqli_query($connection, $qry)) {
    header("location:./../dashboard.php");
} else {
    echo mysqli_error($connection);
}
?>
