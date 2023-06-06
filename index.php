<?php
require_once './_partials/_loginCheck.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">
	<!-- jQuery -->
	<script src="./jQuery/jquery-3.7.0.js"></script>
	<!-- My JS -->
	<script src="script.js" defer></script>


	<title>AdminHub</title>
</head>

<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Canteen</span>
		</a>
		<ul class="side-menu top">
			<li class="active" title="Dashboard">
				<a href="dashboard.php" target="frame">
					<i class='bx bxs-dashboard'></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li title="Leave Apply">
				<a href="./apply_leave.html" target="frame">
					<i class='bx bxs-notepad'></i>
					<span class="text">Leave Apply</span>
				</a>
			</li>
			<li title="Add Food Item">
				<a href="./add_food_item.html" target="frame">
					<i class='bx bx-food-tag'></i>
					<span class="text">Add Food Item</span>
				</a>
			</li>
			<li title="Add Meal Item">
				<a href="./add_meal_item.html" target="frame">
				<i class='bx bxs-food-menu' ></i>
					<span class="text">Add Meal Item</span>
				</a>
			</li>
			<li title="Food Preference">
				<a href="./food_pref.html" target="frame">
					<i class='bx bxs-pizza'></i>
					<span class="text">Food Preference</span>
				</a>
			</li>
			<li title="Analytics">
				<a href="#" target="frame">
					<i class='bx bxs-doughnut-chart'></i>
					<span class="text">Analytics</span>
				</a>
			</li>
			<li title="Message">
				<a href="#" target="frame">
					<i class='bx bxs-message-dots'></i>
					<span class="text">Message</span>
				</a>
			</li>
			<li title="Team">
				<a href="./teams_page.html" target="frame">
					<i class='bx bxs-group'></i>
					<span class="text">Team</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li title="Settings">
				<a href="#">
					<i class='bx bxs-cog'></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li title="Logout">
				<a href="./logout.php" class="logout">
					<i class='bx bxs-log-out-circle'></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu'></i>
			<a href="#" class="nav-link">Categories</a>
			<!-- <form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell'></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a> -->
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<iframe src="./dashboard.php" class="frame" name="frame" frameborder="0" sandbox="allow-scripts allow-same-origin"></iframe>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->

</body>

</html>