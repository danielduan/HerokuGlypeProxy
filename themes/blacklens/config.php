<?php


defined("siteSKIN") or define("siteSKIN",$CONFIG['theme']);
defined("siteNAME") or define("siteNAME",$themeReplace['site_name']="glype website");
defined("optURL") or define("optURL",GLYPE_URL);

$_site_name=$themeReplace['site_name'];
$_site_url=optURL;

#********************************
#     Index page Meta tags
#********************************
    
$themeReplace['index_meta_description']='Glype PHP proxy for circumventing filtered or blocked internet access';
$themeReplace['index_meta_keywords']='glype php proxy filtered blocked internet youtube facebook myspace';


#********************************
#       Index page content
#********************************

#Main heading of the site. Appears on the top left corner.
#You can use inline spans to color parts of the heading differently.
#For example <span id="pink">net</span> will display net in pink.
#Possible span ids are black or pink.
#The default color is blue. 

$themeReplace['index_h1']="circumvent<span id=\"pink\">.us</span>";

#second largest heading. Appears in grey below the h1 heading
$themeReplace['index_h2']="powered by glype";

#This theme has a dark blue horizontal navigation bar at the top of the 
#page. You can use it for links to other portions of your site or 
#adsense ad links
$themeReplace['index_nav']=<<<OUT

<!--
<a href="http://www.primeunblocker.com" title="unblocker">Unblocker</a>
<a href="http://www.greenunblocker.com" title="unblock websites">Unblock websites</a>
-->

OUT;
  
#A heading for the main description of the site. Its an
# h3 tag.
$themeReplace['index_description_heading']="circumvent.us";

# Site description above the form and ad location
$themeReplace['index_description'] = <<<OUT

<!--Customize site description here-->
<p>Enjoy unrestricted and uncensored ad-free browsing through this proxy. You make a request via our site, we fetch the resource and send it back to you.</p>
   <p>This service is provided to you free of charge by <a href="http://www.danielduan.net">Daniel Duan</a>. As you may know, this is an expensive service to maintain so donations are highly appreciated to help cover server and maintenance fees.</p>

<center>
<p>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</p>
</center>

<!--End site description-->
OUT;

# Ad location above the form on the index page
$themeReplace['index_above_form'] = <<<OUT


OUT;


# Ad location below the form on the index page
$themeReplace['index_below_form'] = <<<OUT


OUT;

#Left sidebar of the theme. 
$themeReplace['index_sidebar']=<<<OUT

<!--enter code for the Left sidebar-->
<!--example links-->
<h3>Other unblockers </h3>
<ul>
	<li>
		<a href="http://www.sharpunblocker.com" title="unblocker">unblocker</a>
	</li>
	<li>
		<a href="http://www.clickunblock.com" title="unblock websites">Unblock websites</a>
	</li>
		
	<li>
		<a href="http://www.fununblocker.com" title="unblocker">unblocker </a>
	</li>
	
	
</ul>
<!--end Left sidebar -->
OUT;


# Add text to the footer below. 
# For ex: custom links or web statistics code 
$themeReplace['index_footer']=<<<OUT
<center>
<!-- Start of StatCounter Code -->
<script type="text/javascript">
var sc_project=5834155; 
var sc_invisible=0; 
var sc_security="9174d3cf"; 
</script>

<script type="text/javascript"
src="http://www.statcounter.com/counter/counter.js"></script><noscript><div
class="statcounter"><a title="godaddy hit counter"
href="http://www.statcounter.com/godaddy_website_tonight/"
target="_blank"><img class="statcounter"
src="http://c.statcounter.com/5834155/0/9174d3cf/0/"
alt="godaddy hit counter" ></a></div></noscript>
<!-- End of StatCounter Code --><br/>
<p><a
href="http://my.statcounter.com/project/standard/stats.php?project_id=5834155&amp;guest=1">View
My Stats</a></p>

</center>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-15725680-3");
pageTracker._trackPageview();
} catch(err) {}</script>

OUT;

#************************************
#          Proxified Page
#************************************

# Location on proxified pages just below the url mini-form.
# It will show as a PART of the form (grey background). 
# For ads use the next variable $themeReplace['proxified_below_form'] 
$themeReplace['proxified_within_form'] =<<<OUT
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-15725680-3");
pageTracker._trackPageview();
} catch(err) {}</script>
OUT;


#Ad location below the form on proxified pages. It appears as part of
# the proxified page and not the mini-form.
#Ideal for ads.
$themeReplace['proxified_below_form']  = <<<OUT


OUT;

