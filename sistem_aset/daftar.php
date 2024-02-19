<?php 

	include('connection.php');
	if(isset($_POST["submit"]))
	{
		$name = $_POST["name"];
		$email = $_POST["email"];
		$password = $_POST["password"];

		$name = mysqli_real_escape_string($connection,$name);
		$email = mysqli_real_escape_string($connection,$email);
		$password = mysqli_real_escape_string($connection,$password);
		$password = $password;

		$sql="SELECT email FROM users WHERE email='$email'";
		$result=mysqli_query($connection,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			if(mysqli_num_rows($result) == 1)
			{
				echo "<script>alert('Maaf..alamat email ini sudah wujud dalam sistem');
				window.location='index.php'</script>";
			}
			else
			{
				$query = mysqli_query($connection,"INSERT into users (name,email,password,level) values ('$name','$email','$password','Pengguna')");
				if($query)
				{
					echo "<script>alert('Terima Kasih kerana mendaftar');
					window.location='index.php'</script>";
				}
			}
	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>SISTEM PENGURUSAN ASET SEKOLAH</title>
 </head>
 <body>
 	<center><h3>Daftar Pengguna Baru</h3>
 	<p>Masukkan nama,email dan katalaluan untuk direkodkan</p>

 	<form name="daftar_baru" method="POST">
 		
 	<label>Email :</label>
 	<input type="email" name="email" placeholder="example@gmail.com" required /><br>

 	<label>Nama :</label>
 	<input type="text" name="name" placeholder="HURUF BESAR" required /><br>

 	<label>Katalaluan :</label>
 	<input type="password" name="password" placeholder="MINIMA 5 ANGKA" required /><br>

 	<input type="submit" value="Daftar" name="submit" /><br>
 	<?php ?>


 	</form>
 	<b>Sudah berdaftar?</b> <br><a href="index.php">Klik sini</a>
 	</center>
 </body>
 </html>