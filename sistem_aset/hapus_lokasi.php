<?php 

include('connection.php');

session_start();
if(!$_SESSION['email'])
{
	header("Location: index.php");
}

if(isset($_GET["id"]))
{

	mysqli_query($connection,"DELETE from lokasi where id='$_GET[id]'") or die(mysqli_error());

	echo "<script>alert('Rekod telah dihapuskan');
	window.location = 'update_lokasi.php'</script>";
}

?>