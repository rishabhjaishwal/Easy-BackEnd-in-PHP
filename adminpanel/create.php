<?php include("connect.php");
$file = intval($_GET['file']);
$addr1 = intval($_GET['pfileaddr']);
$addr2 = intval($_GET['innertoouter']);
?>
<?php if (isset($_GET['file']))
{
	$file=$_GET['file'];
	$addr1=$_GET['pfileaddr'];
	$addr2=$_GET['innertoouter'];
//$file=$file.".php";

}?>

<?php $check=file_exists($file);
$myfile = fopen($file, "a+") or die("Unable to open file!");
fclose($myfile);
if(1!=$check)
{
	$res1=mysqli_query($con,"select filename from fileaddress where filename='$file'") or die(mysqli_error($con));
	if(mysqli_affected_rows($con)>0)
	{$res=mysqli_query($con,"update fileaddress set parentfolderaddr='$addr1',outertoinneraddr='$addr2',modified_date=now() where filename='$file'") or die(mysqli_error($con));}
	else
$res=mysqli_query($con,"insert into fileaddress (filename,samefoldaddr,parentfolderaddr,outertoinneraddr,modified_date)values('$file','$file','$addr1','$addr2',now())") or die(mysqli_error($con));}
else
{$res1=mysqli_query($con,"select filename from fileaddress where filename='$file'") or die(mysqli_error($con));
	if(mysqli_affected_rows($con)>0)
	{$res=mysqli_query($con,"update fileaddress set parentfolderaddr='$addr1',outertoinneraddr='$addr2',modified_date=now() where filename='$file'") or die(mysqli_error($con));}
	else
$res=mysqli_query($con,"insert into fileaddress (filename,samefoldaddr,parentfolderaddr,outertoinneraddr,modified_date)values('$file','$file','$addr1','$addr2',now())") or die(mysqli_error($con));}
?>

<?php
$myfile = fopen($file, "r") or die("Unable to open file!");

while(!feof($myfile)) {
  echo fgets($myfile);
}
fclose($myfile);
?>