<?php

    require 'tabel/function.php';
    $tabel_barang = query("SELECT * FROM tabel_checkout");

    include 'koneksi.php';

    session_start();
    $total = NULL;
    
    /* daftar transaksi nya dalam bentuk session */
    $_SESSION['cart'] = array(
        array('id_checkout','id_barang','nama_barang','harga_barang','status')
        );
        
    /* daftar harga produknya */
    $_SESSION['harga_jual'] = array(
        ); 
?>


<!DOCTYPE html>
 <head>
  <style type="text/css">
  body{background:#efefef;font-family:arial;}
  #wrapshopcart{width:70%;margin:3em auto;padding:30px;background:#fff;box-shadow:0 0 15px #ddd;}
  h1{margin:0;padding:0;font-size:2.5em;font-weight:bold;}
  p{font-size:1em;margin:0;}
  table{margin:2em 0 0 0; border:1px solid #eee;width:100%; border-collapse: separate;border-spacing:0;}
  table th{background:#fafafa; border:none; padding:20px ; font-weight:normal;text-align:left;}
  table td{background:#fff; border:none; padding:12px  20px; font-weight:normal;text-align:left; border-top:1px solid #eee;}
  table tr.total td{font-size:1.5em;}
  .btnsubmit{display:inline-block;padding:10px;border:1px solid #ddd;background:#eee;color:#000;text-decoration:none;margin:2em 0;}
  </style>
 </head>
 
 <body>
  <div id="wrapshopcart">
   <h1>Daftar Belanja Anda</h1>
   <p>Berikut adalah daftar belanjaan Anda di toko kami : </p>
   
   <table>
    <tr><th width="70%">Produk</th><th width="10%">Quantity</th><th width="20%">Jumlah</th></tr>
    
    <?php foreach($_SESSION['cart'] as $row):?>
     <?php 
      $jumlah = $_SESSION['harga_jual'][$row['id_barang']] * $row['qty_jual']; 
      $total += $jumlah;
     ?>
    
     <tr><td><?php echo $row['nama_barang'];?></td><td><?php echo $row['qty_jual'];?></td><td><?php echo $jumlah; ?></td></tr>
    <?php endforeach;?>
    
    <tr class="total"><td></td><td >Total</td><td><?php echo $total;?></td></tr>
   </table>
   
   <a href="checkout.php" class="btnsubmit">Lanjut ke Pembayaran >></a>
  </div>
  
   <a href="http://desainweb.ilmuwebsite.com/2014/08/tutorial-php-cara-membuat-form-order.html" align="center">Kembali ke tutorial "Tutorial PHP Cara Membuat Form Order Dengan Output Invoice "</a><br /><br />
 </body>
</html>
 </body>
</html>