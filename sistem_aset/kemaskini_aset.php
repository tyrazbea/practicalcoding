<?php

include('connection.php');

session_start();
if(!$_SESSION['email'])
{
	header("Location: index.php");
}

if(isset($_POST["a1"]))
{
	$a1 = $_POST["a1"];
	$a2 = $_POST["a2"];
	$a3 = $_POST["a3"];
	$a4 = $_POST["a4"];
	$a5 = $_POST["a5"];
	$a6 = $_POST["a6"];

	$data = mysqli_query($connection,"UPDATE butiran set nama_aset='$a1',kod_daftar='$a2',jenis='$a3',lokasi='$a4',catatan='$a5'where id='$a6'") or die(mysqli_error());
	echo "<script>alert('Kemaskini maklumat yang telah direkodkan');
	window.location = 'page_admin.php'</script>";
}
else
{
	$dataAset = mysqli_query($connection,"select * from butiran where id='$_GET[id]'");
	$infoAset = mysqli_fetch_array($dataAset);

	$dataJenis = mysqli_query($connection,"select * from jenis where id='$infoAset[jenis]'");
	$infoJenis = mysqli_fetch_array($dataJenis);

	$dataLokasi = mysqli_query($connection,"select * from lokasi where id='$infoAset[lokasi]'");
	$infoLokasi = mysqli_fetch_array($dataLokasi);

?>

<!DOCTYPE html>
<html>
<head>
	<title>DASHBOARD PENTADBIR ASET</title>
</head>
<body>
<center>
	<h3>KEMASKINI MAKLUMAT ASET</h3>
	<form name="form1" action="kemaskini_aset.php" method="POST">
		<fieldset>
			<table width="400" border="0" align="center">
				<thead>
					<tr>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><label>Nama Aset :</label>
						<input type="text" name="a1" id="a1" value="<?php echo $infoAset['nama_aset']; ?>"/>
						<input type="hidden" name="a6" id="a6" value="<?php echo $infoAset['id']; ?>"/>
						</td>
					</tr>

					<tr>
						<td><label>Kod Daftar :</label>
						<input type="text" name="a2" id="a2" value="<?php echo $infoAset['kod_daftar']; ?>"/>
						</td>
					</tr>

					<tr>
						<td><label>Jenis :</label>
						<select name="a3">
						<option selected value="<?php echo $infoJenis['id']; ?>"> <?php echo $infoJenis['jenis']; ?></option>
						<?php
							$data1 = mysqli_query($connection,"select * from jenis where id <> '$infoAset[jenis]'");
							while ($info1 = mysqli_fetch_array($data1)) {
								echo "<option value = '$info1[id]'>$info1[jenis]</option>";
							}
						 ?>
						</td>
					</tr>

					<tr>
						<td><label>Lokasi :</label>
						<select name="a4">
						<option selected value="<?php echo $infoLokasi['id']; ?>"> <?php echo $infoLokasi['lokasi']; ?></option>
						<?php
							$data2 = mysqli_query($connection,"select * from lokasi");
							while ($info2 = mysqli_fetch_array($data2)) {
								echo "<option value = '$info2[id]'>$info2[lokasi]</option>";
							}
						 ?></select>&nbsp;
						</td>
					</tr>

					<tr>
						<td><label>Catatan :</label>
						<input type="text" name="a5" id="a5" value="<?php echo $infoAset['catatan']; ?>"/> 
						</td>
					</tr>

					<tr>
						<td>
						<input type="submit" name="button" id="button" value="Kemaskini"/> 
						</td>
					</tr>
				</tbody>
			</table>
		</fieldset>
	</form>

	<a href="senarai_aset.php">Senarai Aset</a>
	<a href="logout.php">Log Keluar</a>

</center>
<?php } ?>
</body>
</html>