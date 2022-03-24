<?php
error_reporting(0);
clearstatcache();
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT" );
header("Last-Modified: " . gmdate( "D, d M Y H:i:s" ) . "GMT" );
header("Cache-Control: no-cache, must-revalidate" );
header("Pragma: no-cache");
header("Cache-Control: no-cache");

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Harcomia NFT Game</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">

	<meta name="generator" content="Construct 3">
	<meta name="author" content="Harcomia">
	<meta name="description" content="Adventure &amp; Logic Pixel Art Game NFT">

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Expires" content="Mon, 26 Jul 1997 05:00:00 GMT">
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv='cache-control' content='no-cache'>
	<meta http-equiv='expires' content='0'>

	<link rel="manifest" href="appmanifest.json">
	<link rel="apple-touch-icon" sizes="128x128" href="icons/icon-128.png">
	<link rel="apple-touch-icon" sizes="256x256" href="icons/icon-256.png">
	<link rel="apple-touch-icon" sizes="512x512" href="icons/icon-512.png">
	<link rel="icon" type="image/png" href="icons/icon-512.png">

	<link rel="stylesheet" href="style.css">

	<script type = "text/javascript" src ="scripts/jquery.min.js"></script>
</head>
<body>
<div id="fb-root"></div>

	<noscript>
		<div id="notSupportedWrap">
			<h2 id="notSupportedTitle">This content requires JavaScript</h2>
			<p class="notSupportedMessage">JavaScript appears to be disabled. Please enable it to view this content.</p>
		</div>
	</noscript>
	
	<script src="scripts/supportcheck.js"></script>
	<script src="scripts/offlineclient.js" type="module"></script>
	<script src="scripts/main.js" type="module"></script>
	<script src="scripts/register-sw.js" type="module"></script>
	
</body>
</html>