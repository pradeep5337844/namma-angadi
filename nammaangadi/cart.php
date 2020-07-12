<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Wishlist</title>
  <link rel="icon" href="images/logo/store.png" type="image/x-icon">
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
  <style>
    .nav-item:hover {
      background-color: rgb(97, 99, 99);
      border-radius: 50px;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="images/logo/logo.jpeg" width="100" height="50" class="d-inline-block align-top" alt="" loading="lazy"> <i><sub>Namma Angadi</sub></i>
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home

            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About

            </a>
          </li>

          <li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Cart
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="wishlist.php">Wishlist</a>
          </li>

          <!-- Drop Dwon -->
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php
              if (isset($_COOKIE["username"])) {
                echo "Hi " . $_COOKIE["username"];
              } else {
                echo "Welcome Guest!";
              }
              ?>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <?php
              if (isset($_COOKIE["username"])) {
                echo '<a class="dropdown-item" href="#">Profile</a>';
                echo '<a class="dropdown-item" href="cookies.php">Logout</a>';
              } else {
                echo '<a class="dropdown-item" href="login.php">Login</a>';
                echo '<a class="dropdown-item" href="register.php">Register</a>';
              }
              ?>
            </div>
          </div>

        </ul>
      </div>
    </div>
  </nav>



  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-align text-white"><b>Contact Us</b> </p>
      <p class="m-0 text-white">Twitter: @nammaangadi<br>
        Facebook: Namma Angadi<br>
        Instagram: Namma Angadi<br>
        E-mail ID:nammaangadi@gmail.com
      </p>
      <p class="m-0 text-center text-white">Copyright &copy; Namma Angadi-2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>