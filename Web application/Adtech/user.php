<?php 
/*if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) 
	ob_start("ob_gzhandler"); 
else 
	ob_start(); */
?>
<!DOCTYPE html>
<?php
session_start();
//unserialize(session_decode($env));
if(!isset($_SESSION['userid']))
{
	$url=$_SESSION['url'];
	//print_r( $_SESSION['userid']);
header("Location: $url");
}
?>
<html lang="en">
<head>
  <title>AD-Tech</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="css/styledes.css" type="text/css">
  <link rel="stylesheet" href="css/zerogrid.css">
  <link rel="stylesheet" href="css/responsive.css">
  <script type="text/javascript" src="js/jquery-1.5.2.js" ></script>
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
<?php
session_start();
//echo $_SESSION['name'];

?>
function error(){
	alert("Already LoggedIn");
}
</script>

<style>
div.ex
{
width:620px;
padding:40px;
border:5px solid #0ca0ce;
margin:60px;
}
</style>
</head>

<body>
<header>
				<!--<h1><a href="#page_1">ADTech</a></h1>-->
				<nav>
					<ul class="access">
						<li><a href="#">Hi <a href="#"> <?php echo $_SESSION['name']; ?></a></li>
						<li><a href="logout.php">Logout</a></li></li>
						<!--<li ><a href="#"></a></li>-->
						
					</ul>
				</nav>
			</header>
<div class="header">
<div class="extra">
	<div id="page_1">
    
    
		<div class="main zerogrid">
			<!--header -->
		
				<!--<h1><a href="#page_1">ADTech</a></h1>-->
				
			
			<header>
            	
				<a href="user.php" id="logo">Technology Quick. Smart. Effective</a>
				<nav>
					<ul id="menu">
						<li class="nav1"><a href="logout.php" ">Logout</a></li>
						<li class="nav2"><a href="#page_3">Share</a></li>
						<li class="nav3"><a href="#page_4">CView</a></li>
						<li class="nav4"><a href="#page_5">ChatRoom</a></li>
						<li class="nav5"><a href="#page_6">Contacts</a></li>
					</ul>
				</nav>
			</header>
			<!--header end-->
			
		</div>
		<div class="block"></div>
	</div>
</div>
	<div class="main zerogrid">
			<!--footer -->
			<footer>
				<ul class="icons">
                	<?php echo $_SESSION['userid'];?>
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

<div class="extra">
	<div id="page_3">
		<div class="main zerogrid">
			<!--header -->
			<header>
				<h1><a href="#page_1">ADTech</a></h1>
				<nav>
					<ul class="menu">
						
						<li class="active"><a href="#page_3">Share</a></li>
						<li><a href="#page_4">ClientView</a></li>
						<li><a href="#page_5">ChatRoom</a></li>
						<li><a href="#page_6">Contacts</a></li>
					</ul>
				</nav>
			</header>
			<!--header end-->
			<!--content -->
			<section class="content">
			  <p>&nbsp;</p>
			  <p>&nbsp;</p>
<h3>
<div align="justify">1 Please wait until the admin directs you to download the drivers. The download will work once the admin uploads the drivers files.</div></h3>
<div align="center"><br>
  <?php
			
			$myFile = "downloadfile.txt";
			$fh = fopen($myFile, 'r');
			$theData = fread($fh, filesize($myFile));
			fclose($fh);
			//echo $theData;
			 
			
              echo " <input type =\"button\" align=\"center\" name=\"Download\" value=\"Download\" class=\"classname1\" onClick=\"window.location.href='$theData '\">";
				?>
</div>
          </div>
            </section>
			<!--content end-->
            
		</div>
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
<div class="extra">
	<div id="page_4">
	  <div class="main zerogrid">
			
			<header>
      <h1>
      <a href="#page_1"> 
      <cufontext>
    AD-Tech
</cufontext>        </cufon>
    </a>

</h1>
			 
				<nav>
					<div align="justify">
					  <ul class="menu">
					   
					    <li><a href="#page_3">Share</a></li>
					    <li class="active"><a href="#page_4">CView</a></li>
					    <li><a href="#page_5">ChatRoom</a></li>
					    <li><a href="#page_6">Contacts</a></li>
				      </ul>
				  </div>
				</nav>
		</header>
			<div align="justify">
			  <!--header end-->
			  <!--content -->
			  <section class="content">
			  <br>
			  
		  </div>
			<h1 align="justify">To enable us to establish Remote Desktop Connection ,Please follow:</h1>
           <h3>1 Download the following plugin <a href="ThinVNC_Latest.gz"> AdTech ClientView</a></h3>
           <h3>2 Double click on ThinVnc application</h3>
            <h3>3 Start the Server</h3><br>
             <center>
<div style="font-family:verdana;padding:100px;border-radius:10px;border:7px solid green; left:10px;width:300px;height:330px;">
  <br>
  IP Address :
    <input type="text" class="inputsh" id="ipaddress" name="ipaddress"/><br><br>
    Port Number:
  <input type="text" id="portno" class="inputsh" name="portno" style="height:20 px;"/><br><br>
  <input type="submit" name="Submit" value="Connect" class="input" onclick="load();"/>
  </div>

