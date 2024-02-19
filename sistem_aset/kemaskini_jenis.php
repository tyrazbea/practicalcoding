<?php

include('connection.php');

session_start();
$id = $_GET['id'];

if(!$_SESSION['email'])
{
	header("Location: index.php");
}

if(isset($_POST["a1"]))
{
	$a1 = $_POST["a1"];

	$data = mysqli_query($connection,"UPDATE jenis set jenis='$a1' where id='$id'") or die(mysqli_error());
	echo "<script>alert('Kemaskini maklumat yang telah direkodkan');
	window.location = 'update_jenis.php'</script>";
}else
{
	$query = mysqli_query($connection,"SELECT * from jenis where id = '$id'");

	while ($result = mysqli_fetch_array($query)) 
	{
		$idJenis = $result['id'];
		$dataJenis = $result['jenis'];
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>DASHBOARD PENTADBIR ASET</title>
</head>
<body>
<center>
	<h3>KEMASKINI MAKLUMAT ASET</h3>
	<form name="form1" action="kemaskini_jenis.php?id=<?php echo $id; ?>" method="POST">
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
						<input type="text" name="a1" id="a1" value="<?php echo $dataJenis; ?>"/>
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
	</form><

	<a href="senarai_aset.php">Senarai Aset</a>
	<a href="logout.php">Log Keluar</a>

</center>
<?php } ?>
</body>
</html>