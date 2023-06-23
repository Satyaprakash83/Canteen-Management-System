<?php
 include "./_partials/_connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>
    <link rel="stylesheet" href="review.css">
</head>
<body>
    <div class="container">
        <h1>Canteen Review</h1>
        <form id="reviewForm" action="review.php" method="post">
            <label> Please Provide Review Category Below:</label>
            <select name="category" id="category">
                <option value="staff" name="category">Staff</option>
                <option value="food" name="category">Food</option>
            </select>
            <label for="feedback">Please Provide Your Review Below:</label>
            <textarea id="feedback" name="feedback" required></textarea>

            <button type="submit" name="submit">Submit Feedback</button>
        </form>
    </div>
    <?php
        session_start();
    
        if(isset($_POST['submit'])){
            $id=$_SESSION['user_id'];
            $category = $_POST['category'];
            $feedback= $_POST['feedback'];
            $qry = "INSERT into `user_review` values('$id','$category','$feedback')";
            mysqli_query($connection,$qry);
               
            
        }
    ?>
 
</body>
</html>