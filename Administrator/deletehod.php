<?php
$departname=$_POST["depart"];
mysql_connect("localhost","root","");
mysql_select_db("complain_system");
mysql_query("delete from hod where departname='$departname' ");
header("location:complaint.php?ret=3");
?>
