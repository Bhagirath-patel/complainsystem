<?php
 if(empty($_POST["username"]) || empty($_POST["password"])){
	 header("location:index.php?err=1");
 }
 else{
   $username=mysql_real_escape_string($_POST["username"]);
   $password=mysql_real_escape_string($_POST["password"]);
   
   mysql_connect("localhost","root","");
   mysql_select_db("complain_system");
   $r=mysql_query("select * from studprofile where email='$username' and password='$password' and status='activited'");
if($p=mysql_fetch_array($r)){
	setcookie("user",$username,time()+3600);
	header("location:Profile.php");
	}
else {
    $s=mysql_query("select * from hod where email='$username' and password='$password'");
    	if($t=mysql_fetch_array($s)){
		setcookie("hod",$username,time()+3600);
		header("location:Profile.php");
		}
else{
	header("location:index.php?err=1");
}
}	
}	
?>