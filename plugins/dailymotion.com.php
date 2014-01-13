<?php
/*****************************************************************
* Plugin: Dailymotion
* Description:
*    Replaces the dailymotion player with our own player that loads
*    the FLV file directly.
* Author: Forcemdt
******************************************************************/

/*****************************************************************
* Override options for this site
******************************************************************/

// Increase timeout to 60 minutes
$toSet[CURLOPT_TIMEOUT] = 7200;

// Strip javascript to simplify the page and stop existing javascript intefering
//$options['stripJS'] = false;
//dont need this

/*****************************************************************
* Pre-parsing applied BEFORE main proxy parser
******************************************************************/

function preParse($input, $type) {

   switch ( $type ) {

      case 'html':

         // Look for video ID and record it
         if ( preg_match('#"video", "(.*)%40%40spark#', $input, $videoId) ) {
            define('VIDEO_ID', $videoId[1]);
         }

         // Look for T-value. Purpose unknown but seems to be required. Maybe a token
         // to complicate downloading FLV files?
         if ( preg_match('#"preview", "(.*)"#', $input, $tValue) ) {
            define('T_VALUE', $tValue[1]);
         }
		 // div tag name
		 if ( preg_match('#\<div\sid\=\"video_player_(.*)" style#', $input, $dValue) ) {
            define('D_VALUE', $dValue[1]);
         }
		 
         //Remove noscript message
		 $input = preg_replace('#<noscript>.*?</noscript>#s','', $input, 1);
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
         if ( ! defined('VIDEO_ID') || ! defined('T_VALUE') || ! defined('D_VALUE') ) {
            return $input;
         }

         // Create URL to mediaplayer
         $mediaPlayerUrl = GLYPE_URL . '/plugins/player.swf';

         // Generate URL to flv file and preview image through proxy script

         $flvUrl = rawurlencode(proxifyURL(rawurldecode(sprintf('%s', VIDEO_ID))));
         $imgUrl = rawurlencode(proxifyURL(rawurldecode(sprintf('%s', T_VALUE))));

         // Generate HTML for the flash object with our new FLV URL
         $html = <<<OUT
<embed src="{$mediaPlayerUrl}"
        width="608"
        height="400"
        bgcolor="000000"
        allowscriptaccess="always"
        allowfullscreen="true"
        type="application/x-shockwave-flash"
        pluginspage="http://www.macromedia.com/go/getflashplayer" 
        flashvars="width=608&amp;height=400&amp;type=video&amp;fullscreen=true&amp;volume=100&amp;file={$flvUrl}&amp;image={$imgUrl}" />
OUT;

         // Add our own player into the player div
         $input = preg_replace('#\<div\sclass\=\"dm_widget_videoplayer.*?\<\/div\>#s','<div class="dm_widget_videoplayer" ><div id="video_player_'.D_VALUE.'" style="width: 100%; height: 100%;">'.$html.'</div></div>', $input, 1);
         break;

   }

return $input;

}
?>