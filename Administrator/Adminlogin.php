<?php
$username=$_POST["admin"];
$pass=$_POST["pass"];
  mysql_connect("localhost","root","");
  mysql_select_db("complain_system");
  $q=mysql_query("select * from admin where admin='$username' and pass='$pass' ");	
	if($r=mysql_fetch_array($q)){
		setcookie("admin",$username,time()+6000);
    header("location:complaint.php");
	}
	else{
		header("location:index.php");
		
	}
?>