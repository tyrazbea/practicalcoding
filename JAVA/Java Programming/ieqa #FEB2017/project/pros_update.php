<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?PHP include ('../link_db.php');

$ic_no=$_GET['ic_no'];

$ud_ic_no=$_POST['ud_ic_no'];
$ud_name=$_POST['ud_name'];
$ud_form=$_POST['ud_form'];
$ud_gender=$_POST['ud_gender'];
$ud_address=$_POST['ud_address'];
$ud_parent_name=$_POST['ud_parent_name'];
$ud_phone_no=$_POST['ud_phone_no'];

$query="UPDATE student SET no_ic='$ud_ic_no',name='$ud_name',form='$ud_form',gender='$ud_gender',address='$ud_address',parent_name='$ud_parent_name',phone_no='$ud_phone_no' WHERE ic_no='$ic_no'";
mysql_query($query,$conn);
/* header('Location : http://localhost/xampp/kelas/editdandelete.php'); */
echo "Record Updated";
echo "<a href=\"editdandelete_personal.php\"> list</a>";
mysql_close();
?>
</body>
</html>