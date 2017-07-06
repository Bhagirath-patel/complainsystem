<html>
   <head>
        <link href="bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="bootstrap.css" rel="stylesheet" type="text/css" />

		<script src="jquery.min.js"></script>
		<script src="bootstrap.min.js"></script>
       <script type="text/javascript">
	   </script>
<body>

   <?php 
         $email=$_COOKIE["hod"];
		 
	    mysql_connect("localhost","root","");
	    mysql_select_db("complain_system");
	 $r=mysql_query("select * from hod where email='$email' ");
	  while($p=mysql_fetch_array($r)){
?>

   <form method="post" action="edit.php">
    <table class="table table-hover" style="background-color:#999966;">
     <tr>
         <td>Name</td>
         <td><input type="text" name="hname" value="<?=$p[0]?>"> </td>
     </tr>

     <tr>
        <td>Email</td>
        <td><input type="text" name="email" value="<?=$p[2]?>"></td>
     </tr>

     <tr>
        <td>Phone</td>
        <td><input type="text" name="phone" value="<?=$p[3]?>"></td>
     </tr>
	 

     <tr>
         <td>Education</td>
         <td><input type="text" name="education" value="<?=$p[4]?>"></td>
     </tr>

     <tr>
        <td>Address</td>
        <td><input type="text" name="address" value="<?=$p[6]?>"></td>
     </tr>
	 
	 <tr>
	    <td><button type="submit" class="btn btn-success btn-block">Submit</button></td>
	  </tr>
</table>
</form>
<?php
 }
?>	  
</body>
</html> 
	   