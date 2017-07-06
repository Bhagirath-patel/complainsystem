<?php

    if(!empty($_GET["reff"])){
	$abc=$_GET["reff"];
	if($abc==1){
	setcookie("admin",$username,time()-20);
	header("location:index.php");
}
}
  

if(!isset($_COOKIE["admin"])){
	header("location:index.php");
}
else{
?>
<html>
<head>
	<link href="bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="bootstrap.css" rel="stylesheet" type="text/css" />

		<script src="jquery.min.js"></script>
		<script src="bootstrap.min.js"></script>
		<style>
				table, th, td {
					border: 2px solid black;
				}
				table {
						border-collapse: collapse;
						width: 100%;
					}

					th {
						height: 50px;
					}
         </style>
    <script type="text/javascript">
   $(document).ready(function(){

  $("#updated").click(function(){
	    $("#upd").modal();
	  });
	   $("#deleted").click(function(){
	    $("#deld").modal();
	  });
$("#updateh").click(function(){
	    $("#uph").modal();
	  });
	   $("#deleteh").click(function(){
	    $("#delh").modal();
	  });

	$(".xyz").click(function(){
	$(".active").attr("class","xyz");
	 $(this).attr("class","active");
	 });
	 $("#home").click(function(){
	$(".active").attr("class","xyz");
	 $(this).attr("class","active");
	 });
   });
	 </script>


	</head>
  <body>
  	    <!-- Modal Start-->
	    <div class="modal fade" id="upd" role="dialog">
    <div class="modal-dialog modal-sg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3>Update Department</h3>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <table class="table table-hover">

        <form method="post" action="updatedepart.php">
      <tr> <td> Enter Department ID:</td><td><input type="text" name="did"></td></tr>
       
        </table>
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-success btn-block">Update</button>
      </form>
	  </div>
      </div>
      </div>
	  </div>
	   <!-- Modal Start-->
	    <div class="modal fade" id="deld" role="dialog">
    <div class="modal-dialog modal-sg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3>Delete Department</h3>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <table class="table table-hover">

        <form method="post" action="deletedepart.php">
      <tr> <td> Enter Department ID:</td><td><input type="text" name="did"></td></tr>
        </table>
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-success btn-block">Delete</button>
      </form>
	  </div>
      </div>
      </div>
	  </div>
	  <div class="modal fade" id="uph" role="dialog">
    <div class="modal-dialog modal-sg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3>Update HOD</h3>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <table class="table table-hover">

        <form method="post" action="updatehod.php">
      <tr> <td>HOD Of Department:</td><td><select name="depart">
	       <?php
		   		    mysql_connect("localhost","root","");
					mysql_select_db("complain_system");
					$z=mysql_query("select dname from department");
					while($x=mysql_fetch_array($z)){
		   ?>
           <option value="<?=$x[0]?>"><?=$x[0]?></option>
     <?php
					}
?>
			</select></td></tr>
        </table>
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-success btn-block">Update</button>
      </form>
	  </div>
      </div>
      </div>
	  </div>
	  
	  
	  	   <!-- Modal Start-->
	    <div class="modal fade" id="delh" role="dialog">
    <div class="modal-dialog modal-sg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3>Delete Hod</h3>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <table class="table table-hover">

        <form method="post" action="deletehod.php">
     <tr> <td> HOD Of Department:</td><td><select name="depart">
           <option value="Computer Science and Engineering">Computer Science and Engineering</option>
            <option value="Mechanical Engineering">Mechanical Engineering</option>
            <option value="Electrical Engineering">Electrical Engineering</option>
            <option value="Civil Engineering">Civil Engineering</option>
			<option value="Electronics Engineering">Electronics Engineering</option>
			<option value="EIC Engineering">EIC Engineering</option>
			</select></td></tr>
        </table>
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-success btn-block">Delete</button>
      </form>
	  </div>
      </div>
      </div>
	  </div>

  <div class="container-fluid"  style="background-color:#778899;">
   <ul class="nav nav-pills"  >
   <div class="col-sm-1"></div>
 <li class="xyz" id="department"><a href="#"><h3>Home</h3></a>   
<li class="xyz" id="department"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><h3>Departments</h3><span class="caret"></span></a>
	<ul  id="hello" class="dropdown-menu">
	<table class="table table-hover">
	 <li><tr><td><a href="adddepart.php" >Add Department</a></td></tr></li>
	<li><tr><td><a href="#" id="updated">Update Department</a></td></tr></li>
	<li><tr><td><a href="#"id="deleted" >Delete Department</a></td></tr></li>

	</table>
	</ul>
	</li>
	<li class="xyz" id="hod"><a href="#" id="hods" class="dropdown-toggle" data-toggle="dropdown"><h3>HOD</h3><span class="caret"></span></a>
	<ul class="dropdown-menu">
	<table class="table table-hover">
	<tr><td><a href="addhod.php" >Add HOD</a></td></tr>
	<tr><td><a href="#" id="updateh">Edit HOD</a></td></tr>
	<tr><td><a href="#" id="deleteh" >Delete HOD</a></td></tr>
	</table>
	</ul>
	</li>
	<li class="xyz" id="logout"><a href="complaint.php?reff=1" id="deleteh" ><h3>Logout</h3></a></li>
	</ul>
     </div>
	   <div class="container-fluid" style="background-color:#dedef8;">
       <div class="col-sm-6" style="background-color:#c0c0c0;">
	   <div class="panel">
    <div class="panel panel-heading" style="background-color:#c0c0c0;" align="center"><h1>All Departments</h1></div>
 <div class="panel panel-body" style="background-color:#dedef8;">
       
	   <div class="container-fluid">
	          <?php
					mysql_connect("localhost","root","");
					mysql_select_db("complain_system");
					$z=mysql_query("select * from department");
					?>
					<table class="table table-hover">
					<tr>
						<th>S.N.</th>
						<th>Department Name</th>
						<th>Department Id</th>
						<th>HOD Name</th>
					
					</tr>
					<?php
					$t=1;
					  while($x=mysql_fetch_array($z)){
			        ?>
					
				    <tr>
						<td> <?=$t?></td>
						<td> <?=$x[0]?></td>
						<td> <?=$x[1]?></td>
						<td> <?=$x[2]?></td>
					</tr>
					
			<?php
			  $t++;
             }
			  ?>
			  </table>
		</div>
		</div>
		</div>
		</div>
		<div class="col-sm-6" style="background-color:#c0c0c0;">
		<div class="panel">
		<div class="panel panel-heading" style="background-color:#c0c0c0;" align="center"><h1>All HOD </h1></div>
<div class="panel panel-body" style="background-color:#dedef8;">
       
	   <div class="container-fluid">
	      <?php
					mysql_connect("localhost","root","");
					mysql_select_db("complain_system");
					$z=mysql_query("select * from hod");
					?>
					<table class="table table-hover"><tr>
						<th>S.N.</th>
						<th>Name</th>
						<th>Department</th>
						<th>contact</th>
						<th>Qualification</th>
					
					</tr>
					
					<?php
					$t=1;
					  while($x=mysql_fetch_array($z)){
			        ?>
					
				    <tr>
						<td> <?=$t?></td>
						<td> <?=$x[0]?></td>
						<td> <?=$x[1]?></td>
						<td> <?=$x[3]?></td>
						<td> <?=$x[4]?></td>
					</tr>
					
			<?php
			  $t++;
             }
			  ?>
			  </table>
		</div>
		</div>
	   </div>
	   </div>
	  </div>
   </body>
   </html>
<?php
	}

	?>