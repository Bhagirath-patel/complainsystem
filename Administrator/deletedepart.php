<?php
$did=$_POST["did"];
mysql_connect("localhost","root","");
mysql_select_db("complain_system");
mysql_query("delete from department where did='$did' ");
header("location:complaint.php?ret=3");
?>
