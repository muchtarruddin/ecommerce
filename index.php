<?php 

    require 'tabel/function.php';
    $tabel_barang = query("SELECT * FROM tabel_barang")

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOCALNESIA</title>

    <!--Bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/23412c6a8d.js"></script>

    <!--Slick Slider-->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <!--Custom CSS-->
    <link rel="stylesheet" href="css/style.css">

    <!--Owl Carousell-->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <script src="js/owl.carousel.js"></script>

    <!--BaguetteBox-->
    <link rel="stylesheet" href="css/baguetteBox.min.css">

    <!--cards gallery-->
    <link rel="stylesheet" href="css/cards-gallery.css">

</head>

<body>

    <!--Header-->
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-12">
                    <div class="btn-group">
                        <button class="btn border dropdown-toggle my-md-4 my-2 text-white" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">USD
                        </button>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">ERU - Euro</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12 text-center">
                    <h2 class="my-md-3 site-title text-white">LOCALNESIA</h2>
                </div>
                <div class="col-md-4 col-12 text-right">
                    <p class="my-md-4 header-links">
                        <a href="#" class="px-2">Sign In</a>
                        <a href="#" class="px-1">Create an Account</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">FEATURES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">COLLECTION</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">SHOP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ABOUT US</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar-nav">
                    <li class="nav-item border rounded-circle mx-2 search-icon">
                        <i class="fas fa-search p-2"></i>
                    </li>
                    <li class="nav-item border rounded-circle mx-2 basket-icon">
                        <i class="fas fa-shopping-basket p-2"></i>
                    </li>
                </div>
            </nav>
        </div>
    </header>

    <!--Main Section-->
    <main>

        <!--First Slider-->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/assets/item-1.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/assets/item-2.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/assets/item-3.png" alt="Third slide">
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
        <!--/First Slider-->

        <!--Second Slider-->

        <!-- <div class="container-fluid">
            <div class="site-slider-two px-md-4">
                <div class="row slider-two text-center">
                    <div class="col-md-2 pt-md-5 pt-4">
                        <img src="img/product/jacket.jpg" alt="Product 1">
                        <span class="border site-btn btn-span">JACKET</span>
                    </div>
                    <div class="col-md-2 pt-md-5 pt-4">
                        <img src="img/product/jacket.jpg" alt="Product 1">
                        <span class="border site-btn btn-span">JACKET</span>
                    </div>
                    <div class="col-md-2 pt-md-5 pt-4">
                        <img src="img/product/jacket.jpg" alt="Product 1">
                        <span class="border site-btn btn-span">JACKET</span>
                    </div>
                </div>
                <div class="slider-btn">
                    <span class="prev position-top">
                        <i class="fas fa-chevron-left fa-2x text-secondary"></i>
                    </span>
                    <span class="next position-top right-0">
                        <i class="fas fa-chevron-right fa-2x text-secondary">
                        </i>
                    </span>
                </div>
            </div>
        </div> -->

        <!--/Second Slider-->

        <!--Product-->
        <section class="gallery-block cards-gallery">
            <div class="container">
                <br><br>
                <div class="heading">
                    <h2 style="color:#6BAEE0">PRODUCT</h2>
                </div>
                <br>
                <div class="row" style="font-family:Open Sans">
                <?php foreach( $tabel_barang as $row ) : ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 transform-on-hover">
                            <a class="lightbox" href="#">
                                <img src="img/product/<?= $row["picture"]; ?>" alt="Card Image" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <h6><a href="#"><?= $row["nama_barang"]; ?></a></h6>
                                <p class="text-muted card-text">Rp <?= $row["harga_barang"]; ?></p>
                                <a href="" type="button" class="btn btn-primary"
                                    style="color: #FFFFFF; font-family:Open Sans">BUY</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!--/Product-->

    </main>

    <!--Footer Section-->
    <footer>


    </footer>

    <!--Javascript-->
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.cards-gallery', {
            animation: 'slideIn'
        });
    </script>
</body>
</html>