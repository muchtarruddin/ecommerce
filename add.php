<?php 

    require 'tabel/function.php';

    session_start();
    if(!isset($_SESSION["login_admin"])) {
        header("location:login.php");
        exit;
    }

    if ( isset($_POST["submit"]) ) {

    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'admin.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan!');
                document.location.href = 'admin.php';
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page | LOCALNESIA</title>
    <link rel="stylesheet" href="css/styleAdmin.css">
    <link rel="stylesheet" href="css/addStyle.css">
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
                    <a href="#">Add</a>
                    <a href="admin.php">Show</a>
                </div>
            </li>
            <li><a href="transaction.php" style="color: #f5f6fa">Transaction</a></li>
            <li><a href="user.php" style="color: #f5f6fa">User</a></li>
            <li><a href="logout.php" style="color: #f5f6fa">Logout</a></li>
        </ul>
    </div>
    <!--/Header-->

    <!--tabel-->
    <div class='form-isi'>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="nama_barang">Nama</label>
            <input type="text" id="nama_barang" name="nama_barang" placeholder="Product name.." required>

            <label for="harga_barang">Price</label>
            <input type="number" id="harga_barang" name="harga_barang" placeholder="Product price.." required>

            <!-- <label for="stock">Stock</label>
            <input type="text" id="stock" name="stock" placeholder="Product stock.." required> -->

            <label for="picture">Picture</label> <br>
            <input type="file" id="picture" name="picture">
        
            <input type="submit" name="submit" value="submit" id="real-file">
        </form>
    </div>
    <!--tabel-->

</body>

</html>