<?php
     	$sname=$_POST["sname"];
		$branch=$_POST["branch"];
		$course=$_POST["course"];
		$year=$_POST["year"];
		$email=$_POST["email"];
		$password=$_POST["password"];
		$phone=$_POST["phone"];
		$address=$_POST["address"];
		if($sname!=null && $branch!=null && $course!=null && $year!=null && $email!=null && $password!=null && $phone!=null && $address!=null ){
mysql_connect("localhost","root","");
mysql_select_db("complain_system");
mysql_query("insert into studprofile values('$sname','$branch','$course','$year','$email','$password','$phone','$address','pending')");
		header("location:index.php?succ=1");
		}
		else{
			
			header("location:index.php?err=1");
		}
		?>		
	 