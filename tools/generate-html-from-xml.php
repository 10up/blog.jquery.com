<?php
/**
 * Convert the specified XML file into HTML pages
 */

$filename = 'blog.jqueryui.com.xml';
$directory = __DIR__ . '/../exports/';
$path = $directory . $filename;
$export_directory = __DIR__ . '/../posts/';

/**
 * Gets the export content from the XML file
 *
 * @return string
 */
function get_export_content() {
	// open the file and begin scanning contents
	$io = fopen( $GLOBALS[ 'path' ], 'r' );
	$lines = array();
	if( $io ) {
		while( ( $line = fgets( $io ) ) !== false ) {
			// convert the namespace prefixes so there aren't any problems
			$line = str_replace( 'wp:', 'wp_', $line );
			$line = str_replace( 'dc:', 'dc_', $line );
			$line = str_replace( 'content:', 'content_', $line );
			$line = str_replace( 'excerpt:', 'excerpt_', $line );
			$line = str_replace( 'wp:', 'wp_', $line );

			$lines[] = $line;
		}
		fclose( $io );
	}

	// convert the array to a string
	$content = implode( '', $lines );

	return $content;
}

/**
 * Wrapper to process the export content
 */
function process_export() {
	$content = get_export_content();
	process_items( $content );
}

/**
 * While the content still has items, carve them out & process them individually.
 *
 * @param string $content
 */
function process_items( $content = '' ) {
	// process the posts in this export
	while( ( $start = strpos( $content, '<item>' ) ) !== false ) {
		// chunk the data as we need it, item by item
		$end = strpos( $content, '</item>', $start );

		if( ! $end )
			continue;

		$length = ( $end - $start ) + 7;
		$item_entry = substr( $content, $start, $length );

		// convert this string to an array now
		$item = json_decode( json_encode( simplexml_load_string( $item_entry, 'SimpleXMLElement', LIBXML_NOCDATA ) ), true );

		// cut this chunk out of the content now
		$alpha = substr( $content, 0, $start );
		$omega = substr( $content, $start + 1 );
		$content = $alpha . $omega;

		// check to see if this item has a proper status
		if( $item[ 'wp_status' ] !== 'publish' )
			continue;

		generate_file( $item );
	}
}

/**
 * Tweaked from WP Core. Sanitizes the title with dashes so we can create appropriate slugs.
 *
 * @param $title
 * @return string
 */
function sanitize_title_with_dashes($title) {
	$title = strip_tags($title);
	// Preserve escaped octets.
	$title = preg_replace('|%([a-fA-F0-9][a-fA-F0-9])|', '---$1---', $title);
	// Remove percent signs that are not part of an octet.
	$title = str_replace('%', '', $title);
	// Restore octets.
	$title = preg_replace('|---([a-fA-F0-9][a-fA-F0-9])---|', '%$1', $title);
	$title = strtolower($title);
	$title = preg_replace('/&.+?;/', '', $title); // kill entities
	$title = preg_replace('/[^%a-z0-9 _-]/', '', $title);
	$title = preg_replace('/\s+/', '-', $title);
	$title = preg_replace('|-+|', '-', $title);
	$title = trim($title, '-');
	return $title;
}

/**
 * Generates the file on the disk if it exists.
 *
 * @param array $data
 */
function generate_file( $data = array() ) {
	$json = array(
		'title' => $data[ 'title' ]
	);

	// now that we have the content, process it correctly
	ob_start();
	?>
	<script><?php echo json_encode( $json ) ; ?></script>
	<?php if( isset( $data[ 'content_encoded' ] ) ) : ?>
		<?php echo $data[ 'content_encoded' ]; ?>
	<?php endif; ?>
	<?php
	$content = ob_get_clean();

	// generate the name of this file
	$generated_filename = sanitize_title_with_dashes( $data[ 'title' ] );
	$path = $GLOBALS[ 'export_directory' ] . $generated_filename . '.html';

	// check to see if the generated filename exists first
	if( file_exists( $path ) )
		echo 'Found duplicate: ', $generated_filename, "\n";

	// write the file now
	$file_io = fopen( $path, 'w' );
	if( $file_io ) {
		fwrite( $file_io, $content );
		fclose( $file_io );
	}
}

process_export();