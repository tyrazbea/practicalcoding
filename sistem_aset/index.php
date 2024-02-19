<?php 
	
	session_start();
	if($_SESSION)
	{
		if($_SESSION['level']=="Admin")
		{
			header("Location : page_admin.php");
		}
		if($_SESSION['level']=="Pengguna")
		{
			header("Location : page_pengguna.php");
		}
	}
	include('login.php');


?>

<!DOCTYPE html>
<html>
<head>
	<title>SISTEM PENGURUSAN ASET</title>
</head>
<body>
	<center>
		<h3>LOG MASUK SISTEM PENGURUSAN ASET</h3>
		<p>Sila masukkan Email dan Katalaluan</p>

		<form action="" method="post">
			
		<label>Email</label> <input type="email" name="email" required/><br>
		<label>Katalaluan</label> <input type="password" name="password" required/><br>
		<label>Pengguna:</label>
			<select name="level">
				<option value="">Pilih Pengguna</option>
				<option value="1">Admin</option>
				<option value="2">Pengguna</option>
			</select><br>
		<button type="submit" name="submit">Log Masuk</button>
		<?php echo $error; ?>

		</form>
		<b>Belum Berdaftar?</b><br><a href="daftar.php">Klik disini untuk mendaftar</a>
	</center>
</body>
</html>