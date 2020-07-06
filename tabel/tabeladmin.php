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
		<title> Tabel Admin </title>
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
            <h2>Tabel Admin</h2>
            <table border="solid" width="1000px">
                <tr bgcolor="#AEE4FF">
                    <th>id_admin</th>
                    <th>nama_admin</th>
                    <th>jenis_kelamin</th>
                    <th>alamat</th>
                    <th>telepon</th>
                </tr>
                <?php
                $query_admin=mysqli_query($koneksi,"select*from tabel_admin;");
                $j=1;
                while($c=mysqli_fetch_array($query_admin))
                {
                    ?>
                    <tr bgcolor="#E5E5E5" align="center"></tr>
                    <td><?php echo $c['id_admin'];?></td>
                    <td><?php echo $c['nama_admin'];?></td>
                    <td><?php echo $c['jenis_kelamin'];?></td>
                    <td><?php echo $c['alamat'];?></td>
                    <td><?php echo $c['telepon'];?></td>
                    <?php
                }
                ?>
            </table>
        </div>
    </body>
</html>