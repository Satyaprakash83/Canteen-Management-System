<?php
    include "./../_partials/_connect.php";

    $addFood=$_POST['addFood'];

    $qry= "INSERT into `food_items` values(0,'$addFood')";

    if(mysqli_query($connection,$qry)){
        // echo "<h3> Item Added Successfully</h3>";
    }
    else{
        echo mysqli_error($connection);
    }
?>