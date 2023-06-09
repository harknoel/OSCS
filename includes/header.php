<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="css/site.css">

	<title>OSCS - <?php echo $title ?></title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-cart-alt'></i>
			<span class="text">Online Shopping Cart System</span>
		</a>
		<ul class="side-menu top">
			<li class="<?php echo $home ?>">
				<a href="main.php">
					<i class='bx bxs-home'></i>
					<span class="text">Home</span>
				</a>
			</li>
			<li class="<?php echo $dashboard ?>">
				<a href="dashboard.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li class="<?php echo $aboutme ?>">
				<a href="aboutme.php">
					<i class='bx bxs-user'></i>
					<span class="text">About Me</span>
				</a>
			</li>
			<li class="<?php echo $contact ?>">
				<a href="#">
					<i class='bx bxs-phone' ></i>
					<span class="text">Contact US</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
	<!-- NAVBAR -->
	<nav>
		<i class='bx bx-menu' ></i>
		<!-- <a href="#" class="nav-link">Categories</a> -->
		<form action="#">
			<div class="form-input">
				<input type="search" placeholder="Search...">
				<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
			</div>
		</form>
	</nav>
	<!-- NAVBAR -->

	<!-- MAIN -->
	<main>