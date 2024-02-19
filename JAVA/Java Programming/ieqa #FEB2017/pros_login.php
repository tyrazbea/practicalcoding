<?php
     include("link_db.php");
     session_start();
     //$no_ic=$_POST['No_IC'];
     $password=$_POST['Password'];
     $query="SELECT * FROM userdb WHERE username='$username' AND password='$password'";
     $row=mysql_query($query);
     $count=mysql_num_rows($row);
     $show=mysql_fetch_assoc($row);
     if($count==1)                  //berjaya masuk
     {

        $_SESSION['username']=$username;
         $userlevel=$show['type'];
         if($userlevel==1)                            //bandingkan user sama ada pelawat atau admin
         {
             header('location:adminpage.php');
         }
         else if($userlevel==3)
         {
             header('location:userpage.php');
         }


     }
     else
     {
         header('location:index.php');
     }

?>