<?php
 session_start();
 
 $total = NULL;
 
 /* daftar transaksi nya dalam bentuk session */
 $_SESSION['cart'] = array(
       array('productid' => 'MP01', 'product' => 'Madu Pramuka (2 liter)' , 'qty' => 10),
       array('productid' => 'HKP01', 'product' => 'Herbal Kunir Putih (1 kardus isi 20 box)' , 'qty' => 1),
       array('productid' => 'HH01', 'product' => 'Herbal Habbatussauda (1 kardus isi 50 botol)' , 'qty' => 1)
      );
       
 /* daftar harga produknya */
 $_SESSION['price'] = array(
       'MP01' => 500000,
       'HKP01' => 200000,
       'HH01' => 1500000
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
      $jumlah = $_SESSION['price'][$row['productid']] * $row['qty']; 
      $total += $jumlah;
     ?>
    
     <tr><td><?php echo $row['product'];?></td><td><?php echo $row['qty'];?></td><td><?php echo $jumlah; ?></td></tr>
    <?php endforeach;?>
    
    <tr class="total"><td></td><td >Total</td><td><?php echo $total;?></td></tr>
   </table>
   
   <a href="checkout.php" class="btnsubmit">Lanjut ke Pembayaran >></a>
  </div>
  
   <a href="http://desainweb.ilmuwebsite.com/2014/08/tutorial-php-cara-membuat-form-order.html" align="center">Kembali ke tutorial "Tutorial PHP Cara Membuat Form Order Dengan Output Invoice "</a><br /><br />
 </body>
</html>


Setelah itu kita buat formnya registrasi untuk pembayarannya terlebih dahulu. Kita namakan dengan file checkout.php


<?php
 session_start();
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
  form{margin:2em 0 0 0;}
  label{display:inline-block;width:12em;}
  input[type=text]{border:1px solid #bbb;padding:10px;width:30em;}
  textarea{border:1px solid #bbb;padding:10px;width:30em;height:5em;vertical-align:text-top;margin:0.3em 0 0 0;}
  .submitbtn{font-size:1.5em;display:inline-block;padding:10px;border:1px solid #ddd;background:#eee;color:#000;text-decoration:none;margin:0.5em 0 0 8em;};
  
  </style>
 </head>
 
 <body>
  <div id="wrapshopcart">
   <h1>Form Registrasi</h1>
   <p>Silakan lengkapi form di bawah ini untuk melanjutkan ke tahap pembayaran : </p>
   
   <form action="invoice.php" method="POST">
   <label>Nama Depan : </label><input type="text" name="nama_depan" class="inputan" /><br />
   <label>Nama Belakang : </label><input type="text" name="nama_belakang" class="inputan" /><br />
   <label>Email : </label><input type="text" name="email" class="inputan" /><br />
   <label>No HP : </label><input type="text" name="no_hp" class="inputan" /><br />
   <label>No Telp : </label><input type="text" name="no_telp" class="inputan" /><br />
   <label>Alamat :</label><textarea name="alamat" class="textan"></textarea><br />
   <input type="submit" name="kirim" value="Kirim Isi Formulir!" class="submitbtn" />
   </form>
   
   
  </div>
  
   <a href="http://desainweb.ilmuwebsite.com/2014/08/tutorial-php-cara-membuat-form-order.html" align="center">Kembali ke tutorial "Tutorial PHP Cara Membuat Form Order Dengan Output Invoice "</a><br /><br />
   
 </body>
</html>


Dan yang terakhir buat file berisi informasi mengenai invoicenya. Kita namakan filenya dengan invoice.php


<?php
 session_start();
 $total = NULL;
 $post = $_POST;
 
 /* untuk invoice bisa di ambil dari database, karena pada dasarnya invoice tidak akan pernah recordnya itu di delete  */ 
 /* berapa jumlah invoice kemudian di tambahkan 1 */
 $numrows_invoice_db = 313;
 $invoice = $numrows_invoice_db + 1;
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
  form{margin:2em 0 0 0;}
  label{display:inline-block;width:auto;}
  input[type=text]{border:1px solid #bbb;padding:10px;width:30em;}
  textarea{border:1px solid #bbb;padding:10px;width:30em;height:5em;vertical-align:text-top;margin:0.3em 0 0 0;}
  .submitbtn{font-size:1.5em;display:inline-block;padding:10px;border:1px solid #ddd;background:#eee;color:#000;text-decoration:none;margin:0.5em 0 0 8em;};
  
  </style>
 </head>
 
 <body>
  <div id="wrapshopcart">
   <h1>Invoice <?php echo $invoice;?></h1>
   <p>Silahkan save halaman ini ... </p>
   
   <h3>Berikut adalah data lengkap Anda : </h3>
   <label>Nama Lengkap : <?php echo $post['nama_depan'] . ' ' . $post['nama_belakang'] ;?> </label><br />
   <label>Email : <?php echo $post['email'] ;?> </label><br />
   <label>No HP : <?php echo $post['no_hp'] ;?></label><br />
   <label>No Telp : <?php echo $post['no_telp'] ;?></label><br />
   <label>Alamat : <?php echo $post['alamat'] ;?></label><br />
   
   <h3>Produk Yang Anda Beli : </h3>
   <table>
    <tr><th width="70%">Produk</th><th width="10%">Quantity</th><th width="20%">Jumlah</th></tr>
    
    <?php foreach($_SESSION['cart'] as $row):?>
     <?php 
      $jumlah = $_SESSION['price'][$row['productid']] * $row['qty']; 
      $total += $jumlah;
     ?>
    
     <tr><td><?php echo $row['product'];?></td><td><?php echo $row['qty'];?></td><td><?php echo $jumlah; ?></td></tr>
    <?php endforeach;?>
    
    <tr class="total"><td></td><td >Total</td><td><?php echo $total;?></td></tr>
   </table>   
   
   <h3>Silahkan Lakukan Pembayaran Ke sini ...</h3>
   <p>Sebutkan nama bank Anda .. </p>
   
   
  </div>
  
  <a href="http://desainweb.ilmuwebsite.com/2014/08/tutorial-php-cara-membuat-form-order.html" align="center">Kembali ke tutorial "Tutorial PHP Cara Membuat Form Order Dengan Output Invoice "</a><br /><br />
 </body>
</html>