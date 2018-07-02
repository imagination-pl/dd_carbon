<?php 


/*-----------------------------------------------------------------------------------*/
/* Usunięcie informacji o wersjach plików css i js w kodzie
/*-----------------------------------------------------------------------------------*/
function remove_css_js_ver( $src ) {
	if( strpos( $src, '?ver=' ) )
		$src = remove_query_arg( 'ver', $src );
		return $src;
}
add_filter( 'style_loader_src', 'remove_css_js_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_css_js_ver', 10, 2 ); 



/*-----------------------------------------------------------------------------------*/
/* Usunięcie znacznika type plików css i js w kodzie
/*-----------------------------------------------------------------------------------*/
add_filter('script_loader_tag', 'clean_script_tag');

	function clean_script_tag($input) {
		$input = str_replace("type='text/javascript' ", '', $input);
		return str_replace("'", '"', $input);
}



/*-----------------------------------------------------------------------------------*/
/* Usunięcie ładowania emocji przez Wordpress
/*-----------------------------------------------------------------------------------*/
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script' );
remove_action('admin_print_styles', 'print_emoji_styles' );

?>
