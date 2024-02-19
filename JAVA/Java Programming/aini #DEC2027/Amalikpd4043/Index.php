<html>
<head><title></title>
<?php include 'pembolehubah.php'; ?>
<style>
body {
	background-color: #555;
	font: small/2 Arial, Helvetica, sans-serif;
}
	.wrap {
		width:950px;
		margin: 0 auto;
		background-color: #fff;
	}
h1 {
	font-size: 4em;
	padding: 1em 8px;
	color: #fff;
	background-image: url("Imej/header.jpg");
	margin: 0;
	height: 80px;
	text-align: center;
}

.leftcontent {
	font-size: 1.5em;
	width: 660px;
	height: 350px;
	background: #fafafa;
	padding: 10px;
	line-height: 100%;
	text-align: center;
	float: left;
}

.rightcontent{
	font-size: 1.5em;
	width: 250px;
	height: 350px;
	background: #bddefd;
	padding: 10px;
	float: right;
	text-align: center;
}

.footer{
	height: 40px;
	background: #333;
	padding: 10px;
	color: #fff;
	text-align: center;
	float: left;
	width: 930px;
}

.footer a{
	color: #fff;
}

#nav {
	width: 100%;
	float: left;
	margin: 0px;
	padding: 0;
	list-style: none;
	background-color: #04c3f3;
}

#nav li{
	float: left;
}

#nav li a{
	display: block;
	padding: 8px 15px;
	text-decoration: none;
	font-weight: bold;
	color: #000;
	border-right: 1px solid #ccc; 
}

nav li a:hover {
	color: #fff;
	background-color: #000;
}
</style>
</head>
<body>

<div class="wrap">
<img src="Imej/kawanku2.png" width="100%" height="150px">



	

<ul id="nav">
	<?php
	echo'<li><a href="Index.php">HOME</a></li> &nbsp&nbsp <li><a href="penyata.php">PENYATA AKAUN</a></li>';
	
	?>
</ul>

<div >
<!-- ANDA DIKEHENDAKI MELENGAPKAN SEGMEN PHP DI BAWAH BEDASARKAN GAMBARAJAH 1 -->
<?php
echo "<center><u>MAKLUMAT DIRI</u></center>";
echo "<br>";
?>

<?php
//pembolehubah untuk maklumat diri
$nama="Mohd Hafiz Bin Mustafa";
$nokp="800116-01-5037";
$tarikh="16 Januari 1980";
$tempat="Hospital Sultan Aminah JB";
$alamat="No29, JLN PI 5/8 Taman Pulai Indah";
$noAcc="324523456578";
$jenis="Simpanan";

//jadual yang memaparkan maklumat diri
echo "<center><table border=1</center>";
echo "<tr>";
	echo "<th>Nama</th>";
	echo "<td>:</td>";
	echo "<td>$nama</td>";
echo "</tr>";

echo "<tr>";
	echo "<th>No kad pengenalan</th>";
	echo "<td>:</td>";
	echo "<td>$nokp</td>";
echo "</tr>";

echo "<tr>";
	echo "<th>Tarikh Lahir</th>";
	echo "<td>:</td>";
	echo "<td>$tarikh</td>";
echo "</tr>";

echo "<tr>";
	echo "<th>Tempat Lahir</th>";
	echo "<td>:</td>";
	echo "<td>$tempat</td>";
echo "</tr>";

echo "<tr>";
	echo "<th>Alamat</th>";
	echo "<td>:</td>";
	echo "<td>$alamat</td>";
echo "</tr>";

echo "<tr>";
	echo "<th>No Akaun</th>";
	echo "<td>:</td>";
	echo "<td>$noAcc</td>";
echo "</tr>";

echo "<tr>";
	echo "<th>Jenis Akaun</th>";
	echo "<td>:</td>";
	echo "<td>$jenis</td>";
echo "</tr>";

echo "</table>";
echo "<br>";
?>
</div>

<!-- SEGMEN PHP TAMAT -->



<div class="footer">
	<center>Hakcipta Terpelihara KPD4043 Tahun 2016</center>
</div>

</div>
</body>
</html>