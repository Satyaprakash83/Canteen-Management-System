<?php
include "./_partials/_connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="header">
        <h1>Dashboard</h1>
    </div>
    <ul class="container">
        <li>
            <span class="card">
                <h3>30</h3>
                <p>Total Staff</p>
            </span>
        </li>
        <li>
            <span class="card">
                <h3>3000</h3>
                <p>Total Student</p>
            </span>
        </li>
        <li>
            <span class="card">
                <h3>35</h3>
                <p>Total Food Item</p>
            </span>
        </li>
    </ul>
    <div class="registration">
        <?php
        $qry = "SELECT * from `user_information` limit 5";
        $result = mysqli_query($connection, $qry);
        if (mysqli_num_rows($result) > 0) {
        ?>

            <div class="registered-members">
                <div class="head">
                    <h3>Registered Members</h3>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Member-Id</th>
                            <th>Member-Name</th>
                            <th>Member-type</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($data = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td>
                                    <p><?php echo $data['user_id'] ?></p>
                                </td>
                                <td><?php echo $data['user_name'] ?></td>
                                <td> <?php if ($data['user_type'] == 'STUDENT') {
                                        ?>
                                        <button type="button" class="status"><?php echo $data['user_type'] ?></button>
                                    <?php
                                        } else {
                                    ?>
                                        <button type="button" class="status"><?php echo $data['user_type'] ?></button>
                                    <?php

                                        }

                                    ?>

                                </td>
                            </tr>

                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        <?php
        } else {
            echo "<h2>No Member are Registered</h2>";
        }
        ?>




        <div class="registration-request">
            <div class="head-1">
                <h3>Registration Request</h3>
            </div>
            <table id="registrationRequests">
                <?php
                $qry = "SELECT * FROM `registration_requests`";
                $res = mysqli_query($connection, $qry);
                if (mysqli_num_rows($res) > 0) {
                ?>

                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>College Id</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php
                    while ($data = mysqli_fetch_assoc($res)) {
                    ?>
                        <tbody>
                            <tr>
                                <td>
                                    <p><?php echo $data['user_name']; ?></p>
                                </td>
                                <td><?php echo $data['user_id']; ?></td>
                                <td><button type="submit" class="accept-request"><a href="./_dashboardphp/verify.php?id=<?php echo $data['user_id']; ?>">Accept</a></button>
                                    <button type="submit" class="decline-request"><a href="./_dashboardphp/requestDelete.php?id=<?php echo $data['user_id']; ?>">Decline</a></button>
                                </td>
                            </tr>
                        </tbody>
                    <?php
                    }
                    ?>
            </table>
        <?php
                }
        ?>

        </div>
    </div>

    <script>
        const memberTypes = document.querySelectorAll('.status');
        memberTypes.forEach(element => {
            if (element.textContent === "STUDENT") element.style.backgroundColor = '#0080ff';
            if (element.textContent === "FACULTY") element.style.backgroundColor = 'orangered';
        })
    </script>


</body>

</html>