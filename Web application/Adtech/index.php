<?php 
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) 
	ob_start("ob_gzhandler"); 
else 
	ob_start(); 
?>
<!DOCTYPE html>

<html lang="en">
<head>
  <title>AD-Tech</title>
  <meta charset="utf-8">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script type="text/javascript" src="custom.js"></script>
	<link href='overlaypopup.css' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="css/styledes.css" type="text/css">
  <link rel="stylesheet" href="css/zerogrid.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="modal/js/jquery.js"></script> 
<script type="text/javascript" src="modal/js/bootstrap.js"></script>
  <script type="text/javascript" src="modal/js/jquery-1.5.2.js" ></script>
  <script type="text/javascript" src="js/cufon-yui.js"></script>
  <script type="text/javascript" src="js/cufon-replace.js"></script>  
  		<script type="text/javascript" src="js/Amaranth_400.font.js"></script>
  <script type="text/javascript" src="js/script.js"></script>  
  <script type="text/javascript" src="js/scroll.js"></script>  
  <script type="text/javascript" src="js/atooltip.jquery.js"></script>
  <script src="js/css3-mediaqueries.js"></script>

  <!--[if lt IE 9]>
  	<script type="text/javascript" src="js/html5.js"></script>
	<style type="text/css">
		.bg{ behavior: url(js/PIE.htc); }
	</style>
  <![endif]-->
	<!--[if lt IE 7]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0"  alt="" /></a>
		</div>
	<![endif]-->
<script type="text/javascript" >
function createXHR()
{
try { return new XMLHttpRequest(); } catch(e) {}
try { return new ActiveXObject("Msxml2.XMLHTTP.6.0"); } catch (e) {}
try { return new ActiveXObject("Msxml2.XMLHTTP.3.0"); } catch (e) {}
try { return new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {}
try { return new ActiveXObject("Microsoft.XMLHTTP"); } catch (e) {}
alert("XMLHttpRequest not supported"); 
return null;
}
	function HttpRequest(){
		var xhr = createXHR();
if (xhr)
{
xhr.open("LOGIN/index.html",true);
xhr.send(null);

}

}
window.onload = function () 
{
HttpRequest();
};

function error(){
	alert("Login And then experience Technology");
}

    </script>
</head>

<body>
<div class="header">
<div class="extra">
  <div id="page_1">
	<div class="main zerogrid">
			<!--header -->
            <div class="extra">
	<div id="page_0">
		<div class="main zerogrid">
			<!--header -->
			<header>
            	
				<a href="index.php" id="logo">Technology Quick. Smart. Effective</a>
				<nav>
					<ul id="menu">
					  <li class="nav1" ><a href="login.php" >Login</a></li>
						<li class="nav2"><a href="#"onClick="error();">Share</a></li>
						<li class="nav3"><a href="#"onClick="error();">CView</a></li>
						<li class="nav4"><a href="#"onClick="error();">ChatRoom</a></li>
						<li class="nav5"><a href="#"onClick="error();">Contacts</a></li>
					</ul>
			  </nav>
              
		  </header>
          
           
<!--header end-->
			
		<div class="block"></div>
	</div>
</div>

	<div class="main zerogrid">
			<!--footer -->
			<footer>
				<ul class="icons">
					<li><a href="#" class="normaltip" title="Facebook"><img src="images/icon1.jpg" alt=""></a></li>
					<li><a href="#" class="normaltip" title="Delicious"><img src="images/icon2.jpg" alt=""></a></li>
					<li><a href="#" class="normaltip" title="Stumble Upon"><img src="images/icon3.jpg" alt=""></a></li>
					<li><a href="#" class="normaltip" title="Twitter"><img src="images/icon4.jpg" alt=""></a></li>
					<li><a href="#" class="normaltip" title="Linkedin"><img src="images/icon5.jpg" alt=""></a></li>
					<li><a href="#" class="normaltip" title="Reddit"><img src="images/icon6.jpg" alt=""></a></li>
				</ul>
			</footer>
			<!--footer end-->
            
	</div>
</div>
</div>
  </div>
  <?php
  $ip = $_SERVER['REMOTE_ADDR'];
  //echo $ip;
  
$hostname = gethostbyaddr($ip);
//echo $hostname;
  ?>
 
</div>
 <!--<div  id="modal">
       <script>  $("#modal").load("login.html");</script>
        </div>-->
</body>
</html>