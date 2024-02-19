<html>
<head><title></title>
<?php include 'pembolehubah.php'; ?>
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
//pembolehubah
$baki=500.00;

echo "Baki akaun anda <b>RM $baki</b>. <br>";
echo "<br>";
//pernyataan bersyarat
if ($baki>500.00) {
echo "Tahniah. Anda boleh membuat pengeluaran.";
}

else {
echo "Maaf. Anda tidak boleh membuat pengeluaran.";
}

?>
</div>

<!-- SEGMEN PHP TAMAT -->



<div class="footer">
	<center>Hakcipta Terpelihara KPD4043 Tahun 2016</center>
</div>

</div>
</body>
</html>