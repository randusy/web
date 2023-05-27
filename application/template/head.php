<!doctype html>
<html> 
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="" >
<?php 
echo '<title> '.SN.' | '.TTL.'</title>'
	.File::fileStyleSheet("randusy")
	.File::fileStyleSheet("main")
	.File::fileJavaScript("library/jquery") 
	.File::fileJavaScript("library/jqueryui")
	.File::fileJavaScript("library/randusy")
	.File::fileJavaScript("library/dalert")
	.File::fileJavaScript("script");
?>
</head><body><div id="load" class="overlay hide"><img src="../application/images/cir.gif" /></div>