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
	<?php
if(!empty($_GET["reff"])){
	$abc=$_GET["reff"];
	if($abc==1){
	setcookie("user",$username,time()-20);
	setcookie("hod",$username,time()-20);
	header("location:index.php");
}
}
 
else if(isset($_COOKIE["hod"])){
	$email=$_COOKIE["hod"];
	mysql_connect("localhost","root","");
	mysql_select_db("complain_system");
	$r=mysql_query("select * from hod where email='$email'");
if($s=mysql_fetch_array($r)){
	?>
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
    $departname=$_REQUEST["depart"];
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
	<td><a href="activate.php"><button type="button" id="act<?=$t?>" class="btn btn-success btn-block">view</button><a></td><td></td>
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