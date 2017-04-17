<?php 
/*if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) 
	ob_start("ob_gzhandler"); 
else 
	ob_start(); */
?>
<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['userid']))
{
	//$url=$_SESSION['url'];
	//print_r( $_SESSION['userid']);
	//if($url!==""){
//header("Location: $url");
	//}
 
}

?>
<html>

<head>
<title>ChatRoom</title>
<link rel="stylesheet" type="text/css" href="cb_style.css">

<script type="text/javascript" src="ajax.js"></script>
<script type="text/javascript" src="chatbox.js"></script>

</head>

<body onbeforeunload="signInForm.signInButt.name='signOut';signInOut()" onLoad="hideShow('hide')">
<?php
/*$file = fopen("onlineusers.txt","rw");
$contents=file_get_contents("onlineusers.txt");
echo $contents;
$len=strpos($contents,$_SESSION['name'] );
$finalwrd=str_replace($_SESSION['name'],"",$contents);
echo $finalwrd;
fwrite($file,$finalwrd);*/
?>

<form onSubmit="signInOut();return false" id="signInForm">
	<input id="userName" type="text"  value= "<?php echo $_SESSION['name']; ?>">
	<input id="signInButt" name="signIn" type="submit" value="Sign in" data-modal="modal">
	
    <script>
	
 var myButton = document.getElementById('signInButt');
   myButton.click();
  // document.getElementById(main zerogrid).scrollTop = 0;

	</script>
	<span id="signInName">User name</span>
	</form>

	<div id="chatBox"></div>
	<div id="usersOnLine"></div>
	<form onSubmit="sendMessage();return false" id="messageForm">
		<input id="message" type="text">
		<input id="send" type="submit" value="Send">
<div id="serverRes"></div></form>
</body>


</body>
</html>
