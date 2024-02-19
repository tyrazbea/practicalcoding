<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?PHP

include ('../link_db.php');
$sql="SELECT * from student ORDER BY name ASC";
$result = mysql_query($sql, $conn) or die(mysql_error());

?>
<P><strong><center> Senarai Nama Pelajar</strong></center>
<table border="1" width="900" align="center" cellspacing="2" cellpadding="2">
<tr>

<td align="center" bgcolor="#FFCC00"><strong>IC Number</strong></td>
<td align="center" bgcolor="#FFCC00"><strong>Name</strong></td>
<td align="center" bgcolor="#FFCC00"><strong>Action</strong></td>
</tr>

<?PHP
while ($row=mysql_fetch_array($result))
{
echo "<tr>";
$ic_no=$row["ic_no"];
echo "<br><td>" .$row["ic_no"]. "</td>";
echo "<td>" .$row["name"]. "</td>";
echo "<td><a href=\"profile.php?ic_no=$ic_no\"><input type=\"button\" value=\"Profile\" /></a></td>";

}

echo "</table>";
echo "<center>";
echo "<br>";
?>


</body>
</html>