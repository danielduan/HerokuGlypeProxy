<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="themes/Preppy/style.css" type="text/css" />
<title><!--[site_name]--></title>
<link rel="shortcut icon" href="themes/Preppy/favicon.ico" type="image/x-icon" /> 
<script language="javascript" type="text/javascript"> 
function toggle() {
	var ele = document.getElementById("options");
	var text = document.getElementById("displayText");
	if(ele.style.display == "block") {
    		ele.style.display = "none";
		text.innerHTML = "show";
  	}
	else {
		ele.style.display = "block";
		text.innerHTML = "hide";
	}
} 
</script>
<?php echo injectionJS(); /* Javascript for redirection direct to proxified pages */ ?>
</head>

<body onload="document.url.u.focus();">
<div id="container">
	<div id="header">
		<h1><a href="index.php"><!--[site_name]--></a></h1><span id="sitedescription">- your gateway to the free internet</span>
	</div>
	<div id="content">
		<div id="mainside">
			<div id="about">
				<!--[error]-->
				<h2>about</h2>
				<!--[description]-->
			</div>
		
			<div id="urlform">
				<h2>url</h2>
				<script type="text/javascript"><!--
					google_ad_client = "pub-9312194861004029";
					/* homepage bottom link ads */
					google_ad_slot = "7462572086";
					google_ad_width = 468;
					google_ad_height = 15;
					//-->
					</script>
					<script type="text/javascript"
					src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
					</script>
        		<form action="includes/process.php?action=update" method="post" onsubmit="return updateLocation(this);" class="form" name="url">
        			<fieldset>
            			<input type="text" name="u" id="input" size="40" value="" class="textbox" />
           				<input type="image" value="go" src="themes/Preppy/img/go.gif" class="button" />
			<script type="text/javascript"><!--
google_ad_client = "pub-9312194861004029";
/* homepage bottom link ads */
google_ad_slot = "7462572086";
google_ad_width = 468;
google_ad_height = 15;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
           				<div id="moreoptions">
							<a href="javascript:toggle();">More Options</a>
   			<ul id="options">
<?php foreach ( $toShow as $option ) echo <<<HTML
               <li>
                  <input type="checkbox" name="{$option['name']}" id="{$option['name']}"{$option['checked']}>
                  <label for="{$option['name']}" class="tooltip" onmouseover="tooltip('{$option['escaped_desc']}')" onmouseout="exit();">{$option['title']}</label>
               </li>
HTML;
?>
            </ul>
						</div>
					</fieldset>
				</form>
			</div>
			
			<div id="bottomad">
			
<!-- Begin: AdBrite, Generated: 2010-06-02 18:54:06  -->
<script type="text/javascript">
var AdBrite_Title_Color = '0000FF';
var AdBrite_Text_Color = '000000';
var AdBrite_Background_Color = 'FFFFFF';
var AdBrite_Border_Color = 'CCCCCC';
var AdBrite_URL_Color = '008000';
try{var AdBrite_Iframe=window.top!=window.self?2:1;var AdBrite_Referrer=document.referrer==''?document.location:document.referrer;AdBrite_Referrer=encodeURIComponent(AdBrite_Referrer);}catch(e){var AdBrite_Iframe='';var AdBrite_Referrer='';}
</script>
<span style="white-space:nowrap;"><script type="text/javascript">document.write(String.fromCharCode(60,83,67,82,73,80,84));document.write(' src="http://ads.adbrite.com/mb/text_group.php?sid=1652014&zs=3436385f3630&ifr='+AdBrite_Iframe+'&ref='+AdBrite_Referrer+'" type="text/javascript">');document.write(String.fromCharCode(60,47,83,67,82,73,80,84,62));</script>
<a target="_top" href="http://www.adbrite.com/mb/commerce/purchase_form.php?opid=1652014&afsid=1"><img src="http://files.adbrite.com/mb/images/adbrite-your-ad-here-banner.gif" style="background-color:#CCCCCC;border:none;padding:0;margin:0;" alt="Your Ad Here" width="11" height="60" border="0" /></a></span>
<!-- End: AdBrite -->
<!-- Begin: AdBrite, Generated: 2010-06-03 0:28:11  -->
<script type="text/javascript">
var AdBrite_Title_Color = '0000FF';
var AdBrite_Text_Color = '000000';
var AdBrite_Background_Color = 'FFFFFF';
var AdBrite_Border_Color = 'CCCCCC';
var AdBrite_URL_Color = '008000';
try{var AdBrite_Iframe=window.top!=window.self?2:1;var AdBrite_Referrer=document.referrer==''?document.location:document.referrer;AdBrite_Referrer=encodeURIComponent(AdBrite_Referrer);}catch(e){var AdBrite_Iframe='';var AdBrite_Referrer='';}
</script>
<span style="white-space:nowrap;"><script type="text/javascript">document.write(String.fromCharCode(60,83,67,82,73,80,84));document.write(' src="http://ads.adbrite.com/mb/text_group.php?sid=1652208&zs=3436385f3630&ifr='+AdBrite_Iframe+'&ref='+AdBrite_Referrer+'" type="text/javascript">');document.write(String.fromCharCode(60,47,83,67,82,73,80,84,62));</script>
<a target="_top" href="http://www.adbrite.com/mb/commerce/purchase_form.php?opid=1652208&afsid=1"><img src="http://files.adbrite.com/mb/images/adbrite-your-ad-here-banner.gif" style="background-color:#CCCCCC;border:none;padding:0;margin:0;" alt="Your Ad Here" width="11" height="60" border="0" /></a></span>
<!-- End: AdBrite -->
			</div>
		</div>
		<div id="largead">
		
			<!--[adsensead]-->
		
		</div>
		<div style="clear:both;"></div>
	</div>
</div>
<div id="footer">
	<p><span>Provided by <a href="http://www.danielduan.net" title="Daniel Duan">Daniel Duan</a> and powered by <a href="http://www.glype.com/">Glype</a></span></p>
</div>
</body>
</html>
<div style="visibility:hidden; height:0px; top:-1;">