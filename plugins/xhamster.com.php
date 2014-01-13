<?php
/*****************************************************************
* Plugin: YouTube
* Description:
*    Replaces the YouTube player with our own player that loads
*    the FLV file directly.
* Author: http://forums.glype.com/index.php?topic=109.180
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

         // Look for video ID and record it
         if ( preg_match('#\'file\'\:\s\'(.*)flv#', $input, $videoId) ) {
            define('VIDEO_ID', $videoId[1]);
         }

         // Look for T-value. Purpose unknown but seems to be required. Maybe a token
         // to complicate downloading FLV files?
         if ( preg_match('#\'srv\'\:\s\'(.*)\'#', $input, $tValue) ) {
            define('T_VALUE', $tValue[1]);
         }
		 
		 // Look for T-value. Purpose unknown but seems to be required. Maybe a token
         // to complicate downloading FLV files?
         if ( preg_match('#\'image\'\:\'(.*)\'#', $input, $mValue) ) {
            define('M_VALUE', $mValue[1]);
         }

         // Remove noscript message
        //$input = preg_replace('#var\sso\s\=.*?player\'\)\;#s', VIDEO_ID, $input, 1);
          //$input = preg_replace('#\<p\sid=\"player\"\>.*?\<\/p\>#s',VIDEO_ID.' '.T_VALUE.' '.M_VALUE,$input, 1);
		  //$input = preg_replace('/'.preg_quote('<p id="player">','</p>').'/s','',$input);
		  //$input = preg_replace('#\<div\sstyle\=\"width\:580px\;\sheight\:455px\"\>.*?\<\/script\>#s',VIDEO_ID.' '.T_VALUE.' '.M_VALUE,$input, 1);
		  //$input = preg_replace('#\<p\sid=\"player\"\>.*?\<\/div\>#s','',$input, 1);
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
         if ( ! defined('VIDEO_ID') || ! defined('T_VALUE') || ! defined('M_VALUE')) {
            return $input;
         }

         // Create URL to mediaplayer
         $mediaPlayerUrl = GLYPE_URL . '/plugins/player.swf';

         // Generate URL to flv file and preview image through proxy script

         $flvUrl = rawurlencode(proxifyURL(rawurldecode(sprintf(T_VALUE . 'flv2/' . VIDEO_ID .'flv'))));
         $imgUrl = rawurlencode(proxifyURL(rawurldecode(sprintf('%s', M_VALUE))));

         // Generate HTML for the flash object with our new FLV URL
         $html = <<<OUT
<embed src="{$mediaPlayerUrl}"
        width="580"
        height="455"
        bgcolor="000000"
        allowscriptaccess="always"
        allowfullscreen="true"
        type="application/x-shockwave-flash"
        pluginspage="http://www.macromedia.com/go/getflashplayer" 
        flashvars="width=580&amp;height=455&amp;type=video&amp;fullscreen=true&amp;volume=100&amp;file={$flvUrl}&amp;image={$imgUrl}" />
OUT;

         // Add our own player into the player div
        // $input = preg_replace('/'.preg_quote('<p id="player">','/').'/s',$html,$input, 1);
		$input = preg_replace('#\<div\sstyle\=\"width\:580px\;\sheight\:455px\"\>.*?\<\/script\>#s','<p id="player">'.$html.'</p></DIV></br>',$input, 1);
		 
      break;

   }

return $input;

}
?>