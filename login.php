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
        <section class="input-group" id="login">
          <input type="text" class="input-field" placeholder="College Id" required />
          <input type="password" class="input-field" placeholder="Password" required />
          <input type="checkbox" class="check-box" /><span>Remember Password</span>
          <button class="submit-btn">Log In</button>
        </section>

        <section class="input-group" id="register" style="left: 450px">
          <input type="text" id="registerId" class="input-field" placeholder="College Id" required />

          <input type="password" id="pass" class="input-field" placeholder="Password" value="" required />
          <span id="message" style="color: red"></span>
          
          <input type="password" id="pass1" class="input-field" placeholder="Confirm Password" value="" required />

          <input type="checkbox" class="check-box" /><span>I agree to the terms and conditions</span>
          <button class="submit-btn" id="registerBtn">Register</button>
        </section>
      </div>
      <div class="image-box">
        <img src="./login.jpg" alt="canteen" class="canteen_img" />
      </div>
    </div>
  </div>
  </main>
</body>

</html>