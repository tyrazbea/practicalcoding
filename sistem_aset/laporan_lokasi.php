<?php 

	include('connection.php');
	session_start();

	if(!isset($_SESSION['email']))
	{
		header("Location: index.php");
	}

	if(isset($_GET["id"]))
	{
		$data1=mysqli_query($connection,"select * from butiran where lokasi='$_GET[id]'");
	}
	else
	{
		$data1=mysqli_query($connection,"select * from butiran");
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>SISTEM PENGURUSAN ASET SEKOLAH</title>
</head>
<body>

<table width="711" border="0">
	<tr>
		<td width="893"><table width="705" border="0">
			<tr>
				<td width="360" valign="top">
					<img src="img/logo.jpg" width="100" height="100" hspace="7" align="left" />
					<span class="style1">KOLEJ VOKASIONAL JASIN <br/>
					Jalan Kemendor , 77000 , Jasin <br/>Melaka<br/>
					Telefon: 06-5291010 | Faks: 06-5293130 <br/><br/></span><br/>
				</td>
				<td width="23">&nbsp;</td>
				<td width="308" valign="top"> <div align="right">
					<span class="style2">Dicetak oleh: <?php echo $_SESSION['email']; ?><br/>
					Tarikh cetak: <?php echo date("d/m/Y"); ?></span>
				</div></td>
			</tr>
			<tr><td colspan="3" valign="top"><hr/></td></tr>

			</table></td></tr>
			<tr><td><p><strong>SENARAI ASET ALIH KERAJAAN YANG MEMERLUKAN PENYELENGGARAAN</strong></p>

			<table width="800" border="1" align="center">
				<tr>
					<td colspan="7">
					<form name="Form1">
						<p>Lokasi: 
						<select name="example" size="1" onChange="go()">
							<?php 
								$data3 = mysqli_query($connection,"select * from lokasi");
								if(isset($_GET["id"]))
								{
									echo "<option>$_GET[nama]</option>";
								}
								while ($info3=mysqli_fetch_array($data3)) 
								{
									echo "<option hidden selected> -- PILIH LOKASI -- </option>";
									echo "<option value='laporan_lokasi.php?id=$info3[id]&nama=$info3[lokasi]'>$info3[lokasi]</option>";
								}
							 ?>
						</select></p>
						<script type="text/javascript">
							<!--
							function go() {
								location=document.Form1.example.options[document.Form1.example.selectedIndex].value
							}
							//-->
						</script>
					</form>
					</td>
				</tr>
				<tr>
					<td width="30"><b>Bil.</b></td>
					<td width="150"><b>Nama Aset</b></td>
					<td width="140"><b>Kod Daftar</b></td>
					<td width="70"><b>Jenis</b></td>
					<td width="100"><b>Lokasi</b></td>
					<td width="100"><b>Catatan</b></td>
				</tr>
				<?php 

				$no=1;
				while ($info1=mysqli_fetch_array($data1)) 
				{
					$dataJenis=mysqli_query($connection,"select * from jenis where id='$info1[jenis]'");
					$infoJenis=mysqli_fetch_array($dataJenis);

					$dataLokasi=mysqli_query($connection,"select * from lokasi where id='$info1[lokasi]'");
					$infoLokasi=mysqli_fetch_array($dataLokasi);

				?>
				<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $info1['nama_aset']; ?></td>
				<td><?php echo $info1['kod_daftar']; ?></td>
				<td><?php echo $infoJenis['jenis']; ?></td>
				<td><?php echo $info1['lokasi']; ?></td>
				<td><?php echo $info1['catatan']; ?></td>
				</tr>
				<?php 
				$no++;
				}

				?>
				
		</table>
		<hr/><div align="center" class="style15">*Laporan Tamat*<br>Jumlah Rekod:
			<?php echo $no-1; ?></div>
			<center><br><br>
			<a href="page_pengguna.php">Ke Menu Utama</a>
			<a href="logout.php">Log Keluar</a>
			<a HREF="javascript:window.print()">Cetak Laporan</a>
			</center>
			<?php ?>


</body>
</html>