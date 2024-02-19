<?php 

include('connection.php');
session_start();
if(!$_SESSION['email'])
{
	header("Location:index.php");
}
if(isset($_POST["a1"]))
{
	$a1 = $_POST["a1"];
	$a2 = $_POST["a2"];
	$a3 = $_POST["a3"];
	$a4 = $_POST["a4"];
	$a5 = $_POST["a5"];


$data = mysqli_query($connection,"INSERT into butiran (kod_daftar,nama_aset,jenis,lokasi,catatan) values ('$a1','$a2','$a3','$a4','$a5')") or die(mysqli_error());
echo $data;

echo "<script>alert('Rekod telah disimpan'); window.location='page_admin.php'</script>";
}
else
{
?>

<!DOCTYPE html>
<html>
<head>
	<title>DASHBOARD PENTADBIR ASET</title>
</head>
<body>
<center> <h3>DAFTAR ASET BARU</h3>
<form action="daftar_asetbaru.php" name="form1" method="POST">
	<fieldset>
		<table width="600" border="0" align="center">
			<thead>
				<tr><th>
					
				</th></tr>
			</thead>
			<tbody>
				<tr>
					<td><label>Kod Daftar :</label>
						<input type="text" name="a1" placeholder="xxxx/xxx/xx/xx" required />
					</td>
				</tr>

				<tr>
					<td><label>Nama Barangan :</label>
						<input type="text" name="a2" placeholder="NAMA ASET" required />
					</td>
				</tr>
				
				<tr>
					<td><label>Jenis Aset :</label>
						<select name="a3" required>
							<?php
								$data1 = mysqli_query($connection,"SELECT * from jenis");
								while ($info1 = mysqli_fetch_array($data1)) 
								{
									echo "<option hidden selected> -- PILIH JENIS --</option>";
									echo "<option value = '$info1[id]'>$info1[jenis]</option>";
								}
							 ?>
						</select><!-- daftar jenis baru -->
						<a href="#" onClick="window.open ('update_jenis.php','jenis','resizable','height = 450','width = 450'); return false;">Daftar Jenis Baru</a>
					</td>
				</tr>
				
				<tr>
					<td><label>Lokasi Aset :</label>
						<select name="a4" required>
							<?php
								$data2 = mysqli_query($connection,"SELECT * from lokasi");
								while ($info2 = mysqli_fetch_array($data2)) 
								{
									echo "<option hidden selected> -- PILIH LOKASI --</option>";
									echo "<option value = '$info2[id]'>$info2[lokasi]</option>";
								}
							 ?>
						</select><!-- daftar lokasi baru -->
						<a href="#" onClick="window.open ('update_lokasi.php','lokasi','resizable','height = 450','width = 450'); return false;">Daftar Jenis Baru</a>
					</td>
				</tr>
				
				<tr>
					<td><label>Catatan :</label>
						<input type="text" name="a5" placeholder="CATATAN ASET" required />
					</td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Daftar" /></td>
				</tr>
			</tbody>
		</table>
	</fieldset>
</form><br>
<a href="page_admin.php">Ke Menu Utama</a>
<a href="logout.php">Log Keluar</a>


</center>

<?php } ?>

</body>
</html>
