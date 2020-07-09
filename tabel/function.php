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
?>