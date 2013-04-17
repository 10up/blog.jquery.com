<?php
/**
 * Converts all of the *.html files in the specified directory to *.md using Pandoc:
 * http://johnmacfarlane.net/pandoc/index.html
 */

$directory = __DIR__ . '/../posts/';

/**
 * Scans the specified directory, processing all .html files
 */
function convert_posts_to_md() {
	$dir = $GLOBALS[ 'directory' ];
	$handle = opendir( $dir );
	if( $handle ) {
		while( ( $thing = readdir( $handle ) ) !== false ) {
			if( '.' === $thing || '..' === $thing || is_dir( $dir . $thing ) )
				continue;

			$file_extension = explode( '.', $thing );
			$file_extension = $file_extension[ count( $file_extension ) - 1 ];

			if( 'html' !== $file_extension )
				continue;

			process_file( $dir, $thing );
		}
		closedir( $handle );
	}
}

/**
 * Process the file by converting it to the new .md file through Pandoc: http://johnmacfarlane.net/pandoc/index.html
 * Then delete the old html file when finished.
 *
 * @param string $directory
 * @param string $file
 */
function process_file( $directory = '', $file = '' ) {
	echo 'Converting: ', $file, '... ';

	$original_path = $directory . $file;
	$new_path = $directory . str_replace( '.html', '.md', $file );

	shell_exec( 'pandoc ' . $original_path . ' -o ' . $new_path );
	echo 'Converted!', "\n";

	unlink( $original_path );
}

convert_posts_to_md();