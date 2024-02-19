<?php 

include('connection.php');

session_start();
if(!$_SESSION['email'])
{
	header("Location: index.php");
}

if(isset($_POST["jenis"]))
{
	$jenis = $_POST["jenis"];
	$data = mysqli_query($connection,"INSERT into jenis (jenis) values ('$jenis')") or die(mysqli_error());

	echo "<script>alert('Jenis baru bagi aset telah direkodkan');
	window.location='page_admin.php'</script>";
}

else{
?>

<!DOCTYPE html>
<html>
<head>
	<title>DASHBOARD PENTADBIR ASET</title>
</head>
<body>
<center><h3>DAFTAR JENIS BARU ASET</h3>
<form name="form1" action="update_jenis.php" method="POST">
	<fieldset>
		<label>Jenis : </label>
		<input type="text" name="jenis" value="" />
		<input type="submit" name="Tambah" value="Tambah">
	</fieldset>
</form>

<h3>SENARAI JENIS ASET BERDAFTAR</h3>
<table width="400" border="1" align="center">
	
<tr>
	<td width="40"><b>Bil.</b></td>
	<td width="120"><b>Jenis</b></td>
	<td width="100"><b>Kemaskini</b></td>
	<td width="100"><b>Hapus</b></td>
</tr>

<?php 
	$data1 = mysqli_query($connection,"select * from jenis");
	$no=1;
	while ($info1 = mysqli_fetch_array($data1)) {
 ?>

 <tr>
 	<td><?php echo $no; ?></td>
 	<td><?php echo $info1['jenis']; ?></td>
 	<td><a href="kemaskini_jenis.php?id=<?php echo $info1['id']; ?>">Kemaskini</a></td>
 	<td><a href="hapus_jenis.php?id=<?php echo $info1['id']; ?>">Hapus</a></td>
 </tr>
 <?php 

 	$no++;
 }

  ?>
</table>

	<a href="page_admin.php">Ke Menu Utama</a>
	<a href="logout.php">Log Keluar</a>

</center>
<?php } ?>
</body>
</html>