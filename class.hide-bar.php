<?php
class ADD_Files {

	public function __construct() {
		add_action( 'init', 'isLogged' );
		wp_enqueue_style(
			'main-style',
			plugins_url( 'assets/css/main.css', __FILE__ ),
			array(),
			true
		);
		wp_enqueue_script(
			'main-script',
			plugins_url( 'assets/js/main.js', __FILE__ ),
			array('jquery', 'jquery-ui-draggable'),
			'',
			true
		);
	}
}
function isLogged() {
	if ( is_user_logged_in() ) {?>
		<p class="btn__plugin btn-primary_plugin">
			<span class="text-hide__plugin">Hide</span>
			<span class="text-show__plugin change-text__plugin">Show</span>
		</p>
	<?php
	}
}

new ADD_Files();
