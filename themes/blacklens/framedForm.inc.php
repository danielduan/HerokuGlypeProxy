<?php
##############################################
## FRAMED FORM : Displays on proxified pages
##############################################
// Define variables for use in form
$return = urlencode('browse.php?' . $_SERVER['QUERY_STRING']);
?>

<div style="padding:4px;margin-bottom:2px;background:#eee;font:12px Verdana,Arial,Tahoma;color:#000;">
	<form action="includes/process.php?action=update" method="post" style="padding:0;margin:0;">
		<b>URL:</b> <input type="text" name="u" size="40" value="<?php echo $url;?>" style="width:400px;border: 1px solid #447900;">
		<input type="submit" value="Go">
		[<a href="<?php echo optURL ?>">home</a>]
		<br>
		<b>Options:</b>
	
<?php foreach($toShow as $details) /* loop and print options */ echo <<<OUT
		<input type="checkbox" name="{$details['name']}" id="{$details['name']}"{$details['checked']}>
		<label for="{$details['name']}" style="display:inline;">{$details['title']}</label>
OUT;
?>
	
	</form>
	<!--[glype:proxified_within_form]-->
</div>
<!--[glype:proxified_below_form]-->
