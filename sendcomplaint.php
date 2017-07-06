<?php
$email=$_COOKIE["user"];
  mysql_connect("localhost","root","");
    mysql_select_db("complain_system");
	$r=mysql_query("select * from studprofile where email='$email' ");
	$s=mysql_fetch_array($r);
$depart=$s["branch"]; 
	$k=mysql_query("select * from hod where departname='$depart' ");
	$t=mysql_fetch_array($k);
 $hodname=$t["hodname"];
 $subject=$_POST["subject"];
 $msg=$_REQUEST["msg"];
 
    mysql_query("INSERT INTO  `complain_system`.`sendcomplaint` (`depart` ,`to` ,`from` ,`subject` ,`msg` ,`status`)VALUES ('$depart',  '$hodname',  '$email',  '$subject',  '$msg' ,'new')");	  
   header("location:profile.php?suc=1");
	?>