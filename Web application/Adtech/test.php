
<?php 
/*if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) 
	ob_start("ob_gzhandler"); 
else 
	ob_start(); */
?>
<?php

ob_start();
$GLOBALS['THRIFT_ROOT'] = 'gen-php/detailser/src';
require_once $GLOBALS['THRIFT_ROOT'].'/Thrift.php';

require_once 'gen-php/detailser/Types.php';
$u=new User();
$host="localhost";  
$username="root"; 
$password=""; 

$db_name="adtech"; 
$tbl_name="adtechdb";
// Connect to server and select databse.
mysql_connect($host, $username, $password) or die(mysql_error());
//echo "Connected to MySQL<br />";
mysql_select_db($db_name) or die(mysql_error());
//echo "Connected to Database<br />";
$username=$username = @mysql_real_escape_string($_POST['username']); 
$password=@mysql_real_escape_string($_POST['pwd']);
//echo "$username";
//echo "$password";

// To protect MySQL injection 
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$passwords=md5($password);
//$u=new User();
$u->username=$username;
$u->password=$passwords;
$sql="SELECT * FROM $tbl_name WHERE username='$username'";
$result=mysql_query($sql);
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
$user=$u->getName();
//echo $user;
$rw = mysql_fetch_array($result);
if($rw["url"]=="admin.php")
{
	$url="admin.php";
}
else if( $rw["url"]=="user.php")
{
	$url="user.php";
}

if($rw["password"]!=$passwords){
	header("Location: login.php");
die('Acces denied'); // .. or something
 $_SESSION['errormsg'] = "login failed";
 
}
else{
	echo'<script language="javascript">window.location.href="index.php";</script>';
}
 //If result matched $username and $password, table row must be 1 row
 ?>
 <?php
if ($count==1) {
    echo "Success! $count";
	session_start();
	$_SESSION['userid']= $rw["userid"];
	echo $_SESSION['userid'];
	$_SESSION['url'];
	$_SESSION['name']= $username;
	header("Location: $url");
	serialize(session_encode());
	
} 
else {
	echo "Invalid UserName/Password";
	 $_SESSION['errormsg'] = "login failed";
 header("Location: login.php");
 
}

ob_end_flush();
?>