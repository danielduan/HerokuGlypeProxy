<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="themes/Preppy/style.css" type="text/css" />
<title>Authorization Required - <!--[site_name]--></title>
<link rel="shortcut icon" href="themes/Preppy/favicon.ico" type="image/x-icon" /> 
<base href="<?php echo GLYPE_URL; ?>/">
</head>
<body>
<div id="container" class="authenticate">
	<div id="content">
		<h2>Authorization Required</h2>
		<p>The site <strong><?php echo $site; ?></strong> is requesting a username and password to access the realm "<strong><?php echo $realm; ?></strong>".</p>
		<form action="includes/process.php?action=authenticate" method="post">
			<fieldset>
				<label for="user">Username:</label>
				<input type="text" name="user" id="user" />
				<label for="pass">Password:</label>
				<input type="password" name="pass" id="pass" />
				<input type="submit" value="Submit" />
				
				<input type="hidden" name="site" value="<?php echo $site; ?>" />
				<input type="hidden" name="return" value="<?php echo $return; ?>" />
			</fieldset>
		</form>      
	</div>
</div>
</body>
</html>