<?php
$id = $_POST['id'];
$name = $_POST['name'];
$password = hash('sha256', $_POST['password']);
$email = $_POST['email'];
$userType = $_POST['userType'];

require_once './_partials/_connect.php';

$query = "INSERT INTO `registration_requests` (`user_id`, `user_name`, `user_password`, `user_email`, `user_type`) VALUES ('$id', '$name', '$password', '$email', '$userType')";
if (mysqli_query($connection, $query)) {
    echo 'inserted';
}
