<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
	"http://www.w3.org/TR/html4/strict.dtd">
<?php include("file_links.php"); ?>

<html>
<?php include("head.php"); ?>
<body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>
<script>
$( document ).ready( function() {
	$( ".slide_content" ).hide();
	$( ".slide_header" ).click( function() {
		$( this ).next().slideToggle( "fast", "linear" );
		$( this ).children().first().html( ($( this ).children().first().html() == "[-]" ) ? "[+]" : "[-]" );
	});
});
</script>

<div id="container_all">

<?php include("header.php"); ?>

	<div id="container_content">

<?php include("sidebar.php"); ?>

<div id="content">
<div id="content_sub">
