<?php
// Verifying whether a cookie is set or not
if (isset($_COOKIE["username"])) {
    echo "Hi " . $_COOKIE["username"];
} else {
    echo "Welcome Guest!";
}
?>


<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Namma Angadi</title>
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

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo/logo.jpeg" width="100" height="50" class="d-inline-block align-top" alt="" loading="lazy">
                <i><sub>Namma Angadi</sub></i>
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
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    




                    <li class="nav-item">
                        <a class="nav-link" href="cart.php">Cart</a>
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
                        
                        }
                        else
                        {
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

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-3">

                <h1 class="my-4" style="font-size: larger; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;text-align: center;">
                    Categories </h1>
                <div class="list-group" style="font-family: 'Times New Roman', Times, serif;font-size: large;text-align: center;">
                    <a href="#" class="list-group-item">men's</a>
                    <a href="#" class="list-group-item">women's</a>
                    <a href="#" class="list-group-item">kid's</a>
                    <a href="#" class="list-group-item">home applainces</a>
                    <a href="#" class="list-group-item">jewellery</a>
                    <a href="#" class="list-group-item">toys</a>
                    <a href="#" class="list-group-item">electronics</a>
                    <a href="#" class="list-group-item">automation</a>
                    <a href="#" class="list-group-item">office</a>

                </div>

            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9">

                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="images/banners/1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="images/banners/2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="images/banners/3.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="images/banners/4.jpg" alt="fourth slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="images/banners/5.jpg" alt="fifth slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="images/banners/6.jpg" alt="sixth slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="images/banners/7.jpg" alt="seventh slide">
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
                <center><b><i>JUST FOR YOU</i></b></center>
                <br>
                <div class="row">

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="images/products/1.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Black Denim Shirt</a>
                                </h4>
                                <h5>rs.499</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!
                                </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="images/products/2.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Blue denim shirt</a>
                                </h4>
                                <h5>rs.599</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!
                                    Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="images/products/3.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Red hoodie</a>
                                </h4>
                                <h5>rs.599</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!
                                </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="images/products/4.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Grey sweater</a>
                                </h4>
                                <h5>rs.459</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!
                                </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="images/products/5.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Sscosmetic Makeup Combo Set</a>
                                </h4>
                                <h5>rs.2299</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!
                                    Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="images/products/6.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Womens Fashion College Bag </a>
                                </h4>
                                <h5>rs.999</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!
                                </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>

                        </div>

                    </div>
                    <div class="row">

                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#"><img class="card-img-top" src="images/products/7.jpg" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="#">Nokia Asha 311</a>
                                    </h4>
                                    <h5>rs.8499</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam
                                        aspernatur!</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#"><img class="card-img-top" src="images/products/8.jpg" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="#">Bohima Casual Sandals</a>
                                    </h4>
                                    <h5>rs.599</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam
                                        aspernatur! Lorem ipsum dolor sit amet.</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#"><img class="card-img-top" src="images/products/9.jpg" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="#">Exquisite Sterling Silver </a>
                                    </h4>
                                    <h5>rs.599</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam
                                        aspernatur!</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#"><img class="card-img-top" src="images/products/10.jpg" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="#">Magnet Bluetooth Earphones</a>
                                    </h4>
                                    <h5>rs.569</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam
                                        aspernatur!</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#"><img class="card-img-top" src="images/products/11.jpg" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="#">Mens Breathable Shoes</a>
                                    </h4>
                                    <h5>rs.1999</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam
                                        aspernatur! Lorem ipsum dolor sit amet.</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#"><img class="card-img-top" src="images/products/12.jpg" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="#">Fastrack Womens Watch</a>
                                    </h4>
                                    <h5>rs.2499</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam
                                        aspernatur!</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                </div>

                            </div>

                        </div>

                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.col-lg-9 -->

            </div>
            <!-- /.row -->

        </div>

        <!-- /.container -->
        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-3">
                    <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="images/testimonial/1.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777" />
                    <h2>Manoj V</h2>
                    <p> The products are genuine, trustworthy and had a wonderful shopping experience. Customers seemed
                        particularly pleased with the hassle-free cashback processing.</p>

                </div><!-- /.col-lg-3 -->
                <div class="col-lg-3">
                    <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="images/testimonial/2.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777" />
                    <h2>Pradeep G</h2>
                    <p>The shopping has become easier and cheaper while purchasing through Namma Angadi.</p>

                </div><!-- /.col-lg-3 -->
                <div class="col-lg-3">
                    <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="images/testimonial/3.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777" />
                    <h2>Prathibha G</h2>
                    <p> Namma Angadi is always praised for its fast and timely delivery. The staff have a warm and pleasant
                        behaviour.Namma Angadi has hazzle free returns and exchange.</p>

                </div><!-- /.col-lg-3 -->
                <div class="col-lg-3">
                    <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="images/testimonial/4.jpeg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777" />
                    <h2>Mythili H V</h2>
                    <p>The tracking facility of Namma Angadi is commendable as it is transparent and accurate.the reviews on the
                        products helps buying more comfortable.Comparative feature for Mobile has helped a lot to buy the best and
                        affordable mobile phone in my budget. </p>

                </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->

            <p class="float-right"><a href="#">Back to top</a></p>
            <!-- Footer -->
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