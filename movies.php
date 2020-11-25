<?php
include "db.php";

$query = "SELECT * FROM movie";

$result = mysqli_query($connection, $query);
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Movies Rating</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>

<body class="is-preload">
	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="header">
			<div class="inner">

				<!-- Logo -->
				<a href="index.html" class="logo">
					<span class="fa fa-car"></span> <span class="title">Rate Movies</span>
				</a>

				<!-- Nav -->
				<nav>
					<ul>
						<li><a href="#menu">Menu</a></li>
					</ul>
				</nav>

			</div>
		</header>

		<!-- Menu -->
		<nav id="menu">
			<h2>Menu</h2>
			<ul>
				<li><a href="index.php">Home</a></li>

				<li><a href="movies.php" class="active">Movies</a></li>

				<li><a href="addMovie.php">Add Movie</a></li>

				<li><a href="testimonials.php">Testimonials</a></li>
			</ul>
		</nav>

		<!-- Main -->
		<div id="main">
			<div class="inner">
				<h1>Movies</h1>

				<div class="image main">
					<img src="images/movie1.jpg" class="img-fluid" alt="" />
				</div>

				<!-- Offers -->
				<?php
				while ($row = mysqli_fetch_row($result)) {
				?>
					<div class="card" style="width: 18rem">
						<img class="card-img-top" src="<?php echo $row[3] ?>" alt="" />
						<div class="card-body">
							<h2 class="card-title"><?php echo $row[1] ?></h2>
							<p class="card-text"><?php print_r($row[2]) ?></p>
							<p class="card-text">Rating: <?php print_r($row[4]) ?>/5</p>
						</div>
						<a class="btn btn-primary text-light" href="rate.php">RATE</a>
					</div>
					<br />
				<?php
				}
				?>
			</div>
		</div>

		<!-- Footer -->
		<footer id="footer">
			<div class="inner">
				<section>
					<h2>Contact Info</h2>

					<ul class="alt">
						<li><span class="fa fa-envelope-o"></span> <a href="#">ratewebsite@ratewebsite.com</a></li>
						<li><span class="fa fa-phone"></span> +1 333 4040 5566 </li>
						<li><span class="fa fa-map-pin"></span> 212 Barrington Court New York, ABC 10001 United States of America</li>
					</ul>

					<h2>Follow Us</h2>

					<ul class="icons">
						<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
					</ul>
				</section>
			</div>
		</footer>
	</div>
	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>