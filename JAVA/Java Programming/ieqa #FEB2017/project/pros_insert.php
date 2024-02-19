<?php
include('../link_db.php');

$ic_no=$_POST['ic_no'];
$name=$_POST['name'];
$form=$_POST['form'];
$gender=$_POST['gender'];
$address=$_POST['address'];


$query="insert into student (ic_no,name,form,gender,address) values ('$ic_no','$name','$form','$gender','$address')";
if(mysql_query($query)){

	echo "<script>window.location=\"subject_student.php?ic_no=$ic_no\"</script>";
}

else
{echo "You already register this student &nbsp; $ic_no &nbsp;";
 echo "<a href=\"personal_form.php\">Back</a>";
}

?>