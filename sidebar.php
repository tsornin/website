<?php
function rooturl( $path ) {
	return "http://" . $_SERVER[ 'SERVER_NAME' ] . "/" . $path;
}
?>
		<div id="sidebar">

			<div id="sidebar_first">
				<h2><img src="<?=rooturl( "img/flagicon-code.png" ); ?>">code</h2>
				<ul>
					<li><a href="<?=rooturl( "thesis.html" ); ?>">Thesis</a></li>
					<li><a href="<?=rooturl( "umbrella.html" ); ?>">Physics</a></li>
					<!-- <li><a href="<?=rooturl( "fluid.html" ); ?>">Fluid</a></li> -->
				</ul>
			</div>

			<div id="sidebar_second">
				<h2><img src="<?=rooturl( "img/flagicon-art.png" ); ?>">art</h2>
				<ul>
					<li><a href="<?=rooturl( "art2d.html" ); ?>">Design</a></li>
					<li><a href="<?=rooturl( "art3d.html" ); ?>">Modeling</a></li>
				</ul>
			</div>

			<div id="sidebar_third">
				<h2><img src="<?=rooturl( "img/flagicon-info.png" ); ?>">info</h2>
				<ul>
					<li><a href="<?=rooturl( "index.html" ); ?>">About</a></li>
				</ul>
			</div>

			<div id="sidebar_fourth">
				<h2>&nbsp;</h2>
			</div>

		</div> <!--end sidebar-->