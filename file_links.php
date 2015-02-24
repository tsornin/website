<?php
// Returns a formatted string of a specified file size.
// Probably breaks on files larger than a petabyte.
function prettyfilesize( $size ) {
	$units = array( ' B', ' KB', ' MB', ' GB', ' TB' );
	for ( $i = 0; $size > 1024; $i++ ) { $size /= 1024; }
	return round( $size, 2 ) . $units[ $i ];
}

// Returns the base name and file size of a specified file
// as link to the file.
function filelinkandsize( $path ) {
	return
		'<a href="' . $path . '">' . basename( $path ) . '</a>, ' .
		prettyfilesize( filesize( $path ) );
}
?>