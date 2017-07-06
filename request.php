<html>
   <head>
       <link href="bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="bootstrap.css" rel="stylesheet" type="text/css" />

		<script src="jquery.min.js"></script>
		<script src="bootstrap.min.js"></script>
    <script type="text/javascript">
	</script>
</head>
<body>


 <?php
          
   if(isset($_COOKIE["hod"])){
	$email=$_COOKIE["hod"];

	mysql_connect("localhost","root","");
	mysql_select_db("complain_system");
	$r=mysql_query("select * from hod where email='$email'");
    $s=mysql_fetch_array($r);
    
     $departname=$s["departname"];
	 
	mysql_connect("localhost","root","");
	mysql_select_db("complaint");
	$z=mysql_query("select * from studprofile where branch='$departname' AND status='pending'");
	?>
	
	
	<?php
	$t=1;
	
while($x=mysql_fetch_array($z)){
	$email=$x["email"];
	?>
	<div id="divact">
	<form method="post" action="">
	   <table class="table table-hover">
	    <tr>

	       <td><h3><?=$x["sname"]?></h3></td>
	       <td><h3><?=$x["branch"]?></h3></td>
	       <td><h3><?=$x["year"]?><sup>th</sup> year</h3></td>
	       <td><a href="activate.php?email=<?=$email?>"><button type="button" id="act<?=$t?>" class="btn btn-success btn-block">Activate</button><a></td><td></td>
       </tr>
     </table>
   </form>
	<?php
	$t++;
}	
	?>
</div>
	</body>
	</html>
<?php
   }
   else{
	   header("location:site.php?err=1");
   }
   ?>