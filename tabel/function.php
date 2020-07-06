<?php

    $conn = mysqli_connect("localhost","root","","ta");

    function query($query)
    {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)) 
    {
        $rows[] = $row;
    }
    return $rows;
    } 

    function tambah($data) 
    {
    global $conn;

    //ambil data dari tiap elemen
    $product = htmlspecialchars($data["product"]);
    $price = htmlspecialchars($data["price"]);
    $stock = htmlspecialchars($data["stock"]);
    
    //upload gambar
    $picture = upload();
    if (!$picture) 
    {
        return false;
    }
?>