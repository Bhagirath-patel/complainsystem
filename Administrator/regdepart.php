<?php
$email=$_POST["email"];
$departname=$_POST["departname"];
 $did=$_POST["did"];
 $hodname=$_POST["hodname"];
 $phno=$_POST["phno"];
 $time1=$_POST["time1"];
 $time2=$_POST["time2"];
 $nf=$_POST["nf"];
 $fn=$_POST["fn"];
	mysql_connect("localhost","root","");
    mysql_select_db("complain_system");
	mysql_query("INSERT INTO `department` (`dname`, `did`, `hodname`, `ofemail`, `phno`, `time1`, `time2`, `nf`, `fn`) VALUES ('$departname', '$did', '$hodname', '$email', '$phno', '$time1', '$time2', '$nf', '$fn')"); 
   header("location:complaint.php?ret=1");
	?>