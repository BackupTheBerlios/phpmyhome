<?
	//requires de rigueur et récupération de la css
	require("require/phpjscript.inc.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
  <link rel="stylesheet" type="text/css" href="styles/default.css">
  <title>phpMyHome</title>
</head>
<body>
	<?
		//controles d'identification
	?>
	
	<div class="mainDiv" id="mainDiv">
		<iframe class="mainIFrame" id="Iframe">
		</iframe>
	</div>
	
	<?
		//include ou require(pas décidé) de plugins
		include("plugins/notes.php");
	?>
</body>
</html>
