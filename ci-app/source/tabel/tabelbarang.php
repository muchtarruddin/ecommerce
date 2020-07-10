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
            <h2>Tabel Barang</h2>
            <table border="solid" width="1000px">
                <tr bgcolor="#AEE4FF">
                    <th>id_barang</th>
                    <th>id_user</td>
                    <th>id_jenis</td>
                    <th>id_admin</td>
                    <th>nama_barang</th>
                    <th>harga_barang</th>
                </tr>
                <?php
                $query_admin=mysqli_query($koneksi,"select*from tabel_barang;");
                $j=1;
                while($c=mysqli_fetch_array($query_admin))
                {
                    ?>
                    <tr bgcolor="#E5E5E5" align="center"></tr>
                    <td><?php echo $c['id_barang'];?></td>
                    <td><?php echo $c['id_user'];?></td>
                    <td><?php echo $c['id_jenis'];?></td>
                    <td><?php echo $c['id_admin'];?></td>
                    <td><?php echo $c['nama_barang'];?></td>
                    <td><?php echo $c['harga_barang'];?></td>
                    <?php
                }
                ?>
            </table>
        </div>
    </body>
</html>