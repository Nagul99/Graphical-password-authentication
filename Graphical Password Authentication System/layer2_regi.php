<?php
session_start();
ob_start();
?>

<html>
<head>

<script>
function changeIt(img)
{
var name = img.src;
window.location.href = "layer3_regi.php?var=" + name;
}
</script>

<title>
Layer 2!
</title>
</head>

<?php
echo '<body bgcolor="#333333" text="#FFFFFF" marginwidth="45"> <br><center><b><font face="calibri" color="red" size=8>Graph</font><font face="calibri" size ="8">ical Password Authentication System</font></b></center>
</a><hr color="#CC0000">
<center><h4>Image Layer 2/5<br><font color="orange">Complete all the layers to complete your registration !</font><br><br>
Choose your Image ::<br><br>';
?>

<?php
	
        $var=$_GET['var'];
		$_SESSION['a'][6]=$_GET['var'];	
		$_SESSION['layer1']=$_GET['var'];

$ar[0]="wood.";
$ar[1]="edu.";
$ar[2]="bit.";
$ar[3]="two.";
$ar[4]="virus.";
shuffle($ar);

echo '<center>';
for($i=0;$i<=4;$i++)
echo '<img src="images\\'.$ar[$i].'jpg" onclick="changeIt(this)" height="120" width="120"> ';
echo '</center>
</body>';
echo '<br><footer><br><br><br><br><br><br><br><br><br><br><br></footer>';			
?>

</body>
</html>