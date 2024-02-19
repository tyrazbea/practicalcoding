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