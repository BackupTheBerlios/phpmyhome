<?
	session_start();
	include_once("include/blog_lib.inc.php");
	include("base/dbblog.php");
?>
<?
print("<?xml version=\"1.0\" encoding=\"iso-8859-15\"?>\n");
?>
<!DOCTYPE html PUBLIC "-//Juicy//DTD XHTML-with IFrame 1.1//EN" "http://www.juicystudio.com/DTD/xhtml-iframe.dtd">
<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
<meta content="application/xhtml+xml; charset=iso-8859-15" http-equiv="Content-Type" />
<meta name="Author" content="phpMyHome Team" />
<meta name="Description" content="" />
<meta name="Identifier-URL" content="http://" />
<meta name="Reply-to" content="" />
<meta name="robots" content="index, follow" />
<meta name="keywords" content="" />

<title>phpMyHome</title>

<link rel="stylesheet" type="text/css" href="../styles/default.css" />

</head>
<body>
	<div class="InFrmDiv">
		<?
		printBlog(10);
		?>
		<form action="../include/savBlog.php" method="post" class="mainForm">
			<div class="blogDivTextarea">
				<textarea class="blogTextarea" name="blog"></textarea>
			</div>
			<div class="blogDivSave">
				<input type="submit" class="blogSave" value="<? print libBLOG ?>">
			</div>
		</form>
	</div>
</body>
</html>
