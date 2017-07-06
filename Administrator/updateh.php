<?php
$departname=$_POST["departname"];
$hodname=$_POST["hodname"]; 
$email=$_POST["email"];
$phone=$_POST["phno"];
$education=$_POST["education"];
	$dbhandle=mysql_connect("localhost","root","");
      $selected=mysql_select_db("complain_system",$dbhandle);
    mysql_query("update hod set hodname='$hodname',email='$email',phone='$phone',education='$education' where departname='$departname' "); 	  
   header("location:complaint.php?ret=4");
?>