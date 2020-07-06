<?php 

    $conn = mysqli_connect("localhost","root","","");

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ( $row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data){
        global $conn;

        //ambil data dr tiap elemen

        //upload gambar

        //query insert data
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

    function hapus(){

}



?>