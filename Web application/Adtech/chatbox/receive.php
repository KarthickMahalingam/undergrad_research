<?php
try{
$lastreceived=$_POST['lastreceived'];
$room_file=file("room1.txt",FILE_IGNORE_NEW_LINES);
for($line=0;$line<count($room_file);$line++){
$messageArr=explode("<!@!>",$room_file[$line]);
if(!isset($messageArr)){
$messageArr=null;
}
if($messageArr[0]>$lastreceived)echo $messageArr[1]."<br>";
}
//echo "<div class=\"jspPane\" style=\"padding: 0px; top: 0px; width: 350px;\">";
//echo "<div class=\"chat\">";
echo "<SRVTM>".$messageArr[0];
}
catch(Exception $e)
{
echo "";
}
?>

