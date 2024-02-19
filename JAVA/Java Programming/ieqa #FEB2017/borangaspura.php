<!DOCTYPE html>
<html>
<head>
<style> 
	
.flex-container {
    display: -webkit-flex;
    display: flex;  
    -webkit-flex-flow: row wrap;
    flex-flow: row wrap;
    text-align: center;
}

.flex-container > * {
    padding: 15px;
    -webkit-flex: 3 1000%;
    flex: 3 1000%;
}

.article {
    text-align: left;
}

span.note{
	font-size: 120%;
		color: red;
		}

header {background: Skyblue;color:black;}
footer {background: #aaa;color:white;}
.nav {background:#eee;}

.nav ul {
    list-style-type: Italy;
    padding: 4;
}
.nav ul a {
    text-decoration: Italy;
}
li.sub ul {
display:none;
position: absolute; left: 100%; top:0;}

li.sub:hover ul{
display: block;
}
@media all and (min-width: 768px) {
    .nav {text-align:left;-webkit-flex: 1 auto;flex:1 auto;-webkit-order:1;order:1;}
    .article {-webkit-flex:10 1px;flex:10 1px;-webkit-order:4;order:4;}
    footer {-webkit-order:5;order:5;}
}
</style>
</head>
<title> Projek Tahun Akhir </title>
<body>

<img src="url" alt="some_text" style="width:width;height:height;">
<div class="flex-container">
<header>
  <h1>Sistem Permohonan Balik Bermalam <br>
		Kolej Vokasional Jasin </h1>
</header>

<nav class="nav">
<ul class="nav navbar-nav">
  <li class="active"><a href="http://localhost/project1/Home.php">Home</a></li>
  <li><a href="http://localhost/project1/Borang.php">Borang Permohonan</a></li>
  <li><a href="http://localhost/project1/Semakan.php">Semakkan Borang Permohonan</a></li>
      <li><a href="http://localhost/project1/Login.php">Log Keluar</a></li>
</ul>
</nav>


<article class="article">
<p align ="center">
<form action="pros_insert.php" method="post" enctype="multipart/form-data" name="form1">
<table><table border= "3" width="600" height="450" bgcolor="lightgrey">
 <h4><p align ="center"> BORANG PERMOHONAN KELUAR / BALIK BERMALAM </p></h4>

  <tr>
      <td> Nama Pelajar :</br></td>
      <td width="50"><input type="text" name="nama" id="textfield" size="50"></td>
    </tr>
	
	<tr>
		<td> Jantina : </td>
		<td><input type="text" name="nama" id="textbox"></td>
		</td>
		
	</tr>
	
	<tr>
      <td>Kohort / Tahun : </td>
      <td><select name="kohort / tahun" id="select">
      <option> - Pilih - </option>
      <option value="2014"> 2 DVM</option>
      <option value="2015"> 1 DVM</option>
	  <option value="2016"> 2 SVM</option>
      <option value="2017"> 1 SVM</option>
      </select></td>
    </tr>
	
	<tr>
      <td>Program : </td>
      <td><select name="program / kursus" id="select">
      <option> - Pilih - </option>
      <option value="Bpb">Perbankan</option>
      <option value="Bpp">Perniagaan</option>
	  <option value="Bpm">Pemasaran</option>
      <option value="Bpr">Peruncitan</option>
	  <option value="Ipd">Pangkalan Data & Aplikasi Web</option>
      <option value="Isk">Sistem Komputer & Rangkaian</option>
	  <option value="Hsk">Seni Kulinari</option>
      <option value="Hpb">Bakeri & Pastri</option>
      <option value="Hpb">Teknologi Pembinaan</option>
      </select></td>
    </tr>

	<tr>
      <td>Dorm Putera : </td>
      <td><select name="nama Dorm" id="select">

      <option value="2B1">2B1</option>
	  <option value="2B2">2B2</option>
      <option value="2B3">2B3</option>
	  <option value="2B4">2B4</option>
      <option value="3B5">3B5</option>
	  <option value="3B6">3B6</option>
      <option value="3B7">3B7</option>
	  <option value="3B8">3B8</option>
      <option value="2D1">2D1</option>
	  <option value="2D2">2D2</option>
	  <option value="2D3">2D3</option>
	  <option value="2D4">2D4</option>
	  <option value="3D5">3D5</option>
	  <option value="3D6">3D6</option>
	  <option value="3D7">3D7</option>
	  <option value="3D8">3D8</option></td>
    </tr>
	
	<tr>
		<td> Tarikh Keluar : </td>
		<td> <input type="date" name="bdaymonth"></td>
	</tr>
	
	<tr>
		<td> Sehingga : </td>
		<td> <input type="date" name="bdaymonth"></td>
	</tr>
	
	<tr>
	  <td>Jam : </td>
	  <td><select name="Jam" id="seleect">
	  <option> - Pilih - </option>
	  <option value="Lepas5pm">Lepas 5pm</option>
	  <option value="Balik Kecemasan">Balik Kecemasan</option>
	  </td>
    </tr>
	
	<tr>
      <td>Alamat : </td>
	 <td><textarea rows="4" cols="50"></textarea></td>
	 </tr>
	
	<tr>
      <td>Nombor Telefon : </td>
      <td><input type="tel" name="usrtel" id="textfield3" size="12" /></td>
    </tr>
	
	<tr>
		<td>Tujuan : </td>
		<td> <textarea rows="4" cols="50"></textarea></td>
	</tr>
</table>
</p align ="center">

	
</form>

<form action="submit"  method="POST">
	<p>
		<label>
			<input type="checkbox" value="terms">
			Sila semak <span class="note">SEMULA </span> maklumat yang telah diisi sebelum <span class="note"> Menghantar</span>
		</label>
	</p>
	
	<p>
		<p align = "center">
			<input type= "submit" value="HANTAR">
			<input type="reset" value="RESET / SEMULA">
		</p align>
  </p>
</form>
</article>

<footer>Copyright &copy; PTA SPBB </footer>
</div>

</body>
</html>