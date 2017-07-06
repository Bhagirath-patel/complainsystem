<?php
    $email=$_GET["email"];
    mysql_connect("localhost","root","");
	mysql_select_db("complain_system");
	mysql_query("update studprofile set status='activited' where email='$email'");
   header("location:profile.php");

?>