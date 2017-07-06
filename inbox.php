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
       if($s=mysql_fetch_array($r)){
    $departname=$s["departname"];
	
    mysql_connect("localhost","root","");
	mysql_select_db("complain_system");
	$u=mysql_query("select * from sendcomplaint where depart='$departname' AND status='new'");
	while($p=mysql_fetch_array($u)){
		?>
		<table class="table table-hover" style="background-color:#999966;">
		  <tr>
		     <td>Student Email&nbsp;&nbsp;&nbsp::<?=$p["from"]?></td>
			 <td>Message&nbsp;&nbsp;;&nbsp::<?=$p["msg"]?></td>
		  </tr>
        </table>		  
		
	<?php	
	}
	}
	}
	?>
</body>
</html>