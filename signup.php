<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body bgcolor="grey">

</body>
</html>




<?php
  include"database.php";
  extract($_POST);
  $sql="SELECT username,email FROM user where username='$username' or email='$username' ";
  $q=mysqli_query($conn,$sql);

  if(mysqli_num_rows($q)>0)
  {
  	echo"Account already exist";
    exit;
  }

 $d="INSERT INTO user (username,email,mobile,password,flag) values ('$username','$email','$mobilenumber','$password','0')";
  $s=mysqli_query($conn,$d);
  
   echo "<br><br><br><div >Account with username  $username Created Sucessfully</div>";
echo "<br><div >Click here to start!</div>";
echo "<br><div ><a href='login.html'>START</a></div>";
?>