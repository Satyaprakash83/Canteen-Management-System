<?php
require_once './_partials/_connect.php';
require_once './_partials/_loginCheck.php';

$id = $_SESSION['user_id'];
$query = "SELECT * FROM `user_food_preference` WHERE user_id='$id'";

$queryResult = mysqli_query($connection, $query);
if (mysqli_num_rows($queryResult) === 1)
  $preferenceList = json_decode(mysqli_fetch_assoc($queryResult)['user_preference'], true);
else
  $preferenceList = [
    "Monday" => [0, 0, 0],
    "Tuesday" => [0, 0, 0],
    "Wednesday" => [0, 0, 0],
    "Thursday" => [0, 0, 0],
    "Friday" => [0, 0, 0],
    "Saturday" => [0, 0, 0],
    "Sunday" => [0, 0, 0],
  ];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Food prefernce table</title>
  <link rel="stylesheet" href="./apply_leave.css" />
  <link rel="stylesheet" href="./food_pref.css" />

  <!-- jQuery -->
  <script src="./jQuery/jquery-3.7.0.js"></script>

  <!-- MyJS -->
  <script src="./food_pref.js" defer></script>
</head>

<body>
  <header>
    <h1>Food Prefernce Table</h1>
  </header>
  <main>
    <section class="container">
      <table>
        <tr>
          <th>Slot</th>
          <th>Monday</th>
          <th>Tuesday</th>
          <th>Wednesday</th>
          <th>Thursday</th>
          <th>Friday</th>
          <th>Saturday</th>
          <th>Sunday</th>
        </tr>
        <tr>
          <td>Breakfast</td>
          <td>
            <select class="select-food">
              <option value="Veg">Veg</option>
            </select>
          </td>
          <td>
            <select class="select-food">
              <option value="Veg">Veg</option>
            </select>
          </td>
          <td>
            <select class="select-food">
              <option value="Veg">Veg</option>
            </select>
          </td>
          <td>
            <select class="select-food">
              <option value="Veg">Veg</option>
            </select>
          </td>
          <td>
            <select class="select-food">
              <option value="Veg">Veg</option>
            </select>
          </td>
          <td>
            <select class="select-food">
              <option value="Veg">Veg</option>
            </select>
          </td>
          <td>
            <select class="select-food">
              <option value="Veg">Veg</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Lunch</td>
          <td>
            <select class="select-food">
              <option value="Veg">Veg</option>
            </select>
          </td>
          <td>
            <select class="select-food">
              <option value="Veg">Veg</option>
              <option value="Non-veg" <?php if ($preferenceList['Tuesday'][1] === "1") echo 'selected'; ?>>Non-Veg</option>
            </select>
          </td>
          <td>
            <select class="select-food">
              <option value="Veg">Veg</option>
              <option value="Non-veg" <?php if ($preferenceList['Wednesday'][1] === "1") echo 'selected'; ?>>Non-Veg</option>
            </select>
          </td>
          <td>
            <select class="select-food">
              <option value="Veg">Veg</option>
            </select>
          </td>
          <td>
            <select class="select-food">
              <option value="Veg">Veg</option>
              <option value="Non-veg" <?php if ($preferenceList['Friday'][1] === "1") echo 'selected'; ?>>Non-Veg</option>
            </select>
          </td>
          <td>
            <select class="select-food">
              <option value="Veg">Veg</option>
              <option value="Non-veg" <?php if ($preferenceList['Saturday'][1] === "1") echo 'selected'; ?>>Non-Veg</option>
            </select>
          </td>
          <td>
            <select class="select-food">
              <option value="Veg">Veg</option>
              <option value="Non-veg" <?php if ($preferenceList['Sunday'][1] === "1") echo 'selected'; ?>>Non-Veg</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Dinner</td>
          <td>
            <select class="select-food">
              <option value="Veg">Veg</option>
            </select>
          </td>
          <td>
            <select class="select-food">
              <option value="Veg">Veg</option>
              <option value="Non-veg" <?php if ($preferenceList['Tuesday'][2] === "1") echo 'selected'; ?>>Non-Veg</option>
            </select>
          </td>
          <td>
            <select class="select-food">
              <option value="Veg">Veg</option>
              <option value="Non-veg" <?php if ($preferenceList['Wednesday'][2] === "1") echo 'selected'; ?>>Non-Veg</option>
            </select>
          </td>
          <td>
            <select class="select-food">
              <option value="Veg">Veg</option>
            </select>
          </td>
          <td>
            <select class="select-food">
              <option value="Veg">Veg</option>
              <option value="Non-veg" <?php if ($preferenceList['Friday'][2] === "1") echo 'selected'; ?>>Non-veg</option>
            </select>
          </td>
          <td>
            <select class="select-food">
              <option value="Veg">Veg</option>
              <option value="Non-veg" <?php if ($preferenceList['Saturday'][2] === "1") echo 'selected'; ?>>Non-Veg</option>
            </select>
          </td>
          <td>
            <select class="select-food">
              <option value="Veg">Veg</option>
              <option value="Non-veg" <?php if ($preferenceList['Sunday'][2] === "1") echo 'selected'; ?>>Non-Veg</option>
            </select>
          </td>
        </tr>
      </table>
      <div class="submit-food-pref">
        <button type="reset" value="Reset" class="reset-data">Reset</button>
        <button type="submit" value="submit" class="submit-data">
          Submit
        </button>
      </div>
    </section>
  </main>
</body>

</html>