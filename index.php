<html>
     <head>
	   <link href="bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="bootstrap.css" rel="stylesheet" type="text/css" />
		<script src="jquery.min.js"></script>
		<script src="bootstrap.min.js"></script>
	
</head> 
	<body>
	
		<div class="container-fluid responsive" >
	    <div class="row" style="height:200px" class="img-responsive">
		 <img src="images/unilogo.jpg" class="img-responsive">
		</div>
		
	   <div class="row">
	   <div class="col-sm-3"></div>
	   <div class="col-sm-6">
	  <div class="row" style="background-color:#dedef8;">
      <div class="panel panel-heading" style="background-color:#ee82ee;" align="center"><h1><b>Login</b></h1></div>
	  <div style="background-color:#ee82ee;">
	<?php
		if(isset($_GET["err"])){
			?>
			<h4>Invalid Email OR Password </h4>
	<?php		
		}
	?>
	</div>
        <form method="post" action="login.php">
				 <div class="row">
				<label class="col-sm-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  User Name :-</label>
				<div class="col-sm-9">
				<input type="email" name="username" class="form-control" required="required">
				</div>
				</div>
				<div class="row" style="height:15px"></div>
				<div class="row">
				<label class="col-sm-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Password :-</label>
				<div class="col-sm-9">
				<input type="password" name="password" class="form-control" required="required">
				</div>
				</div>
				<div class="row" style="height:15px"></div>
				<div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-8">
				<div class="panel panel-footer">
				<div class="row">
				<div class="col-sm-6">
				<button type="submit" class="btn btn-success btn-block">Login</button>
				</div>
				<div class="col-sm-6">
				<a href="stureg.php" class="btn btn-danger btn-block">Registration</a>
			  
			   </div>
			   </div>
			   </div>
			   </div>
			   </div>
			   <div class="col-sm-2"></div>
			   
	     </form>
		 </div>
		 
		 </div>
		 <div class="col-sm-3"></div>
		</div>  
		</div>
		 	   
</body>
</html>	