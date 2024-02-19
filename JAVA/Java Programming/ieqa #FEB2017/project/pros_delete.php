<?PHP

include ('../link_db.php');
$ic_no=$_GET['ic_no']; 
$query="delete from student where ic_no='$ic_no'";
$result=mysql_query($query);
 echo $ic_no;
if($result==TRUE)echo "berjaya <a href=\"editdandelete_personal.php\"> list</a>";
if($result==FALSE)echo "gagal <a href=\"editdandelete_personal.php\"> list</a>";
?>
