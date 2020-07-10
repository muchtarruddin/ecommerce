<?php 

    require 'tabel/function.php';
    $tabel_barang = query("SELECT * FROM tabel_barang");

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
            <li><a href="transaction.php" style="color: #f5f6fa">Transaction</a></li>
            <li><a href="user.php" style="color: #f5f6fa">User</a></li>
            <li><a href="logout.php" style="color: #f5f6fa">Logout</a></li>
        </ul>
    </div>
    <!--/Header-->

    <!--tabel-->
    <table>
        <tr>
            <th>No</th>
            <th>Barang</th>
            <th>Nama Barang</th>
            <th>Harga Barang</th>
            <th>Opsi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach( $tabel_barang as $row ) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><img style="width:150px; height:150px" src="img/product/<?= $row["picture"]; ?>" alt=""></td>
            <td><?= $row["nama_barang"]; ?></td>
            <td>Rp<?= $row["harga_barang"]; ?></td>
            <td>
                <a href="ubah.php?id_barang=<?= $row["id_barang"]; ?>" style="color: #2ecc71">Edit</a>
                <a href="delete.php?id_barang=<?= $row["id_barang"]; ?>" style="color: #e74c3c"
                    onclick="return confirm('yakin?')">Delete</a>
                <a href="download.php?filename=<?= $row['picture']; ?>">Download</a>
            </td>
        </tr>
        <<?php $i++; ?> <?php endforeach; ?>
        </table> <!--tabel-->

</body>

</html>