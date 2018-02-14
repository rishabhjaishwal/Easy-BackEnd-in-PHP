<?php
session_start();
if(!isset($_SESSION['lulu']))
{
	 echo "<script>alert('User Un-Autharized Access..');</script>";
            echo"<script>window.location='../login.php';</script>";
			exit(0);
}

?>