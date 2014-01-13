<?php
/*******************************************************************
* Glype is copyright and trademark 2007-2012 UpsideOut, Inc. d/b/a Glype
* and/or its licensors, successors and assigners. All rights reserved.
*
* Use of Glype is subject to the terms of the Software License Agreement.
* http://www.glype.com/license.php
********************************************************************
* This theme configuration file allows easy customization of the
* theme without editing the HTML templates.
*******************************************************************
* Theme: Simple
* Author: Glype
* Website: http://www.glype.com/
******************************************************************/

/*****************************************************************
* Themes can use "theme replacements". These are HTML tags of the format
* <!--[tag_name]--> in the template files. To automatically replace
* these placeholders with other text, use the $themeReplace array.
*  e.g.
* <!--[tag_name]--> will be replaced with the value of $themeReplace['tag_name']
******************************************************************/

// Website name
$themeReplace['site_name'] = 'Unfiltered Browsing';

// Meta description
$themeReplace['meta_description'] = <<<OUT
Proxy to unblock and access blocked websites like YouTube, FaceBook, Twitter, etc.
OUT;

// Meta keywords (separate with comma)
$themeReplace['meta_keywords'] = <<<OUT
proxy, http, website, unblock, get to this, let me see, facebook, youtube, twitter
OUT;

// Proxy description text
$themeReplace['description'] = <<<OUT
   <p>In this day and age of hackers, censorship, online identity theft, people spying and monitoring your online activities, your online privacy has never been so important. Our aim is to provide easy to use services that help protect your online identity and privacy. Our free web proxy is a secure service that allows you to surf anonymously online in complete privacy. Enjoy unrestricted and uncensored ad-free browsing through this proxy. You make a request via our site, we fetch the resource and send it back to you. YouTube, FaceBook, MySpace, Twitter, Daily Motion, xHamster, and many other sites are supported. You can get privacy and security by hiding your IP. This site is provided and maintained by <a href="http://www.danielduan.net">Daniel Duan</a>.</p>

<br>
<div style="text-align:center; width:600px; margin:auto">
<center>
  <div id="clustrmaps-widget"></div>
  <script type="text/javascript">
  var _clustrmaps = {'url' : 'http://www.circumvent.us', 'user' : 747536, 'server' : '3', 'id' : 'clustrmaps-widget', 'version' : 1, 'date' : '2011-10-22', 'lang' : 'en', 'corners' : 'square' };(function (){ var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = 'http://www3.clustrmaps.com/counter/map.js'; var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);})();</script><noscript><a href="http://www3.clustrmaps.com/user/8edb6810"><img src="http://www3.clustrmaps.com/stats/maps-no_clusters/www.circumvent.us-thumb.jpg" alt="Locations of visitors to this page" /></a></noscript>

  <!-- Start of StatCounter Code -->
<script type="text/javascript">
var sc_project=5834155; 
var sc_invisible=0; 
var sc_security="9174d3cf"; 
var sc_text=1; 
</script>
<script type="text/javascript"
src="http://www.statcounter.com/counter/counter.js"></script><noscript><div
class="statcounter"><a title="web stats"
href="http://www.statcounter.com/free_web_stats.html"
target="_blank"><img class="statcounter"
src="http://c.statcounter.com/5834155/0/9174d3cf/0/"
alt="web stats" ></a></div></noscript>
<!-- End of StatCounter Code --><br/><a
href="http://my.statcounter.com/project/standard/stats.php?project_id=5834155&amp;guest=1">View
My Stats</a>
</br>
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style " style="width:330px; margin:auto; text-align:center">
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
<a class="addthis_button_pinterest_pinit"></a>
<a class="addthis_counter addthis_pill_style"></a>
</div>
<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-503fa44569896370"></script>
<!-- AddThis Button END -->
</center>
</div>
  
  
<!--Google Analytics-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-15725680-3']);
  _gaq.push(['_setDomainName', 'none']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

OUT;

// Ad location above the form on the index page
$themeReplace['index_above_form'] = <<<OUT
<center>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-9312194861004029";
/* Leaderboard above URL */
google_ad_slot = "7156534058";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</center>
<br>
OUT;

// Ad location below the form on the index page
$themeReplace['index_below_form'] = <<<OUT
<center>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-9312194861004029";
/* Leaderboard below URL */
google_ad_slot = "4203067656";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</center>
OUT;

// Ad location on proxied pages below the url mini-form
$themeReplace['proxied'] = <<<OUT
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
OUT;
