<?php
 if(!empty($_GET["reff"])){
	$abc=$_GET["reff"];
	if($abc==1){
	setcookie("admin","",time()-20);
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
   <li class="xyz" id="department"><a href="complaint.php"><h3>Home</h3></a>
    <li class="xyz" id="department"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><h3>Departments</h3><span class="caret"></span></a>
	<ul  id="hello" class="dropdown-menu">
	<table class="table table-hover">
	 <li><tr><td><a href="adddepart.php" >Add Department</a></td></tr></li>
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
	<li class="xyz" id="logout"><a href="updatedepart.php?reff=1" id="deleteh" ><h3>Logout</h3></a></li>
	</ul>
     </div>
<?php
$did=$_POST["did"];
mysql_connect("localhost","root","");
mysql_select_db("complain_system");
$r=mysql_query("select * from department where did='$did'");	
if($s=mysql_fetch_array($r)){
	
 ?>
	 
<div class="container-fluid" style="background-color:#a9a9a9">
<table class="table table-hover">
<form  method="post" action="update.php">
 <tr><td>Choose Department:</td><td><select name="departname">
            <option value="Computer Science and Engineering">Computer Science and Engineering</option>
            <option value="Mechanical Engineering">Mechanical Engineering</option>
            <option value="Electrical Engineering">Electrical Engineering</option>
            <option value="Civil Engineering">Civil Engineering</option>
			<option value="Electronics Engineering">Electronics Engineering</option>
			<option value="EIC Engineering">EIC Engineering</option>
			<option value="<?=$s["dname"]?>" selected="selected"><?=$s["dname"]?></option>
        </select></td></tr>
        <tr><td>Department ID:</td><td><input type="text" name="did" value="<?=$s["did"]?>" required="required"></td></tr>
      <tr><td> HOD name:</td><td><input type="text" name="hodname" value="<?=$s["hodname"]?>" required="required"></td></tr>
        <tr><td>Official Email:</td><td><input type="email" name="email" value="<?=$s["ofemail"]?>" required="required" ></td></tr>
      <tr><td>Phone No:</td><td><input type="text" name="phno" value="<?=$s["phno"]?>" required="required"></td><tr>
   
  <tr><td>Working Time:</td><td> <input type="time" name="time1" value="<?=$s["time1"]?>">To&nbsp;&nbsp; <input type="time" name="time2" value="<?=$s["time2"]?>"></td><td>
     <tr><td>No. of Faculties in Department:</td><td><input type="text" name="nf" value="<?=$s["nf"]?>"required="required"></td><tr>
        <tr><td>Name Of faculties:<br>(Seperated By Comma)</td><td><textarea name="fn" rows="5" cols="100" required="required"><?=$s["fn"]?></textarea></td></tr>
       </table>      
	<div class="panel panel-footer">   
	<button type="submit" class="btn btn-success btn-block">Update</button>
        </form></div>
		</body>
		</html>
<?php
}
else{
header("location:complaint.php?ret=3");
}
}
?>