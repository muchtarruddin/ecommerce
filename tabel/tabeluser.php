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
		<title> Tabel User </title>
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
            <h2>Tabel User</h2>
            <table border="solid" width="1000px">
                <tr bgcolor="#AEE4FF">
                    <th>id_user</th>
                    <th>nama_user</td>
                    <th>jenis_kel_user</td>
                    <th>alamat</td>
                    <th>email_user</td>
                    <th>telepon</td>
                </tr>
                <?php
                $query_admin=mysqli_query($koneksi,"select*from tabel_user;");
                $j=1;
                while($c=mysqli_fetch_array($query_admin))
                {
                    ?>
                    <tr bgcolor="#E5E5E5" align="center"></tr>
                    <td><?php echo $c['id_user'];?></td>
                    <td><?php echo $c['nama_user'];?></td>
                    <td><?php echo $c['jenis_kel_user'];?></td>
                    <td><?php echo $c['alamat'];?></td>
                    <td><?php echo $c['email_user'];?></td>
                    <td><?php echo $c['telepon'];?></td>
                    <?php
                }
                ?>
            </table>
        </div>
    </body>
</html>