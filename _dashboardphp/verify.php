<?php
$id = $_GET['id'];

require_once "./../_partials/_connect.php";

$query = "SELECT * FROM `registration_requests` WHERE user_id = '$id'";

$result = mysqli_fetch_assoc(mysqli_query($connection, $query));



if ($result['user_type'] === 'STUDENT') {
    $query = "SELECT * FROM `student_view` WHERE student_id = '$id'";
}

if ($result['user_type'] === 'FACULTY') {
    $query = "SELECT * FROM `faculty_view` WHERE faculty_id = '$id'";
}

$memberData = mysqli_fetch_assoc(mysqli_query($connection, $query));

if ($memberData !== null) {
    foreach ($result as $key => $value) {
        if ($result["$key"] !== $memberData["$key"]) {
            header('location:./../requestDelete.php?user_id=$id');
        }
    }

    $id = $result['user_id'];
    $name = $result['user_name'];
    $password = $result['user_password'];
    $user_type = $result['user_type'];

    $query = "INSERT INTO `user_information` (`user_id`, `user_name`, `user_password`, `user_type`) VALUES ('$id', '$name', '$password', '$user_type')";
    mysqli_query($connection, $query);
}
// echo "<pre>";
// print_r($memberData);
// echo "</pre>";



header('location:./../requestDelete.php?user_id=$id');
