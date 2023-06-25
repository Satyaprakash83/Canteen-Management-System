<?php
require_once "./_partials/_connect.php";
require_once "./_partials/_loginCheck.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Page</title>
    <link rel="stylesheet" href="./teams_page.css">
    <link rel="stylesheet" href="./add_members.css">
</head>

<body>
    <header>
        <h1>Executive Team</h1>
    </header>

    <div class="team-container">
        <?php
        $qry = "SELECT * from `team_information`";
        $result = mysqli_query($connection, $qry);
        if (mysqli_num_rows($result) === 0) {
            echo "<h3>No Member Added</h3>";
        } else {
            while ($data = mysqli_fetch_assoc($result)) {
        ?>
                <div class="team-member">
                    <img src="./images/<?php echo $data['image_name']; ?>" alt="member-1">
                    <h4><?php echo $data['name']; ?></h4>
                    <p>Phone: <?php echo $data['phone']; ?></p>
                </div>

        <?php
            }
        }
        ?>
    </div>
    <?php
    if ($_SESSION['user_type'] === 'ADMIN') {
        include "./add_members.php";
    }
    ?>

</body>

</html>