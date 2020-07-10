<?php 

    require 'tabel/function.php';
    $tabel_checkout = query("SELECT * FROM tabel_checkout");

    session_start();
    if(!isset($_SESSION["login_admin"])) {
        header("location:login.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page | LOCALNESIA</title>
    <link rel="stylesheet" href="css/styleAdmin.css">
</head>

<body>

    <!--Header-->
    <div class="header">
        <H1 style="color:white">ADMIN | LOCALNESIA</H1>
    </div>
    <div class="menu">
        <ul>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn" style="color: #f5f6fa">Product</a>
                <div class="dropdown-content">
                    <a href="add.php">Add</a>
                    <a href="#">Show</a>
                </div>
            </li>
            <li><a href="#" style="color: #f5f6fa">Transaction</a></li>
            <li><a href="logout.php" style="color: #f5f6fa">Logout</a></li>
        </ul>
    </div>
    <!--/Header-->

    <!--tabel-->
    <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">No</th>
                <th scope="col">Barang</th>
                <th scope="col">Harga</th>
                <th scope="col">VERIFY</th>
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
                            <a class="btn btn-primary" href="#" role="button"><?= $row["status"]; ?></a>
                        </td>
                        <td><a class="btn btn-primary" href="cetak_print_database/cetak.php" role="button">CETAK</a></td>
                    </tr>
                <<?php $i++; ?> <?php endforeach; ?>
            </tbody>
        </table>
    <!--tabel-->

</body>

</html>