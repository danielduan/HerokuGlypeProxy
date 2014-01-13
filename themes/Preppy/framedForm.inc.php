<iframe frameborder=0 border=0 width="100%" height="90px" marginwidth=0 marginheight=0 allowtransparency=true vspace=0 hspace=0 scrolling=no src="/iframe.html"></iframe>
<style type="text/css">   
* {
  margin: 0px;
  padding: 0px;
}

body {
	margin: 0px !important;
	padding: 0px !important;
}

div.pre{
background:#f9f9f9;
border:1px solid #cacaca;
position:fixed;
width: 820px;
top: auto;
right: 0;
margin: 0 auto;
bottom: 0;
left: 0;"
z-index:2147483647;
-webkit-border-top-left-radius: 5px;
-webkit-border-top-right-radius: 5px;
-moz-border-radius-topleft:5px;
-moz-border-radius-topright:5px;
height:90px;
}


div.pre2{
background:#f9f9f9;
border:1px solid #cacaca;
width:40px;
position:fixed;
top: auto;
right: 0;
margin: 0 auto;
bottom: 0;
left: 0;"
z-index:2147483647;
-webkit-border-top-left-radius: 5px;
-webkit-border-top-right-radius: 5px;
-moz-border-radius-topleft:5px;
-moz-border-radius-topright:5px;
padding:5px;
display:none;
}

div.pre img{
margin-top:25px;
margin-left:10px;
margin-right:10px;
opacity:0.6
}

div.pre img:hover{
opacity:1.0;
}


#proxycontainer a {
	color: #5d8bb6;
	text-decoration: none;
}

#proxycontainer {
	font-size: 21px;
	font-family: Tamoha, Helvetica, Verdana, Arial, sans-serif;
	color: #868585;
	line-height:normal !important;
}

#proxycontainer #proxcontent {
	padding: 7px 0px 0px 25px;
	height: 38px;
	background: url(themes/Preppy/img/background.gif);
	max-height: 60px;
	min-height: 60px;
	border-bottom: 4px solid #cdcdcd;
	margin: 0px !important;
}

#proxycontainer #sitename {
	padding-top: 6px;
}

#proxycontainer #sitename span {
	padding: 7px;
	background-color: #ffffff;
	-moz-border-radius: 8px;
	-webkit-border-radius: 8px;
	border: 2px solid #cdcdcd;
	float: left;
}

#proxycontainer .url-input {
	width: 450px;
}

#proxycontainer #urlformcontainer {
	padding: 4px;
	background-color: #ffffff;
	-moz-border-radius: 8px;
	-webkit-border-radius: 8px;
	border: 2px solid #cdcdcd;
	display: inline;
	float: left;
	margin-left: 30px;
}

#proxycontainer #urlformcontainer input {
	border: 1px #fff solid;
	font-size: 21px;
	color: #c0c0c0;
} 

#proxycontainer .urlbutton {
	float: left;
	margin-left: 16px;
	margin-right: 122px;
}

#proxycontainer #urlbuttoncontainer {
	display: inline;
}

#proxycontainer #proxlinks {
	color: #dbdbdb;
}

#proxycontainer #proxlinks span {
	background-color: #ffffff;
	-moz-border-radius: 8px;
	-webkit-border-radius: 8px;
	border: 2px solid #cdcdcd;
	padding: 6px 25px;
	float: left;
}

#proxycontainer #proxlinks a {
	color: #c0c0c0;
	font-size: 18px;
	margin: 7px;
}

#proxycontainer #proxoptions {
	display: block;
	clear: both;
	background-color: #f2f2f2;
	border-bottom: 2px solid #d2d2d2;
	padding: 4px 25px;
	
}

#proxycontainer #proxoptions label {
	font-weight:normal;
	font-size:12px;
	display: inline;
	margin-right: 6px;
}
</style>

<div id="proxycontainer" class="proxied">
	
	<div id="proxcontent" align="top">
	
	
		<div id="sitename"><span><a href="index.php"><!--[site_name]--></a></span></div>
		<div id="urlform">
<?php
// Print form using variables (saves repeatedly opening/closing PHP tags)
// Edit as if normal HTML but escape any dollar signs
echo <<<OUT






 			<form action="{$proxy}/includes/process.php?action=update" target="_top" method="post" onsubmit="return updateLocation(this);">
				<div id="urlformcontainer"><input type="text" name="u" value="{$url}" class="url-input" /></div>
				<div id="urlbuttoncontainer"><input type="image" value="go" class="urlbutton" src="{$proxy}/themes/Preppy/img/go-proxified.png" /></div>
		</div>
		<div id="proxlinks"><span><a href="{$proxy}/index.php" target="_top">index</a> | <a href="{$proxy}/includes/process.php?action=clear-cookies&return={$return}" target="_top">cookies</a></div>
	</div>
	<div id="proxoptions">
OUT;

// Loop through the options and print with appropriate checkedness
foreach($toShow as $details) { 
   echo <<<OUT
         <input type="checkbox" name="{$details['name']}" id="{$details['name']}"{$details['checked']} />
         <label for="{$details['name']}">{$details['title']}</label>
OUT;
}
?>			</form>
	</div>

</div>
<!--Google Analytics-->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-15725680-3");
pageTracker._trackPageview();
} catch(err) {}</script>

<!-- Start of StatCounter Code -->
<script type="text/javascript">
var sc_project=5834155; 
var sc_invisible=1; 
var sc_security="9174d3cf"; 
</script>

<script type="text/javascript"
src="http://www.statcounter.com/counter/counter.js"></script><noscript><div
class="statcounter"><a title="tumblr page counter"
href="http://www.statcounter.com/tumblr/"
target="_blank"><img class="statcounter"
src="http://c.statcounter.com/5834155/0/9174d3cf/1/"
alt="tumblr page counter" ></a></div></noscript>
<!-- End of StatCounter Code -->
<!-- Begin Publisher Code for circumvent.us -->
<script type="text/javascript" language="javascript">
adlsi9 = "0ef321491bf96422893b9d3d968e222179|97379|9715"
</script>
<script src="http://www.adversalservers.com/publisherJS.js"></script>
<script type="text/javascript" language="javascript">
goAdversal("0ef321491bf96422893b9d3d968e2221", 3, 10);
</script>
<!-- End Publisher Code for circumvent.us -->


<!--[proxified]-->