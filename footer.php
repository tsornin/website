<?php
date_default_timezone_set('America/Los_Angeles');
// Returns true if user-agent is IE 10 or older.
function detectIE() {
	if ( isset( $_SERVER[ 'HTTP_USER_AGENT' ] ) && ( strpos( $_SERVER[ 'HTTP_USER_AGENT' ], 'MSIE' ) !== false ) )
		return true;
	else
		return false;
}
?>

	<div id="footer">
	<div id="footer_sub">
		<h4>
		&copy; <?php echo date("Y") ?> Bruno Li.
		<!--Website under construction.-->
		<?php if ( detectIE() ) { ?>
			Get
			<a href="http://www.mozilla.com/">Firefox</a>
			or
			<a href="http://www.google.com/chrome/">Chrome</a>!
		<?php } ?>
		</h4>
	</div> <!--end footer_sub-->
	</div> <!--end footer-->