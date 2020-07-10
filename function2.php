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

    function verifikasi($data) {
    global $conn;

    //ambil data dari tiap elemen
    $nama_barang = htmlspecialchars($data["nama_barang"]);
    $harga_barang = htmlspecialchars($data["harga_barang"]);

    //query insert data
    $query = "INSERT INTO tabel_checkout
                VALUES
                ('','','$nama_barang',$harga_barang,)
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>