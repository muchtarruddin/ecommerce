<?php 

    require 'function2.php';
    $tabel_checkout = query("SELECT * FROM tabel_checkout");

    session_start();
    if(!isset($_SESSION["login_user"])) {
        header("location:login.php");
        exit;
    }

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
                            aria-haspopup="true" aria-expanded="false">IDR
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
                        <a href="logout.php" class="px-2">Logout</a>
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
                            <a class="nav-link" href="indexLogin.php">HOME <span class="sr-only">(current)</span></a>
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
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">No</th>
                <th scope="col">Barang</th>
                <th scope="col">Harga</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach( $tabel_checkout as $row ) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $row["nama_barang"]; ?></td>
                        <td>Rp<?= $row["harga_barang"]; ?></td>
                        <td style="color:red">
                            <p><?= $row["status"]; ?></p>
                        </td>
                        <td><a class="btn btn-primary" href="cetak_print_database/cetak.php" role="button">CETAK</a></td>
                    </tr>
                <?php $i++; ?> <?php endforeach; ?>
            </tbody>
        </table>
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