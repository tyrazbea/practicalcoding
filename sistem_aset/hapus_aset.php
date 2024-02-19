<?php 

include('connection.php');

session_start();
if(!$_SESSION['email'])
{
	header("Location: index.php");
}

if(isset($_GET["id"]))
{

	mysqli_query($connection,"DELETE from butiran where id='$_GET[id]'") or die(mysqli_error());

	echo "<script>alert('Rekod telah dihapuskan');
	window.location = 'page_admin.php'</script>";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>DASHBOARD PENTADBIR ASET</title>
</head>
<body>
<center><h3>HAPUS MAKLUMAT ASET</h3>
<fieldset>
	<table width="800" border="1" align="center">
		<tr>
			<td width="40"><b>Bil.</b></td>
			<td width="240"><b>Nama Aset</b></td>
			<td width="180"><b>Kod Berdaftar</b></td>
			<td width="100"><b>Jenis</b></td>
			<td width="150"><b>Lokasi</b></td>
			<td width="100"><b>Catatan</b></td>
			<td width="80"><b>Tindakan</b></td>
		</tr>
		<?php 
			$data1 = mysqli_query($connection,"select * from butiran");
			$no=1;
			while ($info1 = mysqli_fetch_array($data1)) {
		 		$data2 = mysqli_query($connection,"select * from jenis where id='$info1[jenis]'");
				$info2 = mysqli_fetch_array($data2);

				$data3 = mysqli_query($connection,"select * from lokasi where id='$info1[lokasi]'");
				$info3 = mysqli_fetch_array($data3);
			
		 ?>
		 <tr>
		 	<td><?php echo $no; ?></td>
		 	<td><?php echo $info1['nama_aset']; ?></td>
		 	<td><?php echo $info1['kod_daftar']; ?></td>
		 	<td><?php echo $info2['jenis']; ?></td>
		 	<td><?php echo $info3['lokasi']; ?></td>
		 	<td><?php echo $info1['catatan']; ?></td>
		 	<td><a href="hapus_aset.php?id=<?php echo $info1['id']; ?>">Hapus</a></td>
		 </tr>
		 <?php 
		 	$no++;
		 }
		 ?>
	</table>
</fieldset>
	<a href="page_admin.php">Ke Menu Utama</a>
	<a href="logout.php">Log Keluar</a>
</center>
<?php ?>
</body>
</html>