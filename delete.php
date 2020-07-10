<?php

require 'tabel/function.php';

session_start();
    if(!isset($_SESSION["login_admin"])) {
        header("location:login.php");
        exit;
    }

$idpro = $_GET["id_barang"];

if ( hapus($idpro) > 0) {
    echo "
            <script>
            alert('Data berhasil dihapus!');
            document.location.href = 'admin.php';
            </script>
        ";
} else {
    echo "
            <script>
            alert('Data gagal dihapus!');
            document.location.href = 'admin.php';
            </script>
        ";
}

?>