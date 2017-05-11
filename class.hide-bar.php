<?php
class hwpb_files {

	public function __construct() {
		add_action( 'init', 'hwpb_isLogged' );
		add_action( 'init', 'hwpb_registerScript' );
		add_action( 'init', 'hwpb_registerStyle' );
	}
}
function hwpb_registerScript(){
	wp_enqueue_script(
		'main-script',
		plugins_url( 'assets/js/main.js', __FILE__ ),
		array('jquery', 'jquery-ui-draggable')
	);
}
function hwpb_registerStyle(){
	wp_enqueue_style(
		'main-style',
		plugins_url( 'assets/css/main.css', __FILE__ ),
		array(),
		true
	);
}
function hwpb_isLogged() {
	if ( is_user_logged_in() ) {
		
		$file = hwpb_HIDEBAR_PLUGIN_DIR . 'views/btn-view.php';
		include( $file );
	}
}

new hwpb_files();
