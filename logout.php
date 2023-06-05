<?php
require_once "./_partials/_loginCheck.php";
session_unset();
session_destroy();
header("location:./index.php");
