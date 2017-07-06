<?php
    $hodname=$_POST["hodname"];
    $departname=$_POST["departname"];
    $email=$_POST["email"];
    $phone=$_POST["phno"];
    $education=$_POST["education"];
	$password=$_POST["password"];
    $address=$_POST["address"];
	
	mysql_connect("localhost","root","");
    mysql_select_db("complain_system");
    mysql_query("INSERT INTO `complain_system`.`hod` (`hodname`,`departname`, `email`,`phone`, `education`, `password`,`address`) VALUES ('$hodname', '$departname', '$email', '$phone', '$education','$password','$address')");	  
   header("location:complaint.php");
	?>