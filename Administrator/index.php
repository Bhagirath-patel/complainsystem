<html>
<head>
	<link href="bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="bootstrap.css" rel="stylesheet" type="text/css" />
		<script src="jquery.min.js"></script>
		<script src="bootstrap.min.js"></script>
	</head>
  <body>
      <div class="container-fluid" >
	    <div class="row" style="height:200px"></div>
	   <div class="row">
	   <div class="col-sm-3"></div>
	   <div class="col-sm-6">
	  <div class="row" style="background-color:#dedef8;">
       
	   
      <div class="panel panel-heading" style="background-color:#ee82ee;" align="center"><h1><b>Admin login page</b></h1></div>

   
        <form method="post" action="Adminlogin.php">
				 <div class="row">
				<label class="col-sm-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  User Name :-</label>
				<div class="col-sm-9">
				<input type="text" name="admin" class="form-control" required="required">
				</div>
				</div>
				<div class="row" style="height:15px"></div>
				<div class="row">
				<label class="col-sm-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Password :-</label>
				<div class="col-sm-9">
				<input type="password" name="pass" class="form-control" required="required">
				</div>
				</div>
				<div class="row" style="height:15px"></div>
				<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
				<div class="panel panel-footer">
				<button type="submit" class="btn btn-success btn-block">Login</button>
			   </div>
			   </div>
			   </div>
			   <div class="col-sm-4"></div>
			   
	     </form>
		 </div>
		 
		 </div>
		 <div class="col-sm-3"></div>
		</div>  
		</div>  
   </body>
   </html>