<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <title>Login</title>
    <link rel = "icon" href =  "images/logo/store.png" type = "image/x-icon">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.css" rel="stylesheet">

    <style>
       .nav-item:hover {
        background-color: rgb(97, 99, 99);
        border-radius: 50px;
    }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
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
            <li class="nav-item ">
              <a class="nav-link" href="index.php">Home
               
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Login
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cart.php">Cart</a>
            </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="wishlist.php">Wishlist</a>
          </li>
          </ul>
        </div>
      </div>
    </nav>
    <form class="form-signin" method="POST" action="loginconnect.php">
      <img src="images/logo/logo.jpeg" alt="namma angadi" class="logo">
  
  <h1 class="h3 mb-3 font-weight-normal"></h1>
  <br>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
  <div class="checkbox mb-3">
    <label >
      <input type="checkbox" value="remember-me"> Remember Password 
    </label>
  </div>
  
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <p class="mt-4 mb-3 text-muted">&copy; Namma Angadi-2020</p>
</form>
 
</body>
</html>
