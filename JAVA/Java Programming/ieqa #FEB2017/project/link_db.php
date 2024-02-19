<?PHP
$server='localhost';
$userid='root';
$password='';
$dbname='kvj';

$connectdb=mysql_connect("$server","$userid","$password");
mysql_select_db("$dbname",$connectdb) or die (mysql_error());


?>