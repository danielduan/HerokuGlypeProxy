<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="themes/Preppy/style.css" type="text/css" />
<title>SSL Warning - <!--[site_name]--></title>
<link rel="shortcut icon" href="themes/Preppy/favicon.ico" type="image/x-icon" /> 
</head>
<body>
<div id="container" class="sslwarning">
	<div id="content">
		<h2>Warning!</h2>
		<p>The site you are attempting to browse is on a secure connection. This proxy is not on a secure connection.</p>
		<p>The target site may send sensitive data, which may be intercepted when the proxy sends it back to you.</p>
		<form action="includes/process.php" method="get">
			<fieldset>
				<input type="hidden" name="action" value="sslagree" />
				<input type="submit" value="Continue anyway..." />
				<input type="button" value="Return to index" onclick="window.location='.';" />
			</fieldset>
		</form>
		<p><strong>Note:</strong> this warning will not appear again.</p>
	</div>
</div>
</body>
</html>