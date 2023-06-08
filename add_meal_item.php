<?php
include "./_partials/_connect.php";
require_once './_partials/_loginCheck.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Meal Item</title>

    <!-- jQuery -->
    <script src="./jQuery/jquery-3.7.0.js"></script>

    <!-- custom -->
    <link rel="stylesheet" href="./add_meal_item.css">
    <script src="./add_meal_item.js" defer></script>

</head>

<body>
    <header>
        <h1>Add Meal Item</h1>
    </header>
    <section class="select-food container" id="selectFood">
        <div class="add-meal" id="selected_food"></div>
        <select class="meal_catagory" id="meal_catagory">
            <option value="1">Breakfast</option>
            <option value="2">Lunch</option>
            <option value="3">Dinner</option>
        </select>
        <select class="meal_type" id="meal_type">
            <option value="0">Veg</option>
            <option value="1">Non-Veg</option>
        </select>
        <div class="btn" id="submit_btn">
            <button type="submit">Add Meal</button>
        </div>
    </section>
    <section class="container" id="all_food">
        <?php
        $qry = "SELECT * from `food_items`";
        $result = mysqli_query($connection, $qry);
        if (mysqli_num_rows($result) > 0) {
        ?>
            <?php
            while ($data = mysqli_fetch_assoc($result)) {
            ?>
                <div class="food-item" id="<?php echo $data['food_id'] ?>">
                    <?php echo $data['food_name']; ?><button id="remove_btn"> &Cross; </button>
                </div>
        <?php
            }
        }
        ?>
    </section>
</body>

</html>