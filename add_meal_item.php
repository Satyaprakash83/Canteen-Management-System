<?php
include "./_partials/_connect.php";
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

    <!-- font-awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- custom -->
    <link rel="stylesheet" href="./add_meal_item.css">
    <script src="./add_meal_item.js" defer></script>

</head>

<body>
    <header>
        <h1>Add Meal Item</h1>
    </header>
    <div class="select-food container" id="selectFood">
        <div class="add-meal" id="addMeal"></div>
        <select name="" id="">
        <option value="Breakfast">Breakfast</option>
            <option value="Lunch">Lunch</option>
            <option value="Dinner">Dinner</option>
        </select>
        <select name="" id="">
            <option value="Veg">Veg</option>
            <option value="Non-veg">Non-Veg</option>
        </select>
        <div class="btn">
            <button type="submit">Add</button>
        </div>
    </div>
    <div class="container" id="container">
        <?php
        $qry = "SELECT * from `food_items`";
        $result = mysqli_query($connection, $qry);
        if (mysqli_num_rows($result) > 0) {
        ?>
            <?php
            while ($data = mysqli_fetch_assoc($result)) {
            ?>
                <div class="food-item" id="foodItem">
                    <?php echo $data['food_name'] ?><button> &Cross; </button>
                </div>
        <?php
            }
        }
        ?>
    </div>
</body>

</html>