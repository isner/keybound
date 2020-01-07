<?php
if (strstr($_SERVER['SERVER_NAME'], 'localhost'))
// Local testing server
{
	return;
}
else
// Live version
{
	$urlErrors = 0;
	$canonicalURL = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	// Establish the entered URL

	if (!strstr($canonicalURL, 'www.')) 
	// URL does not begin with "www."
	{
		$urlErrors ++;
		$canonicalURL = 'www.' . $canonicalURL;
		// Add "www." to beginning of the string
	}
	
	if ($urlErrors > 0) 
	// There was at least one problem with the entered URL
	{
		header('HTTP/1.1 301 Moved Permanently');
		header('Location: http://' . $canonicalURL);
		exit();
	}
}
?>