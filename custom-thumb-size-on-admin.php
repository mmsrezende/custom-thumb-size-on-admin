<?php
/*
Plugin Name: Custom Thumbnail Size On Admin
Description: Triple the thumbnail size on admin area
Version: 1.0
Author: Marcos Rezende
Author URI: https://www.linkedin.com/in/rezehnde/
*/

add_action('admin_head', 'gugeler_triple_thumbnail_size_on_admin');
function gugeler_triple_thumbnail_size_on_admin() {
	echo '
	<style>
	table.wp-list-table .column-thumb {
		width: 156px;
	}
	table.wp-list-table td.column-thumb img {
		max-width: 120px;
		max-height: 120px;
	}
	</style>';
}
