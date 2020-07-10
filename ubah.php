<?php
    require 'tabel/function.php';

    //ambil data di url
    $id_barang = $_GET["id_barang"];

    //query data berdasar id
    $barang = query("SELECT * FROM tabel_barang WHERE id_barang = $id_barang")[0];

    //cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"]) ) {

    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'admin.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah!');
                document.location.href = 'ubah.php';
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
    <title>Ubah Produk</title>
    <link rel="stylesheet" href="css/styleAdmin.css">
    <link rel="stylesheet" href="css/addStyle.css">
</head>
<body>
    <!--Header-->
    <div class="header">
        <p>LOCALNESIA</p>
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
            <li><a href="checkoutAdmin.php" style="color: #f5f6fa">Transaction</a></li>
            <li><a href="logout.php" style="color: #f5f6fa">Logout</a></li>
        </ul>
    </div>
    <!--/Header-->
        <div class='form-isi'>
            <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_barang" id="id_barang" value="<?= $barang["id_barang"]; ?>">
            <input type="hidden" name="gambarLama" value="<?= $barang["picture"]; ?>">

            <label for="nama_barang">Nama</label>
            <input type="text" id="nama_barang" name="nama_barang" placeholder="Nama Barang.." required value="<?= $barang["nama_barang"]; ?>">

            <label for="harga_barang">Harga</label>
            <input type="number" id="harga_barang" name="harga_barang" placeholder="Harga Barang.." required value="<?= $barang["harga_barang"]; ?>">
            
            <label for="picture">Picture</label> <br>
            <img src="img/product/<?= $barang['picture']; ?>" alt="" style="width:10%">
            <input type="file" id="picture" name="picture">
        
            <input type="submit" name="submit" value="submit" id="real-file">
            </form>
    </div>
</body>
</html>