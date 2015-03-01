<?php
function rooturl( $path ) {
	return "http://" . $_SERVER[ 'SERVER_NAME' ] . "/" . $path;
}
?>
		<div id="sidebar">

			<div id="sidebar_first">
				<h2><img src="<?=rooturl( "img/flagicon-code.png" ); ?>">coding</h2>
				<ul>
					<li><a href="<?=rooturl( "thesis.html" ); ?>">Honors Thesis</a></li>
					<li><a href="<?=rooturl( "umbrella.html" ); ?>">Physics Engine</a></li>
					<li><a href="<?=rooturl( "fluid.html" ); ?>">2D Fluid</a></li>
				</ul>
			</div>

			<div id="sidebar_second">
				<h2><img src="<?=rooturl( "img/flagicon-art.png" ); ?>">artwork</h2>
				<ul>
					<li><a href="<?=rooturl( "art2d.html" ); ?>">2D Vector</a></li>
					<li><a href="<?=rooturl( "art3d.html" ); ?>">3D Modeling</a></li>
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