<?php
 include "./../_partials/_connect.php";

 $qry= "SELECT * from `food_items`";
  $result= mysqli_query($connection,$qry);
  echo json_encode(mysqli_fetch_all($result,MYSQLI_ASSOC));
?>