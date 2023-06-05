<?php
$id = $_GET['id'];

require_once "./../_partials/_connect.php";

$query = "SELECT * FROM `registration_requests` WHERE user_id = '$id'";

$requestResults = mysqli_fetch_assoc(mysqli_query($connection, $query));



if ($requestResults['user_type'] === 'STUDENT') {
    $query = "SELECT * FROM `student_view` WHERE student_id = '$id'";
}

if ($requestResults['user_type'] === 'FACULTY') {
    $query = "SELECT * FROM `faculty_view` WHERE faculty_id = '$id'";
}

$memberData = mysqli_fetch_assoc(mysqli_query($connection, $query));

if ($memberData !== null) {

    switch ($requestResults['user_type']) {
        case 'STUDENT':
            $userid = $memberData['student_id'];
            $username = $memberData['student_name'];
            $useremail = $memberData['student_email'];
            break;
        case 'FACULTY':
            $userid = $memberData['faculty_id'];
            $username = $memberData['faculty_name'];
            $useremail = $memberData['faculty_email'];
            break;
    }

    if (
        $requestResults["user_id"] !== $userid
        || $requestResults["user_name"] !== $username
        || $requestResults["user_email"] !== $useremail
    ) {
        header("location:./requestDelete.php?id=$id");
        die();
    }


    $id = $requestResults['user_id'];
    $name = $requestResults['user_name'];
    $password = $requestResults['user_password'];
    $user_type = $requestResults['user_type'];

    $query = "INSERT INTO `user_information` (`user_id`, `user_name`, `user_password`, `user_type`) VALUES ('$id', '$name', '$password', '$user_type')";
    mysqli_query($connection, $query);
}



header("location:./requestDelete.php?id=$id");
