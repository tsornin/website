
</div> <!--end content_sub-->
</div> <!--end content-->

		<div id="container_content_clear">
		</div> <!--end container_content_clear-->

	</div> <!--end container_content-->

<?php include("footer.php"); ?>

</div> <!--end container_all-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.classywiggle.js" type="text/javascript"></script>
<script>
$( document ).ready( function() {
	$( ".slide_content" ).hide();
	$( ".slide_header" ).click( function() {
		$( this ).next().slideToggle( "fast", "linear" );
		$( this ).children().first().html( ($( this ).children().first().html() == "[-]" ) ? "[+]" : "[-]" );
	});

	$( "div.appicon_desc" ).hide();
	$( "div#app0_desc" ).show();
	$( "span.appicon" ).addClass( "mouseover" );
	$( "span.appicon" ).bind( "mouseover", function() {
		var desc_id = "#" + $( this ).attr( "id" ) + "_desc";
		var was_visible = ( $( desc_id ).is( ":visible" ) );
		$( "div.appicon_desc" ).stop().hide();
		$( desc_id ).stop().fadeIn( was_visible ? 0 : 400 );

		var id = "#" + $( this ).attr( "id" );
		$( "span.appicon" ).addClass( "mouseover" );
		// $( ".appicon" ).find( "img" ).ClassyWiggle( "stop" );
		$( id ).removeClass( "mouseover" );
		if ( ! $( id ).find( "img" ).ClassyWiggle( "isWiggling" ) ) {
			$( id ).find( "img" ).ClassyWiggle( "start", { "limit" : "6" } );
		}
	});
});
</script>

</body>
</html>