</div>
</center>
<script langugae="javascript">

   function load()

   {
   
//  alert(document.getElementById('ipaddress').value);
  // alert(document.getElementById('portno').value);
	var url= "http://"+document.getElementById('ipaddress').value + ":" + document.getElementById('portno').value;
	window.open(url, '_blank')
   }

  </script>
			<!--content end--
			
			</section>
			<!--content end-->
  </div>
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
<div class="extra">
	<div id="page_5">
		<div class="main zerogrid">
			<!--header -->
			<header>
				<h1><a href="#page_1">ADTech</a></h1>
				<nav>
					<ul class="menu">
						
						<li><a href="#page_3">Share</a></li>
						<li><a href="#page_4">CView</a></li>
						<li class="active"><a href="#page_5">ChatRoom</a></li>
						<li><a href="#page_6">Contacts</a></li>
					</ul>
				</nav>
			</header>
			<!--header end-->
			<!--content --><!--content end-->
		</div>
	</div>

<div align="center">
        <script language="JavaScript">
  <!--
  function autoResize(id){
    var newheight;
    var newwidth;

    if(document.getElementById){
        newheight=document.getElementById(id).contentWindow.document .body.scrollHeight;
        newwidth=document.getElementById(id).contentWindow.document .body.scrollWidth;
    }

    document.getElementById(id).height= (newheight) + "px";
    document.getElementById(id).width= (newwidth) + "px";
}
//-->
</script>
&nbsp;

<div class="ex" align="right">

<IFRAME SRC="chatbox/index1.php" display="block;" width="100%" height="300px" id="iframe1" marginheight="0" frameborder="0" onLoad="autoResize('iframe1');"></iframe>
    
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
<div class="extra2">
	<div id="page_6">
		<div class="main zerogrid">
			<!--header -->
			<header>
				<h1><a href="#page_1">ADTech></h1>
				<nav>
					<ul class="menu">
						
						<li><a href="#page_3">Share</a></li>
						<li><a href="#page_4">CView</a></li>
						<li><a href="#page_5">ChatRoom</a></li>
						<li class="active"><a href="#page_6">Contacts</a></li>
					</ul>
				</nav>
			</header>
			<!--header end-->
			<!--content -->
			<section class="content">
				<article class="col-1-3">
					<h2>Information</h2>
					<p>The various services given above are the ones that are provided by AD-Tech client service providing software. In case of any further necessities or further information,  please do contact us and we will be more than happy to help.</p>
					<p>Please do fill in the Contact Form in order for us to help you in any case. If needed, you are most welcome to contact us at the given information .</p>
        		</article>
				<article class="col-1-3">
					<h2>Contact Form</h2>
					<form id="ContactForm" method="post">
							<div>
								<div class="wrapper"><input class="input" type="text" value="Name:"  onblur="if(this.value=='') this.value='Name:'" onFocus="if(this.value =='Name:' ) this.value=''" ></div>
								<div class="wrapper"><input class="input" type="text" value="Email:"  onblur="if(this.value=='') this.value='Email:'" onFocus="if(this.value =='Email:' ) this.value=''" ></div>
								<div class="wrapper"><input class="input" type="text" value="Fax:"  onblur="if(this.value=='') this.value='Fax:'" onFocus="if(this.value =='Fax:' ) this.value=''"></div>
								<div class="textarea_box"><textarea cols="1" rows="1" onBlur="if(this.value=='') this.value='Message:'" onFocus="if(this.value =='Message:' ) this.value=''"  >Message:</textarea></div>
								<a href="javascript:" class="button" onClick="document.getElementById('ContactForm').reset()">clear</a>
								<a href="javascript:" class="button" onClick="document.getElementById('ContactForm').submit()">send</a>
							</div>
					</form>
        		</article>
				<article class="col-1-3">
					<h2>Our Details</h2>
					<p>     Ad-Tech Sofware,<br>
							SASTRA University, <br>Thanjavur.</p>
					<p> <span class="right">7845238117</span><strong class="color1">Freephone:</strong><br>
						<span class="right">9894140641</span><strong class="color1">Telephone:</strong><br>
						
						<span class="right"><a href="mailto:">adtech@sastra.ac.in</a></span>	<strong class="color1">E-mail:</strong></p>
        		</article>
			</section>
			<!--content end-->
		</div>
		<div class="block2"></div>
	</div>
</div>
	<div class="main zerogrid">
			<!--footer -->
			<footer class="footer_end">
				<div class="wrapper">
					<ul class="icons">
						<li><a href="#" class="normaltip" title="Facebook"><img src="images/icon1.jpg" alt=""></a></li>
						<li><a href="#" class="normaltip" title="Delicious"><img src="images/icon2.jpg" alt=""></a></li>
						<li><a href="#" class="normaltip" title="Stumble Upon"><img src="images/icon3.jpg" alt=""></a></li>
						<li><a href="#" class="normaltip" title="Twitter"><img src="images/icon4.jpg" alt=""></a></li>
						<li><a href="#" class="normaltip" title="Linkedin"><img src="images/icon5.jpg" alt=""></a></li>
						<li><a href="#" class="normaltip" title="Reddit"><img src="images/icon6.jpg" alt=""></a></li>
					</ul>
				</div>
			
			</footer>
			<!--footer end-->
	</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>