<?php
function image_gallery_of_directory( $dir ) {
	echo '<div class="image_gallery">';
	$images = glob( $dir . '/*.{jpg,JPG,jpeg,JPEG,png,PNG}', GLOB_BRACE );
	sort( $images, SORT_NATURAL );
	foreach ( $images as $file ) {
		$basename = basename( $file );
		echo "\n" . '<a href="' . $dir . '/' . $basename . '"><img src="' . $dir . '-thumb/' . $basename . '" /></a>';
	}
	echo '</div>';
}
?>