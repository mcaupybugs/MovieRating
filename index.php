<!DOCTYPE html>
<html>

<head>
  <title>Rating website</title>
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
        <a href="index.php" class="logo">
          <span class="title">Movie Rating website</span>
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
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="movies.php">Movies</a></li>
        <li><a href="addMovie.php">Add Movie</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="logout.php">Logout</a></li>
        <li><a href="testimonials.php">Testimonials</a></li>
      </ul>
    </nav>

    <!-- Main -->
    <div id="main">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="images/movie1.jpg" alt="First slide" />
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/movie2.jpg" alt="Second slide" />
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/movie3.jpeg" alt="Third slide" />
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <br />
      <br />

      <div class="inner">
        <!-- About Us -->
        <header id="inner">
          <h1>Rate a movie so that your peers have fun</h1>
          <p>
            Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod
            sit amet nisi euismod sed cursus arcu elementum ipsum arcu vivamus
            quis venenatis orci lorem ipsum et magna feugiat veroeros aliquam.
            Lorem ipsum dolor sit amet nullam dolore.
          </p>
        </header>

        <br />

        <h2 class="h2">Testimonials</h2>

        <div class="row">
          <div class="col-sm-6 text-center">
            <p class="m-n">
              <em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Sunt delectus mollitia, debitis architecto recusandae? Quidem
                ipsa, quo, labore minima enim similique, delectus ullam non
                laboriosam laborum distinctio repellat quas deserunt voluptas
                reprehenderit dignissimos voluptatum deleniti saepe. Facere
                expedita autem quos."</em>
            </p>

            <p><strong> - John Doe</strong></p>
          </div>

          <div class="col-sm-6 text-center">
            <p class="m-n">
              <em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Sunt delectus mollitia, debitis architecto recusandae? Quidem
                ipsa, quo, labore minima enim similique, delectus ullam non
                laboriosam laborum distinctio repellat quas deserunt voluptas
                reprehenderit dignissimos voluptatum deleniti saepe. Facere
                expedita autem quos."</em>
            </p>

            <p><strong>- John Doe</strong></p>
          </div>
        </div>

        <p class="text-center">
          <a href="testimonials.html">Read More &nbsp;<i class="fa fa-long-arrow-right"></i></a>
        </p>
      </div>
    </div>

    <!-- Footer -->
    <footer id="footer">
      <div class="inner">
        <section>
          <h2>Contact Info</h2>

          <ul class="alt">
            <li>
              <span class="fa fa-envelope-o"></span>
              <a href="#">ratewebsite@ratewebsite.com</a>
            </li>
            <li><span class="fa fa-phone"></span> +1 333 4040 5566</li>
            <li>
              <span class="fa fa-map-pin"></span> 212 Barrington Court New
              York, ABC 10001 United States of America
            </li>
          </ul>

          <h2>Follow Us</h2>

          <ul class="icons">
            <li>
              <a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a>
            </li>
            <li>
              <a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a>
            </li>
            <li>
              <a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a>
            </li>
            <li>
              <a href="#" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a>
            </li>
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