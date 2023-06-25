<?php
include "./_partials/_connect.php";
?>

<header>
    <h1>Add New Members</h1>
</header>
<form action="./add_members.php" method="post" enctype="multipart/form-data">
    <div class="container">
        <label for="">Select An Image</label>
        <input type="file" name="attachment">
        <label>Member Name:</label>
        <input type="text" name="name" placeholder="enter a memeber name">
        <label>Member Phone No.:</label>
        <input type="text" name="phone" placeholder="enter phone no">
        <button class="upload" type="submit" name="upload">Add</button>
    </div>
</form>

<?php
if (isset($_POST['upload'])) {
    $image = $_FILES['attachment'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $qry = "INSERT into `team_information` values(0,'$name','$phone','" . $image['name'] . "')";
    $path = __DIR__ . "\\images\\" . $image['name'];
    if (move_uploaded_file($image['tmp_name'], $path)) {
        mysqli_query($connection, $qry);
        // echo "<h3>Details Uploaded successfully</h3>";
    }
}
?>