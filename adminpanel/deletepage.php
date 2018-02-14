<?php include("chksession.php");?>
<?php include("../meta.php");?>
<?php include("../lib.php");?>
<?php include("navadmin.php");?>
<?php include("connect.php");?>
$res=mysqli_query($con,"Select * from fileaddress") or die(mysqli_error($con));
if(mysqli_affected_rows($con)>0)
{ 
$colname=mysqli_fetch_fields($res);
echo"<form action='deletequery.php' method='post'>";?>



<?php echo"<br><button type='submit' class='btn w3-teal' >";
echo"<span class='glyphicon glyphicon-remove'>";
echo"</span>";
echo"Delete"."</button>";

echo"<div style='overflow-x:auto;'><table border='1' class='table table-bordered table-hover' style='width:100%'>";
echo"<th class='w3-teal text-center'>Delete</th><th class='w3-teal text-center'>".$colname[0]->name."</th><th class='w3-teal text-center'>".$colname[1]->name."</th><th class='w3-teal text-center'>".$colname[2]->name."</th><th class='w3-teal text-center'>".$colname[3]->name."</th><th class='w3-teal text-center'>".$colname[4]->name."</th><th class='w3-teal text-center'>".$colname[5]->name."</th>";

while($row=mysqli_fetch_array($res))
{?>
<tr><td><div class="checkbox checkbox-info checkbox-circle">
<?php
echo"<input type='checkbox' name='ids[]' id='$row[0]' value='$row[0]' />"."<label for='$row[0]'>"."select for delete"."</label>"."</div>"."<a href='deletequery.php?id=$row[0]' class='btn w3-teal'>"."delete"."</a>"."</td><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td></tr>";

	
}
 echo"</table></div>";
 echo"</form>";
}
?>
