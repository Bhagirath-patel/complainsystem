<?php
      $email=$_COOKIE["hod"];
      if(empty($_POST["cp"]) || empty($_POST["np"]) || empty($_POST["rp"])){
            header("location:changepass.php?err=1");
        }
     else{
             $cp=$_POST["cp"];
             $np=$_POST["np"];
             $rp=$_POST["rp"];

     if($np==$rp){
         mysql_connect("localhost","root","");
         mysql_select_db("complain_system");
         $rs=mysql_query("select * from hod where email='$email' and password='$cp' ");
          $flag=0;
          while($rs.next()){
                  $flag=1;
                     break;
                }

         if($flag==1){

        mysql_query("update hod set password='$np' where email='$email' ");
           header("location:profile.php?succ=1");
         }
      
        else{
              header("location:changepass.php?invalid=1");
            }
          }}
?>  