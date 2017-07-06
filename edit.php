 <?php 
         $hname=$_POST["hname"];
		 $email=$_POST["email"];
		 $phone=$_POST["phone"];
		 $education=$_POST["education"];
		 $address=$_POST["address"];
		
	    mysql_connect("localhost","root","");
	    mysql_select_db("complain_system");
    	mysql_query("UPDATE `complaint`.`hod` SET `hodname`='$hname',`email`='$email',`phone`='$phone',`education`='$education',`address`='$address' WHERE `email`='$email'");
	      header("location:profile.php?succ=1");
?>
