let x = document.getElementById("login");
let y = document.getElementById("register");
let z = document.getElementById("btn");

function register() {
  x.style.left = "-400px";
  y.style.left = "50px";
  z.style.left = "110px";
}

function login() {
  x.style.left = "50px";
  y.style.left = "450px";
  z.style.left = "0px";
}

document.getElementById("registerBtn").addEventListener("click", (event) => {
  let check = document.getElementById("pass").value;
  let recheck = document.getElementById("pass1").value;

  if (check.length < 8) {
    document.getElementById("message").innerText =
      "**Password length must be greater than 8 characters";
    event.preventDefault();
  }

  if (check !== recheck) {
    document.getElementById("message").innerText =
      "**Password and confirm password are not same";
    event.preventDefault();
  }
});

$("#registerBtn").click(() => {
  const id = $("#registerId").val();
  const name = $("#registerName").val();
  const password = $("#pass").val();
  const email = $("#email").val();
  const userType = $("#user_type").val();

  $.post("./register.php", { id, name, password, email, userType }, (data) => {
    if (data === "inserted") {
      location.href = "./login.php";
    }
  });
});
