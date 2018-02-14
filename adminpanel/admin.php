<?php include("chksession.php");?>
<?php include("../lib.php");?>
<?php include("navadmin.php");

$file="temp.php";
$file2=$file;?>
<script>

function showUser() {
 var x = document.forms["create"]["file"].value;
var y = document.forms["create"]["pfileaddr"].value;
var z = document.forms["create"]["innertoouter"].value;
document.getElementById("hiddenfile").value=x;
document.getElementById("koko").href=x;
  if (x==""&&y==""&&z=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("POST","create.php?file="+x+"&pfileaddr="+y+"&innertoouter="+z,true);
  xmlhttp.send();
}

</script>
<?php if (isset($_GET['file']))
{
	$file=$_GET['file'];

}?>
<div class="container-fluid">
	<div class="row">
    	<div class="col-lg-8  w3-rightbar  w3-border-blue">
        <form id="myform" action="update.php" method="post" class="form-group-lg"  >
        <?php $myfile = fopen($file,"r");?>
        <textarea id="txtHint" style="width:100%; height:400px;resize:none"  name="fileheading" class="w3-white"  >
<?php while(! feof($myfile))
  {
  echo fgets($myfile);
  }fclose($myfile);
?>

        </textarea>
        <input type="hidden" value="<?php echo $file;?>" id="hiddenfile" name="no">
        <input type="submit" class="btn w3-teal" id="update"  value="update">&nbsp;
      	  <a href="<?php echo $file;?>" id="koko" class="btn w3-teal">Preview</a>
        </form>
      
        </div>

        <div class="col-lg-4 w3-padding-16">
        	<form  name="create"class="form-group-lg"  >
            <label>Create New File or Open File</label>
            <br><label>name of file</label><input class="form-control" value="<?php echo $file;?>" type="text" name="file"><br>
            <label>parent address</label><input class="form-control" type="text" name="pfileaddr"><br>
            <label>inner to outer folder address</label><input class="form-control" type="text" name="innertoouter"><br>
            <input type="button" class="btn w3-teal" onclick="showUser()" value="create"  >
            </form>
           
         </div> 
     
        </div>
    </div>
</div>
