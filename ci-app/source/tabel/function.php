<?php

    $conn = mysqli_connect("localhost","root","","ta");

    function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

    function tambah($data) {
    global $conn;

    //ambil data dari tiap elemen
    $nama_barang = htmlspecialchars($data["nama_barang"]);
    $harga_barang = htmlspecialchars($data["harga_barang"]);
    $picture = htmlspecialchars($data["picture"]);
    
    //upload gambar
    $picture = upload();
    if (!$picture) {
        return false;
    }

    //query insert data
    $query = "INSERT INTO tabel_barang
                VALUES
                ('','','','','$nama_barang',$harga_barang,'$picture')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload(){
    $namaFile = $_FILES['picture']['name'];
    $ukuranFile = $_FILES['picture']['size'];
    $error = $_FILES['picture']['error'];
    $tmpName = $_FILES['picture']['tmp_name'];

    //cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>
                alert('pilih gambar terlebih dahulu!');
                </script>";
        return false;
    }

    //cek gambar atau bukan
    $ekstensiGambarvalid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.',$namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar,$ekstensiGambarvalid)) {
        echo "<script>
                alert('file yang anda upload bukan gambar!');
                </script>";
        return false;
    }

    //cek jika ukuran terlalu besar
    if ($ukuranFile > 1000000) {
        echo "<script>
                alert('ukuran file yang anda upload terlalu besar!');
                </script>";
        return false;
    }

    //lolos gambarn siap diupload

    //generate nama baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;


    move_uploaded_file($tmpName,'img/product/' . $namaFileBaru);
    return $namaFileBaru;
    
}

function hapus($id_barang){
    global $conn;
    mysqli_query($conn, "DELETE FROM tabel_barang WHERE id_barang = $id_barang");
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;

    //ambil data dari tiap elemen
    $id_barang = $data["id_barang"];
    $nama_barang = htmlspecialchars($data["nama_barang"]);
    $harga_barang = htmlspecialchars($data["harga_barang"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    //cek upload baru
    if ($_FILES['picture']['error'] === 4) {
        $picture = $gambarLama;
    } else {
        $picture = upload();
    }
    

    //query insert data
    $query = "UPDATE tabel_barang SET
                nama_barang = '$nama_barang', harga_barang = $harga_barang, picture = '$picture' WHERE id_barang = $id_barang
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>