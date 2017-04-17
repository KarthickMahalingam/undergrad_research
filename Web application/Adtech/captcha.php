<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<title>
</title>
<head>
<link rel="stylesheet" href="css/captchas.css" />
</head>
<body>

<div style="margin-bottom: 19px; position: relative; clear: both";>
<div class="confidentcaptcha_shield" style="display: block;"> 


<?php
$dir = fopen("captcha/captchaname.txt", "r");
$iname=array();
$msg='';
$i=0;
while (!feof($dir)) {
	
	 $arrM = fgets($dir);
	 $iname[$i]=$arrM;  
	 $i++;
}

?>

<?php
$num=array();

for($i=0;$i<20;$i++)
{
	$num [$i]=rand(1,40);
	
}

$temp=array();


for($i=0;$i<20;$i++)
{
	$temp[$num[$i]]=$num[$i];
}
$images=array_values($temp);
//print_r($images);
$temp=array();
for($i=0;$i<9;$i++)
{
	$temp[$i]=$images[$i];	
}
//print_r($temp);
shuffle($temp);
$ifname=array();
for($i=0;$i<4;$i++)
{
	$ifname[$i]=$temp[$i];
}

//print_r($ifname);
$finalname=array();
?>
<?php
for($i=0;$i<4;$i++)
{
	$finalname[$i]=$iname[$ifname[$i]-1];
}
//print_r($finalname);

?>
<th align="center">Click on the Following images</th>
<table height="41" border="0" style="width:300px">

<tr>
  <td>1. <?php print_r ($finalname[0]) ?></td>
  <td>2. <?php print_r ($finalname[1]) ?></td> 
  
</tr>
<tr>
  <td>3. <?php print_r ($finalname[2]) ?></td>
  <td>4. <?php print_r ($finalname[3]) ?></td> 
  
</tr>
</table>

<?php
session_start();
$_SESSION['varname'] = $ifname;

for($i=0;$i<9;$i++)
{   print "<div >";

for($j=$i;$j<9;$j++)
{

echo "<a href=\"#! \" img id=$images[$i]><input type=\"hidden\" name=\"image\" value=\"$images[$i]\" ><img  src=\"captcha/$images[$i].png\"   onclick=\"pc($images[$i])\";return false;\" width=\"110\" height=\"91\" />";
echo "<div class=\"confidentcaptcha_image_highlight\" style=\"display: none;\"></div>";

 $i++;
}

print "</div>";

}
 ?>
<script>

var originalimage=new Array();
<?php 
    for ($i=0; $i < count($ifname); $i++) 
	{ 
        echo "originalimage[$i] = '" . $ifname[$i] . "';"; 
    } 
?>
//alert(originalimage);
var iclicked=new Array(); 
var i=0;
function pc(id){
    iclicked[i]=id;
  if(i==3)
  {
	  checkform();
	// alert(iclicked)
 }
  i++; 
    }
	
function checkform()
{
	var count=0;;
	for(var i=0;i<4;i++)
	{
		if(iclicked[i]!=originalimage[i])
		{
			count=0;
						document.getElementById("captcha_result").value = "false";
		}
		else
		{
			count=1;
			document.getElementById("captcha_result").value = "true";
		}
		
	}
	if(count==0)
	{
		alert("invalid captcha")
		//$msg = 'Error. No match found !';

		document.getElementById("captcha_result").value = "false";
		window.location="login.php"	
		
	}
	else
	{
		//alert("Success");
		document.getElementById("captcha_result").value = "true";
	}
	
}
	
	</script>
  
</body>
</html>