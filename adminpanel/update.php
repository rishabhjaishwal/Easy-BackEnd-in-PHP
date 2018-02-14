<?php include("../lib.php");?>
<?php include("navadmin.php");
extract($_REQUEST);
$myfile = fopen($no, "w") or die("Unable to open file!");
fwrite($myfile, $fileheading);
fclose($myfile);
?>
<?php echo "<script>alert('Your page is successfully updated and now you are redirected to admin Home page');
window.location='admin.php?file=$no'</script>"?>;
