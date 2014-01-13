<?php
$themeReplace['site_name']="Free Glype Themes";  
  
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
    
$themeReplace['index_meta_description']="Free Glype Themes";

$themeReplace['index_meta_keywords']="Free Glype Themes";

#********************************
#       Index page content
#********************************

#Slogan or tag line of the site. Appears at the top left of the page
#in white.

$themeReplace['index_site_slogan']="Don't Block Me, Bro";
  

#Main heading of the site. Appears on the top left corner.
$themeReplace['index_main_heading']="Free Glype Themes";


#A heading for the main description of the site. Its an
# h1 tag.
$themeReplace['index_description_heading']="Don't Block Me, Bro!";

# Site description above the form and ad location
$themeReplace['index_description'] = <<<OUT
<!--Customize site description here-->
<p>Bro, we hide your IP address so you can visit just about any website you want to without leaving a trace. Banned 
	from your favorite message board? No problem brotato, we can help you get around that. You can also use 
	bropass.com to get around annoying school and work filters.
</p>
	<p>
	We make it easy for you. No more wasting time downloading and installing software that may or may not work. BroPass.com 
	gets the job done fast and easy. Besides, you need the extra time for more important things like getting bronzed, practicing 
	your delt smash and bromancing the ladies, amirite?
	</p>

<!--End site description-->
OUT;

# Ad location sub nav on the index page
$themeReplace['index_sub_nav'] = <<<OUT
<!--ADD Adsense below here-->

<script type="text/javascript"><!--
google_ad_client = "pub-9691539711575986";
/* 468x15, created 1/29/09 */
google_ad_slot = "8015319352";
google_ad_width = 468;
google_ad_height = 15;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>	
<!--END adsense code-->
OUT;

# Ad location above the form on the index page
$themeReplace['index_above_form'] = <<<OUT
<!--ADD Adsense below here-->

<script type="text/javascript"><!--
google_ad_client = "pub-9691539711575986";
/* 468x15, created 2/13/09 */
google_ad_slot = "1504834118";
google_ad_width = 468;
google_ad_height = 15;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<!--END adsense code-->
OUT;


# Ad location location below the form on the index page
$themeReplace['index_below_form'] = <<<OUT
<!--ADD Adsense below here-->
<script type="text/javascript"><!--
google_ad_client = "pub-9691539711575986";
/* 468x60, created 2/13/09 */
google_ad_slot = "1989031215";
google_ad_width = 468;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
	
<!--END adsense code-->
OUT;

# Ad location above the footer on the index page
$themeReplace['index_above_footer'] = <<<OUT
<!--ADD Adsense below here-->
<center>

</center>
<br />

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

<!--end proxified within form-->
OUT;

#Ad location below the form on proxified pages. It appears as part of
# the proxified page and not the mini-form.
#Ideal for ads.
$themeReplace['proxified_below_form']  = <<<OUT
<!--proxified below form-->
<center> 
<!-- Begin Publisher Code for otmp3.com -->
<script type="text/javascript" language="javascript">
adlsi9 = "efe2a5ee5cf61318d75c8aec6f6552bf79|97379|9715"
</script>
<script src="http://www.adversalservers.com/publisherJS.js"></script>
<script type="text/javascript" language="javascript">
goAdversal("efe2a5ee5cf61318d75c8aec6f6552bf", 3, 15);
</script>
<!-- End Publisher Code -->
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