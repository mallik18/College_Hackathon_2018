<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body bgcolor="grey">

</body>
</html>






<?php
  include("database.php");
  extract($_POST);
  

  $q=" SELECT * FROM user WHERE (username='$username' OR email='$username' ) AND password='$password' ";
//mysqli_query($conn,"update user set flag='0' ");
  $sql=mysqli_query($conn,$q);
  if(mysqli_num_rows($sql)==1)
  {
    $r=mysqli_fetch_assoc($sql);
        if($r['flag']==1)
        {
          echo" Account already logged in";
          exit;
        }
          

        
  		 echo "Successfully logged as ";
       echo  $name=$r['username'];
       mysqli_query($conn,"UPDATE user SET flag='1' where username='$username' or email='$username' ");

       echo "<br>";
       echo "<br>";
       echo "<a href='afterlogin.php' >Click here to start</a>";

       
     
        
  }
else
  echo "<center> Username or email invlaid";
  $nam=$r['username'];
 
?>

</body>
</html>