<?php include("connect.php");
if (isset($_GET['id']))
{
	$king=$_GET['id'];
$res=mysqli_query($con,"select filename from fileaddress where sno='$king'") or die (mysqli_error($con));
while($row=mysqli_fetch_array($res))
{		
	 if(unlink($row[0]))
	 {echo "success";}else{echo "fail";}}
$del=mysqli_query($con,"delete from fileaddress where sno='$king'") or die (mysqli_error($con));
if(mysqli_affected_rows($con)>0)
{
echo"<p>"."successfully deleted"."</p>";
}}
if(isset($_POST['ids']))
  {
	  $ids=$_POST['ids'];
	  foreach($ids as $idm)
	  {$res=mysqli_query($con,"select filename from fileaddress where sno='$idm'") or die (mysqli_error($con));
while($row=mysqli_fetch_array($res))
{		
	 if(unlink($row[0]))
	 {echo "success";}else{echo "fail";}}
		  mysqli_query($con,"delete from fileaddress where sno='$idm'") or die(mysqli_error($con));
	      if(mysqli_affected_rows($con)>0)
	       {echo"<p>"."successfully deleted"."$idm"."detail"."</p>";
		   }}}
?> 
<script>
		window.location="deletepage.php";
		 </script>