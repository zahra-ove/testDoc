<?php 
// If uninstall is not called from WordPress, exit
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    exit();
}
delete_option('documentorlite_db_version');
/* Do not delete the DB in case the pro version is already installed and active.*/
/*if( !defined(DOCUMENTOR_VER) ):
	delete_option('documentor_global_options');
	global $wpdb, $table_prefix;

	$documentor_table = $table_prefix.'documentor';
	$feedback_table = $table_prefix.'documentor_feedback';
	$sections_table = $table_prefix.'documentor_sections';
	$sql = "DROP TABLE $documentor_table;";
	$wpdb->query($sql);
	$sql = "DROP TABLE $feedback_table;";
	$wpdb->query($sql);
	$sql = "DROP TABLE $sections_table;";
	$wpdb->query($sql);
endif;*/
?>
