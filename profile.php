<?php
if(!empty($_GET["reff"])){
	$abc=$_GET["reff"];
	if($abc==1){
	setcookie("user",$username,time()-20);
	setcookie("hod",$username,time()-20);
	header("location:index.php");
}
}
if(isset($_COOKIE["user"])){
		$email=$_COOKIE["user"];
	mysql_connect("localhost","root","");
	mysql_select_db("complain_system");
	$r=mysql_query("select * from studprofile where email='$email'");
	
if($s=mysql_fetch_array($r)){
	$dname=$s["branch"];
	$p=mysql_query("select * from department where dname='$dname'");
	$g=mysql_fetch_array($p);
	?>
<html>
	<head>
	<link href="bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="bootstrap.css" rel="stylesheet" type="text/css" />
		<script src="jquery.min.js"></script>
		<script src="bootstrap.min.js"></script>
	</head>
	<body>
	<div class="col-sm-12" style="background-color:#808080">
	  <div class="col-sm-4">
	    <h3>STUDENT COMPLAINT PAGE</h3>
		</div>
	<div class="col-sm-4">
	   <ul class="nav nav-pills">
	   	<li><a href="profile.php?reff=1" id="hello"><h3>Logout</h3></a></li></ul></div>
</div>
 <?php 
    if(isset($_GET["suc"])){
		echo "<b>"."Complain Successfully Send"."</b>";
	}
 ?>		
 <div class="container-fluid" style="background-color:#9999cc">
  <div class="col-sm-12">
          <form method="post" action="sendcomplaint.php">
          <table class="table table-hover"style="background-color:#9999cc;">
			  <tr><td>TO:</td>
				  <td><h3><?=$s["branch"]?>&nbsp;Department</h3> </td></tr>
			<tr><td>HOD Name:</td>
                      <td><h3><?=$g["hodname"]?><h3></td></tr>
					  <tr><td>Subject:</td><td><input type="text" name="subject" required="required"></td></tr>
					  
			  <tr><td>Complain:</td>
			  <td><textarea name="msg" rows="8" cols="100"></textarea></td></tr>
			<tr><td>  <button type="submit" class="btn btn-success btn-block">Submit</button></td></tr>
			
         </table>
    </form>
    </div>
</div>
	
	</body>
	</html>

<?php	
}
}

else if(isset($_COOKIE["hod"])){
	$email=$_COOKIE["hod"];
	mysql_connect("localhost","root","");
	mysql_select_db("complain_system");
	$r=mysql_query("select * from hod where email='$email'");
if($s=mysql_fetch_array($r)){
	?>
	<html>
	<head>
	<link href="bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="bootstrap.css" rel="stylesheet" type="text/css" />
		<script src="jquery.min.js"></script>
		<script src="bootstrap.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
	$("#hello").click(function(){
		$("#pro").modal();
		});
	$("button").click(function(){
		$("#divact").hide();
		});	
	});
	</script>
	</head>
	<body>
	 <div class="container-fluid"  style="background-color:#778899;">
   <ul class="nav nav-pills"  >
   <div class="col-sm-1"></div>
    <li class="xyz" id="inbox"><a href="inbox.php"><h3>Inbox</h3></a></li>
	<li class="xyz" id="editprofile"><a href="editprofile.php" id="hods"><h3>Edit Profile</h3></a></li>
	<li class="xyz" id="logout"><a href="profile.php?reff=1" id="pjdkf" ><h3>Logout</h3></a></li>
	<li class="xyz" id="changepass"><a href="changep.php" id="deleteh" ><h3>Change password</h3></a></li>
	<li class="xyz" id="requests"><a href="#"><h3>Student's Requests</h3></a>
	</ul>
     </div>
	 <div id="inbox">
	 <?php
 $departname=$s["departname"];
	mysql_connect("localhost","root","");
	mysql_select_db("complain_system");
	$u=mysql_query("select * from sendcomplaint where depart='$departname' AND status='new'");
	?>
	<table class="table table-hover">
	<?php
	$t=1;
while($f=mysql_fetch_array($u)){
	$email=$f["from"];
	?>
	<div id="divact">
	<tr>
	<td><h3>Name:&nbsp;&nbsp;<?=$f["from"]?></h3></td>
	<td><h3>Subject:&nbsp;&nbsp;<?=$f["subject"]?></h3></td>
	<td><a href="#"><button type="button" id="act<?=$t?>" class="btn btn-success btn-block">view</button><a></td><td></td>
	</tr>
	<?php
	$t++;
}	
	?>
	  </div>
	 <div id="editprofile">
	 
	  </div>
	   <div id="logout">
	 
	  </div>
	   <div id="changepass">
	 
	  </div>
	  
	  
	   <div id="requests">
	   <?php
	mysql_connect("localhost","root","");
	mysql_select_db("complain_system");
	$z=mysql_query("select * from studprofile where branch='$departname' AND status='pending'");
	?>
	<table class="table table-hover">
	<?php
	$t=1;
while($x=mysql_fetch_array($z)){
	$email=$x["email"];
	?>
	<div id="divact">
	<tr>
	  <td><h3><?=$x["sname"]?></h3></td>
	  <td><h3><?=$x["branch"]?></h3></td>
	  <td><h3><?=$x["year"]?><sup>th</sup> year</h3></td>
	  <td> <a href="activate.php?email=<?=$email?>"><button type="button" id="act<?=$t?>" class="btn btn-success btn-block">Activate</button><a></td><td></td>
   </tr>
	<?php
	$t++;
}	
	?>
	</table>
	  </div>
	</body>
	</html>
	
<?php	
}
}
else{

	header("location:index.php");
}
?>