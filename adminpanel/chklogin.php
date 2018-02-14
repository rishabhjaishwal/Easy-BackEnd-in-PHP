<?php include("connect.php");

session_start();
extract($_REQUEST);
$res=mysqli_query($con,"select username,password from login where username='$user' and password='$pass'") or die(mysqli_error($con));
     $count = mysqli_num_rows($res);
     
	  if($count == 1) {
		   $_SESSION['lulu']=$user;
         $_SESSION['login_user'] = $user;	
		   echo "<script>alert('Login Successfully:');</script>";
            echo"<script>window.location='admin.php';</script>";
               
      }
	  else {
         echo"<script>alert('Your Login Name or Password is invalid');</script>";
		  echo"<script>window.location='../login.php';</script>";
      }
  ?>