<html>
	<head>
			<link href="bootstrap.min.css" rel="stylesheet" type="text/css" />
			<link href="bootstrap.css" rel="stylesheet" type="text/css" />
			<script src="jquery.min.js"></script>
			<script src="bootstrap.min.js"></script>
	</head>
	<body>
			<div class="container-fluid responsive" style="background-color:lightgrey">
			<div class="row">
			   
			</div>
			<div class="row">
			<div class="col-sm-4">
			<br>
		      <img src="images/stureg.jpg" width="450px" height="630px">
			</div>
		    <div class="col-sm-8">
			    <h1 align="center"><b style="text-decoration:underline;">Student Registration</b></h1>
				  <form method="post" action="studregister.php">
				  <table class="table table-hover">
					  <tr><td>Name:</td>
						  <td><input type="text" name="sname" required="required" class="form-control"></td></tr>
					<tr><td>Choose Branch:</td>
						  <td>  <select name="branch" required="required" class="form-control">			              
		            <option value="Computer Science and Engineering">Computer Science and Engineering</option>
					<option value="Mechanical Engineering">Mechanical Engineering</option>
					<option value="Electrical Engineering">Electrical Engineering</option>
					<option value="Civil Engineering">Civil Engineering</option>
					<option value="Electronics Engineering">Electronics Engineering</option>
					<option value="EIC Engineering">EIC Engineering</option>
									</select></td></tr>
					<tr><td>Course:</td>
							  <td><select name="course" required="required" class="form-control">
								  <option value="btech">B.Tech</option>
								  <option value="mtech">M.Tech</option>
								  </select>
							  </td></tr>
							  <tr><td>Year:</td>
							  <td><select name="year" required="required" class="form-control">
								  <option value="1">I</option>
								  <option value="2">II</option>
								  <option value="3">III</option>
								  <option value="4">IV</option></select>
							  </td></tr>		   
						 <tr><td>Email(Username):</td>
						<td><input type="email" name="email" class="form-control"></td>
					</tr>
				   <tr><td>Phone No:</td>
						 <td><input type="text" name="phone" class="form-control"></td></tr>				 
					 
					  <tr><td>Address:</td>
					  <td><textarea name="address" rows="5" cols="60"></textarea></td></tr>
					  <tr><td>Password:</td>
					  <td><input type="password" name="password" class="form-control"></td></tr>
					<tr>
					  <td>  <button type="submit" class="btn btn-success btn-block">Submit</button></td></tr>
					
				 </table>
			</form>
			</div>
			</div>
			</div>
	</body>
</html>