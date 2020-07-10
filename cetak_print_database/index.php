<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT DATA DARI DATABASE DENGAN PHP</title>
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

	<center>

		<h2>CETAK PRINT DATA DARI DATABASE DENGAN PHP</a></h2>


		<?php 
		include 'koneksi.php';
		?>

		<table border="1">
			<tr>
				<th>No</th>
                <th>Id Chekout</th>
                <th>Id Barang</th>
                <th>Nama Barang</th>
                <th>Harga Barang</th>
                <th>Status</th>
			</tr>
			<?php 
			$no = 1;
			$sql = mysqli_query($koneksi,"select * from tabel_checkout");
			while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
                <td><?php echo $data['id_checkout']; ?></td>
                <td><?php echo $data['id_barang']; ?></td>
                <td><?php echo $data['nama_barang']; ?></td>
                <td><?php echo $data['harga_barang']; ?></td>
                <td><?php echo $data['status']; ?></td>
			</tr>
			<?php 
			}
			?>
		</table>

		<br/>

		<a href="cetak.php" target="_blank">CETAK</a>


	</center>
</body>
</html>