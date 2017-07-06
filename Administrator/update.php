<?php
$did=$_POST["did"];
$email=$_POST["email"];
$departname=$_POST["departname"];
 $hodname=$_POST["hodname"];
 $phno=$_POST["phno"];
 $time1=$_POST["time1"];
 $time2=$_POST["time2"];
 $nf=$_POST["nf"];
 $fn=$_POST["fn"];
    
	$dbhandle=mysql_connect("localhost","root","");
      $selected=mysql_select_db("complain_system",$dbhandle);
    mysql_query("update department set dname='$departname', hodname='$hodname', ofemail='$email',phno='$phno', time1='$time1', time2='$time2',nf='$nf', fn='$fn' where did='$did' "); 	  
   header("location:complaint.php?ret=4");
	?>