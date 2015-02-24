<?php
/**
 * Returns true if Internet Explorer.
 * See: http://www.anyexample.com/programming/php/how_to_detect_internet_explorer_with_php.xml
 */
function detectIE() {
	if ( isset( $_SERVER[ 'HTTP_USER_AGENT' ] ) &&
	( strpos( $_SERVER[ 'HTTP_USER_AGENT' ], 'MSIE' ) !== false ) )
		return true;
	else
		return false;
}
?>

	<div id="footer">
	<div id="footer_sub">
		<h4>
		<!--
		Content &copy; <?php echo date("Y") ?> Bruno Li.
		-->
		
		Website under construction.
		
		<!-- Suggestion to avoid IE -->
		<?php if ( detectIE() ) { ?>
			Get
			<a href="http://www.mozilla.com/">Firefox</a>
			or
			<a href="http://www.google.com/chrome/">Chrome</a>!
		<?php } ?>
		</h4>
	</div> <!--end footer_sub-->
	</div> <!--end footer-->