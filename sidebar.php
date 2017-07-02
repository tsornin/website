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
					<li><a href="<?=rooturl( "art2d-design.html" ); ?>">Design</a></li>
					<li><a href="<?=rooturl( "art2d-illustration.html" ); ?>">Illustration</a></li>
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
<!-- 
			<div id="sidebar_portrait">
				<img class="portrait" src="img/avatar_warby.png" alt="Picture of Bruno">
			</div>
 -->
 			<a href="https://www.youtube.com/watch?v=ZSS5dEeMX64&amp;t=27s"> 	<!-- be a man! -->
			<div id="sidebar_portrait_slideshow">
				<img id="zero" src="img/avatar/spear-0_256.png" alt="Avatar Spear 0">
				<img id="one" src="img/avatar/spear-1_256.png" alt="Avatar Spear 1">
				<img id="two" src="img/avatar/spear-2_256.png" alt="Avatar Spear 2">
				<img id="three" src="img/avatar/spear-3_256.png" alt="Avatar Spear 3">
				<img id="four" src="img/avatar/spear-0_256.png" alt="Avatar Spear 0">
			</div>
			</a>
			<script>
			$(document).ready(function(){
				var stop_slideshow = function(){
					$("#sidebar_portrait_slideshow #one").stop().animate({opacity:0}, 0);
					$("#sidebar_portrait_slideshow #two").stop().animate({opacity:0}, 10);
					$("#sidebar_portrait_slideshow #three").stop().animate({opacity:0}, 20);
					$("#sidebar_portrait_slideshow #four").stop().animate({opacity:0}, 40);
				};
				var start_slideshow = function(){
					$("#sidebar_portrait_slideshow #one").stop().animate({opacity:0}, 0).animate({opacity:1}, 200);
					$("#sidebar_portrait_slideshow #two").stop().animate({opacity:0}, 500).animate({opacity:1}, 200);
					$("#sidebar_portrait_slideshow #three").stop().animate({opacity:0}, 1000).animate({opacity:1}, 200);
					$("#sidebar_portrait_slideshow #four").stop().animate({opacity:0}, 1100).animate({opacity:1}, 200);
				}

				stop_slideshow();
				$("#sidebar_portrait_slideshow").mouseenter(start_slideshow);
				$("#sidebar_portrait_slideshow").mouseleave(stop_slideshow);
			});
			</script>

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