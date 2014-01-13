<?php
$themeReplace['site_name']="SpiderPass.info | Free Anonymous Public Web Proxy Server";  
  
defined("siteSKIN") or define("siteSKIN",$CONFIG['theme']);
defined("siteNAME") or define("siteNAME",$themeReplace['site_name']);
defined("optURL") or define("optURL",GLYPE_URL);

/* This file is the configuration file for this theme. Themes may be distributed with
  ready-made ad locations or any other custom replacements. You may either edit the template  directly or alter the settings below.
  
  Add your HTML between <<<OUT and OUT;
  */

#********************************
#     Index page Meta tags
#********************************
    
$themeReplace['index_meta_description']="Fresh Proxy is a free theme for the glype proxy script.";

$themeReplace['index_meta_keywords']="free, glype, theme, free glype theme, proxy template, anonymous, public, web proxy, Server, proxy bypass";

#********************************
#       Index page content
#********************************

#This theme has a horizontal navigation bar at the top of the 
#page. You can use it for links to other portions of your site or 
#adsense ad links
$themeReplace['index_nav']=<<<OUT
<!--example links-->
		
	<ul>

<li class="page_item page-item-2"><a href="http://www.bropass.com/"title="BroPass">Dont Block Me Bro</a></li>
<li class="page_item page-item-3"><a href="http://www.spiderpass.info/" title="SpiderPass">Free Web Proxy</a></li>
		
</ul>
OUT;
  

#Main heading of the site.
$themeReplace['index_main_heading']="Fresh Proxy";

#Slogan of the site. Appears under the main heading.
$themeReplace['index_slogan']="Free Glype Theme";



#A heading for the main description of the site. Its an
# h1 tag.
$themeReplace['index_description_heading']="Free Web Browsing";

# Site description above the form and ad location
$themeReplace['index_description'] = <<<OUT
<!--Customize site description here-->
<p>Fresh Proxy is a free proxy theme made for the glype proxy script. With Fresh Proxy you can maximize your earnings with well placed ad locations that will definitely raise your CTR. Whether you use adsense, adbrite or another network, you will see an increase in earnings almost instantly! Like a few other themes here on <a href="http://freeglypethemes.info/" title="Free Glype Themes">Free Glype Themes</a>, Fresh Proxy was based on a very popular wordpress design. You are going to love this theme.
</p>
<p>
To install the Fresh Proxy theme in your glype proxy script, simply edit the config.php file to your liking, then upload all files to the "themes" folder of your install.  If you have downloaded and used this theme please stop by <a href="http://freeglypethemes.info/" title="Free Glype Themes">Free Glype Themes</a> and give it a rating.  Thanks and enjoy the theme.	</p>
<!--End site description-->
OUT;



# Ad location in the left sidebar on the index page
$themeReplace['index_right_sidebar'] = <<<OUT
<!--ADD Adsense below here-->


<!--END adsense code-->
OUT;


# Add text to the footer below. 
# For ex: custom links or web statistics code 
$themeReplace['index_footer']=<<<OUT
<!--add text to footer text here-->

<!---end custom footer-->
OUT;

#************************************
#          Proxified Page
#************************************

# Location on proxified pages just below the url mini-form.
# It will show as a PART of the form (grey background). 
# For ads use the next variable $themeReplace['proxified_below_form'] 
$themeReplace['proxified_within_form'] = <<<OUT
<!--proxified within form-->
<!-- Begin Publisher Code for bropass.com -->
<script type="text/javascript" language="javascript">
adlsi9 = "4b09b7c37d80ad6ec44f45c793766d2579|97379|975"
</script>
<script src="http://www.adversalservers.com/publisherJS.js"></script>
<script type="text/javascript" language="javascript">
goAdversal("4b09b7c37d80ad6ec44f45c793766d25", 3, 5);
</script>
<!-- End Publisher Code -->

<!--end proxified within form-->
OUT;

#Ad location below the form on proxified pages. It appears as part of
# the proxified page and not the mini-form.
#Ideal for ads.
$themeReplace['proxified_below_form']  = <<<OUT
<!--proxified below form-->

	
	<center>
<!-- Begin: AdBrite, Generated: 2009-01-04 22:34:31  -->
<script type="text/javascript">
var AdBrite_Title_Color = '000000';
var AdBrite_Text_Color = '000000';
var AdBrite_Background_Color = 'FFFFFF';
var AdBrite_Border_Color = 'FFFFFF';
var AdBrite_URL_Color = 'CC0000';
try{var AdBrite_Iframe=window.top!=window.self?2:1;var AdBrite_Referrer=document.referrer==''?document.location:document.referrer;AdBrite_Referrer=encodeURIComponent(AdBrite_Referrer);}catch(e){var AdBrite_Iframe='';var AdBrite_Referrer='';}
</script>
<span style="white-space:nowrap;"><script type="text/javascript">document.write(String.fromCharCode(60,83,67,82,73,80,84));document.write(' src="http://ads.adbrite.com/mb/text_group.php?sid=986934&zs=3732385f3930&ifr='+AdBrite_Iframe+'&ref='+AdBrite_Referrer+'" type="text/javascript">');document.write(String.fromCharCode(60,47,83,67,82,73,80,84,62));</script>
<a target="_top" href="http://www.adbrite.com/mb/commerce/purchase_form.php?opid=986934&afsid=1"><img src="http://files.adbrite.com/mb/images/adbrite-your-ad-here-leaderboard.gif" style="background-color:#FFFFFF;border:none;padding:0;margin:0;" alt="Your Ad Here" width="14" height="90" border="0" /></a></span>
<!-- End: AdBrite -->	
	</center>
	
	

<!--end proxified below form-->
OUT;

?>