<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="login.css" />
  <script src="./jQuery/jquery-3.7.0.js"></script>
  <script src="./login.js" defer></script>
</head>

<body>
  <main>
    <div class="login">
      <div class="box">
        <div class="form-box" style="overflow: hidden">
          <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="login()">
              Log In
            </button>
            <button type="button" class="toggle-btn" onclick="register()">
              Register
            </button>
          </div>
          <form class="input-group" id="login" action="./login.php" method="post">
            <input type="text" class="input-field" placeholder="College Id" name="id" required />
            <input type="password" class="input-field" placeholder="Password" name="password" required />
            <select name="user_type" class="input-field">
              <option value="STUDENT">Student</option>
              <option value="FACULTY">Faculty</option>
              <option value="ADMIN">Admin</option>
            </select>
            <input type="checkbox" class="check-box" /><span>Remember Password</span>
            <button class="submit-btn" name="login">Log In</button>
          </form>

          <form class="input-group" id="register" style="left: 450px" action="./login.php" method="post">
            <input type="text" id="registerId" class="input-field" placeholder="College Id" required />
            <input type="text" id="registerName" class="input-field" placeholder="Enter your Name" required />

            <input type="password" id="pass" class="input-field" placeholder="Password" value="" required />
            <span id="message" style="color: red"></span>

            <input type="password" id="pass1" class="input-field" placeholder="Confirm Password" value="" required />

            <input type="email" id="email" class="input-field" placeholder="E-mail" required />

            <select name="user_type" class="input-field" id="user_type">
              <option value="STUDENT">Student</option>
              <option value="FACULTY">Faculty</option>
            </select>

            <input type="checkbox" class="check-box" name="t&c" /><span>I agree to the terms and conditions</span>
            <button type="button" class="submit-btn" id="registerBtn">Register</button>
          </form>
        </div>
        <div class="image-box">
          <img src="./login.jpg" alt="canteen" class="canteen_img" />
        </div>
      </div>
    </div>
  </main>

  <!-- LogIn PHP -->
  <?php
  if (!isset($_POST['login'])) echo die();

  $id = $_POST['id'];
  $password = hash('sha256', $_POST['password']);

  switch ($_POST['user_type']) {
    case 'STUDENT':
      $query = "SELECT * FROM user_information WHERE user_id = '$id' && user_password = '$password'";
      break;
    case 'FACULTY':
      $query = "SELECT * FROM user_information WHERE user_id = '$id' && user_password = '$password'";
      break;
    case 'ADMIN':
      $query = "SELECT * FROM admin_information WHERE admin_id = '$id' && admin_password = '$password'";
      break;

    default:
      # code...
      break;
  }
  require_once './_partials/_connect.php';

  $result = mysqli_fetch_all(mysqli_query($connection, $query));

  if (count($result) != 1) die();

  session_start();
  $_SESSION['user_id'] = $id;
  $_SESSION['user_type'] = $_POST['user_type'];
  header('location:index.php');
  ?>
</body>

</html>