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
		<title> Tabel Jenis Barang </title>
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
            <h2>Tabel Jenis Barang</h2>
            <table border="solid" width="1000px">
                <tr bgcolor="#AEE4FF">
                    <th>id_jenis</th>
                    <th>nama_jenis_barang</td>
                </tr>
                <?php
                $query_admin=mysqli_query($koneksi,"select*from tabel_jenis_barang;");
                $j=1;
                while($c=mysqli_fetch_array($query_admin))
                {
                    ?>
                    <tr bgcolor="#E5E5E5" align="center"></tr>
                    <td><?php echo $c['id_jenis'];?></td>
                    <td><?php echo $c['nama_jenis_barang'];?></td>
                    <?php
                }
                ?>
            </table>
        </div>
    </body>
</html>