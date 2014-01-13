<?php
/*******************************************************************
* Glype Proxy Script
* 
* This theme configuration file allows easy customization of the
* theme without editing the HTML templates.
*******************************************************************
* Theme: Preppy
* Author: doDesign
* Website: http://dodesign.us/
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

// Adsense code (338x280)
$themeReplace['adsensead'] = <<<OUT
<!-- Begin: AdBrite, Generated: 2010-06-02 18:47:15  -->
<script type="text/javascript">
var AdBrite_Title_Color = '0000FF';
var AdBrite_Text_Color = '000000';
var AdBrite_Background_Color = 'FFFFFF';
var AdBrite_Border_Color = 'CCCCCC';
var AdBrite_URL_Color = '008000';
try{var AdBrite_Iframe=window.top!=window.self?2:1;var AdBrite_Referrer=document.referrer==''?document.location:document.referrer;AdBrite_Referrer=encodeURIComponent(AdBrite_Referrer);}catch(e){var AdBrite_Iframe='';var AdBrite_Referrer='';}
</script>
<script type="text/javascript">document.write(String.fromCharCode(60,83,67,82,73,80,84));document.write(' src="http://ads.adbrite.com/mb/text_group.php?sid=1652008&zs=3330305f323530&ifr='+AdBrite_Iframe+'&ref='+AdBrite_Referrer+'" type="text/javascript">');document.write(String.fromCharCode(60,47,83,67,82,73,80,84,62));</script>
<div><a target="_top" href="http://www.adbrite.com/mb/commerce/purchase_form.php?opid=1652008&afsid=1" style="font-weight:bold;font-family:Arial;font-size:13px;">Your Ad Here</a></div>
<!-- End: AdBrite -->
<br>
<!-- Begin: AdBrite, Generated: 2010-06-03 0:23:52  -->
<script type="text/javascript">
var AdBrite_Title_Color = '0000FF';
var AdBrite_Text_Color = '000000';
var AdBrite_Background_Color = 'FFFFFF';
var AdBrite_Border_Color = 'CCCCCC';
var AdBrite_URL_Color = '008000';
try{var AdBrite_Iframe=window.top!=window.self?2:1;var AdBrite_Referrer=document.referrer==''?document.location:document.referrer;AdBrite_Referrer=encodeURIComponent(AdBrite_Referrer);}catch(e){var AdBrite_Iframe='';var AdBrite_Referrer='';}
</script>
<script type="text/javascript">document.write(String.fromCharCode(60,83,67,82,73,80,84));document.write(' src="http://ads.adbrite.com/mb/text_group.php?sid=1652205&zs=3330305f323530&ifr='+AdBrite_Iframe+'&ref='+AdBrite_Referrer+'" type="text/javascript">');document.write(String.fromCharCode(60,47,83,67,82,73,80,84,62));</script>
<div><a target="_top" href="http://www.adbrite.com/mb/commerce/purchase_form.php?opid=1652205&afsid=1" style="font-weight:bold;font-family:Arial;font-size:13px;">Your Ad Here</a></div>
<!-- End: AdBrite -->

OUT;


// Proxy description text
$themeReplace['description'] = <<<OUT
   <p>Enjoy unrestricted and uncensored ad-free browsing through this proxy. You make a request via our site, we fetch the resource and send it back to you. YouTube, FaceBook, MySpace, Twitter, Daily Motion, xHamster, and many other sites are supported. You can get privacy and security by hiding your IP.</p>
   <p>This service is provided to you free of charge. As you may know, this is an expensive service to maintain so donations are highly appreciated to help cover server and maintenance fees.</p>

<div align="center" style="position: relative; clear: both;">
<div align="center" style="display:inline-block;" >
<p>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----MIIHRwYJKoZIhvcNAQcEoIIHODCCBzQCAQExggEwMIIBLAIBADCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwDQYJKoZIhvcNAQEBBQAEgYAB82j4AQ3Wf7u20e4OyTBHxGNjM8PSWUtMfZh5o27Iypv1E2c4PfKbKcf4rP4xyXrTtOC5fE9WwnvA3AuYoPF/0XVaKVPnxUt2VFWGLxI2ngOcG90dNiplDD6mA1MOvrle3Pl3RZlqfJap0fCPDlUXa9IBkQ3FRkknY+3hvmmcbDELMAkGBSsOAwIaBQAwgcQGCSqGSIb3DQEHATAUBggqhkiG9w0DBwQI6m0N85POI9OAgaCvsQ8zN0D70gIhlX/R+ujsgy/QY/Eli0gzyZIzo+89QnSnn5nEldDFF3lbakrXwrf4G60WpsIzJtgSq+jxUvHnpvYTNfQyecfRYnOKooCADjlogXMc0DC8gOczWITjCBlM2w/9QA8gCFYjJ/kpMHeFLHUfuToc5s6FubTd9mK7J1qVkj8Ugk/82gRXHytR10x12zkSTu2Eucb0prrL/SwQoIIDhzCCA4MwggLsoAMCAQICAQAwDQYJKoZIhvcNAQEFBQAwgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tMB4XDTA0MDIxMzEwMTMxNVoXDTM1MDIxMzEwMTMxNVowgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDBR07d/ETMS1ycjtkpkvjXZe9k+6CieLuLsPumsJ7QC1odNz3sJiCbs2wC0nLE0uLGaEtXynIgRqIddYCHx88pb5HTXv4SZeuv0Rqq4+axW9PLAAATU8w04qqjaSXgbGLP3NmohqM6bV9kZZwZLR/klDaQGo1u9uDb9lr4Yn+rBQIDAQABo4HuMIHrMB0GA1UdDgQWBBSWn3y7xm8XvVk/UtcKG+wQ1mSUazCBuwYDVR0jBIGzMIGwgBSWn3y7xm8XvVk/UtcKG+wQ1mSUa6GBlKSBkTCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb22CAQAwDAYDVR0TBAUwAwEB/zANBgkqhkiG9w0BAQUFAAOBgQCBXzpWmoBa5e9fo6ujionW1hUhPkOBakTr3YCDjbYfvJEiv/2P+IobhOGJr85+XHhN0v4gUkEDI8r2/rNk1m0GA8HKddvTjyGw/XqXa+LSTlDYkqI8OwR8GEYj4efEtcRpRYBxV8KxAW93YDWzFGvruKnnLbDAF6VR5w/cCMn5hzGCAZowggGWAgEBMIGUMIGOMQswCQYDVQQGEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMuMRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbQIBADAJBgUrDgMCGgUAoF0wGAYJKoZIhvcNAQkDMQsGCSqGSIb3DQEHATAcBgkqhkiG9w0BCQUxDxcNMTAwNTAyMjE0NzE0WjAjBgkqhkiG9w0BCQQxFgQU+qlO5hU8brtx2KQe6N7wx1v4e2MwDQYJKoZIhvcNAQEBBQAEgYCZut61DPLWKYAstqLwk3frniM9avFce3o1zpldnmTQBT8bLgidPmDyZPGBjV/S+DWz4rYj6u6thvHjk0/IzYH34PIi0zhHSoMr2LWx4TUZ5Rj64WWj5Iji6DUUD+AC+nSX4/4JgawQnN+FCi0YYLz4A2yhsSLhulUJmHwSyI3Hqg==-----END PKCS7-----
">
<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</p>

<p>

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
</p>
</div>
<div align="center" style="display:inline-block;">
<br>
<!--ClustrMaps-->
<a href="http://www3.clustrmaps.com/counter/maps.php?url=http://www.circumvent.us" id="clustrMapsLink"><img src="http://www3.clustrmaps.com/counter/index2.php?url=http://www.circumvent.us" style="border:0px;" alt="Locations of visitors to this page" title="Locations of visitors to this page" id="clustrMapsImg" onerror="this.onerror=null; this.src='http://www2.clustrmaps.com/images/clustrmaps-back-soon.jpg'; document.getElementById('clustrMapsLink').href='http://www2.clustrmaps.com';" />
</a>
</div>
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
<!-- Begin Publisher Code for circumvent.us -->
<script type="text/javascript" language="javascript">
adlsi9 = "0ef321491bf96422893b9d3d968e222179|97379|9715"
</script>
<script src="http://www.adversalservers.com/publisherJS.js"></script>
<script type="text/javascript" language="javascript">
goAdversal("0ef321491bf96422893b9d3d968e2221", 3, 10);
</script>
<!-- End Publisher Code for circumvent.us -->

OUT;

?>