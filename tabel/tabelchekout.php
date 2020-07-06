<!DOCTYPE html>
<html>
<head>
    <!DOCTYPE html>
<html>
	<head>
		<script>
			function welcome(){
				alert ("Hai, selamat datang...!!! \nAdmin");
			}
		</script>
		<title> Tabel Barang </title>
		<link rel="icon" type="" href="">
		<style>
            <?php
            include("koneksi.php")
            ?>
            body{
                background-color: #6A9CFD
            }
        </style>
    </head>
    <body>
        <?php 
        include("koneksi.php")
        ?>
        <div align="center">
            <h2>Tabel Checkout</h2>
            <table border="solid" width="1000px">
                <tr bgcolor="#AEE4FF">
                    <th>id_chekout</th>
                    <th>id_admin</td>
                    <th>id_user</td>
                    <th>id_barang</td>
                    <th>tgl_penjualan</th>
                    <th>harga_jual</th>
                    <th>qty_jual</th>
                    <th>total_penjualan</th>
                </tr>
                <?php
                $query_admin=mysqli_query($koneksi,"select*from tabel_chekout;");
                $j=1;
                while($c=mysqli_fetch_array($query_admin))
                {
                    ?>
                    <tr bgcolor="#E5E5E5" align="center"></tr>
                    <td><?php echo $c['id_chekout'];?></td>
                    <td><?php echo $c['id_admin'];?></td>
                    <td><?php echo $c['id_user'];?></td>
                    <td><?php echo $c['id_barang'];?></td>
                    <td><?php echo $c['tgl_penjualan'];?></td>
                    <td><?php echo $c['harga_jual'];?></td>
                    <td><?php echo $c['qty_jual'];?></td>
                    <td><?php echo $c['total_penjualan'];?></td>
                    <?php
                }
                ?>
            </table>
        </div>
    </body>
</html>