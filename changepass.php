<html>
<head>
	<link href="bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="bootstrap.css" rel="stylesheet" type="text/css" />

		<script src="jquery.min.js"></script>
		<script src="bootstrap.min.js"></script>
    <script type="text/javascript">
	</script>
	<style>
		#abcd
		{
			height:700px;
			padding:150px;
			
		}
		#tb
		{
			width:800px;
			height:300px;
			background-color:#c0c0c0
			
		}
		
	</style>
</head>
<body>
<div id="abcd" style="background-color:#dedef8;">
<form method="post" action="changep.php">
<table class="table table-hover" id="tb" >
   <tr>
     <td>Current Password</td>
	 <td><input type="password" name="cp" required="required"></td></tr>
	 
  <tr>
     <td>New Password</td>
	  <td><input type="password" name="np" required="required"></td></tr>
  <tr>
      <td>Re-enter Password</td>
	  <td><input type="password" name="rp" required="required"></td></tr>
	  
    <tr>
	    <td><button type="submit" class="btn btn-success btn-block">Submit</button></td>
	  </tr>
</table>
</form>
</div>
</body>
</html>	  
	  