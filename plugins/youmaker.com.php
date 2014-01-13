<?php
/*****************************************************************
* Plugin: Youmaker.com
* Author: Force
* Description: youmaker.com plugin
******************************************************************/

/*****************************************************************
* Override options for this site
******************************************************************/

// Increase timeout to 10 minutes
$toSet[CURLOPT_TIMEOUT] = 7200;

// Strip javascript to simplify the page and stop existing javascript intefering
//$options['stripJS'] = false;


/*****************************************************************
* Pre-parsing applied BEFORE main proxy parser
******************************************************************/
function preParse($input, $type) {

   switch ( $type ) {

      case 'html':
	     // XML url
         if ( preg_match('#var\spars\s\=\s\'(.*)&rd#', $input, $xmlid) ) {
		    $xmlurl  = 'http://www.youmaker.com/video/vv?'.$xmlid[1];
			$ch = curl_init($xmlurl);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
            $xml=curl_exec($ch);
			preg_match('#creator\>(.*)#', $xml, $xxs);
			preg_match('|<[^>]+>(.*)</[^>]+>|U', $xxs[1], $xxt);
			preg_match('#location\>(.*)#', $xxt[1], $data1);
			preg_match('#info\>(.*)#', $xml, $yys);
			preg_match('|<[^>]+>(.*)</[^>]+>|U', $yys[1], $yyt);
			preg_match('#image\>(.*)#', $yyt[1], $data2);
            define('VIDEO_ID', $data1[1]);
			define('IMAGE_ID', $data2[1]);
         }

         // Remove noscript message
		 $input = preg_replace('#description#s',$data1[1] . ' ' . $data2[1], $input, 1);
         break;

   }

   return $input;

}


/*****************************************************************
* Post-parsing applied AFTER main proxy parser.
******************************************************************/

function postParse($input, $type) {

   switch ( $type ) {

      // Apply changes to HTML documents
      case 'html':

         // Check we have a video to show and if not, return unchanged
         if ( ! defined('VIDEO_ID') || ! defined('IMAGE_ID') ) {
            return $input;
         }

         // Create URL to mediaplayer
         $mediaPlayerUrl = GLYPE_URL . '/plugins/player.swf';

         // Generate URL to flv file and preview image through proxy script

         $flvUrl = rawurlencode(proxifyURL(VIDEO_ID));
         $imgUrl = rawurlencode(proxifyURL(IMAGE_ID));

         // Generate HTML for the flash object with our new FLV URL
         $html = <<<OUT
<embed src="{$mediaPlayerUrl}"
        width="450"
        height="358"
        bgcolor="000000"
        allowscriptaccess="always"
        allowfullscreen="true"
        type="application/x-shockwave-flash"
        pluginspage="http://www.macromedia.com/go/getflashplayer" 
        flashvars="width=450&amp;height=388&amp;type=video&amp;fullscreen=true&amp;volume=100&amp;file={$flvUrl}&amp;image={$imgUrl}" />
OUT;

         // Add our own player into the player div
         $input = preg_replace('#<embed.*?showeq=false\" \/\>#s', $html, $input, 1);

      break;

   }

return $input;

}
?>