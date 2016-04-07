<?php
function rooturl( $path ) {
	return "http://" . $_SERVER[ 'SERVER_NAME' ] . "/" . $path;
}
?>
		<div id="sidebar">

			<div id="sidebar_first">
				<h2><img src="<?=rooturl( "img/flagicon-code.png" ); ?>">code</h2>
				<ul>
					<li><a href="<?=rooturl( "umbrella.html" ); ?>">Physics</a></li>
					<li><a href="<?=rooturl( "thesis.html" ); ?>">Thesis</a></li>
					<!-- <li><a href="<?=rooturl( "fluid.html" ); ?>">Fluid</a></li> -->
				</ul>
			</div>

			<div id="sidebar_second">
				<h2><img src="<?=rooturl( "img/flagicon-art.png" ); ?>">art</h2>
				<ul>
					<li><a href="<?=rooturl( "art2d.html" ); ?>">Design</a></li>
					<!-- <li><a href="<?=rooturl( "art3d.html" ); ?>">Modeling</a></li> -->
				</ul>
			</div>
<!-- 
			<div id="sidebar_third">
				<h2><img src="<?=rooturl( "img/flagicon-info.png" ); ?>">info</h2>
				<ul>
					<li><a href="<?=rooturl( "index.html" ); ?>">About</a></li>
				</ul>
			</div>
 -->
			<div id="sidebar_fourth">
				<h2>&nbsp;</h2>
			</div>

			<div id="sidebar_portrait">
			<div id="portrait">
				<img src="img/avatar_scarfa.png" alt="Picture of Bruno">
			</div>
			</div>

			<div id="sidebar_blogroll">
			<div id="sidebar_blogroll_title">
				<span class="small_caps">Stuff I'm reading:</span>
			</div>
			<div id="sidebar_blogroll_links">
				<a href="http://xkcd.com/">xkcd</a>
				<a href="http://slatestarcodex.com/">Slate Star Codex</a>
				<a href="http://www.theeffectiveengineer.com/">The Effective Engineer</a>
				<a href="http://putthison.com/">Put This On</a>
				<a href="https://www.reddit.com/r/fitness">r/fitness</a>
			</div>
			</div>

		</div> <!--end sidebar-->