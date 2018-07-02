<?php 


/*-----------------------------------------------------------------------------------*/
/* Usunięcie informacji o wersjach plików css i js w kodzie
/*-----------------------------------------------------------------------------------*/
function dd_remove_css_js_ver( $src ) {
	if( strpos( $src, '?ver=' ) )
		$src = remove_query_arg( 'ver', $src );
		return $src;
}
add_filter( 'style_loader_src', 'dd_remove_css_js_ver', 10, 2 );
add_filter( 'script_loader_src', 'dd_remove_css_js_ver', 10, 2 ); 



/*-----------------------------------------------------------------------------------*/
/* Usunięcie znacznika type plików css i js w kodzie
/*-----------------------------------------------------------------------------------*/
add_filter('script_loader_tag', 'dd_clean_script_tag');

function dd_clean_script_tag($input) {
	$input = str_replace("type='text/javascript' ", '', $input);
	return str_replace("'", '"', $input);
}


/*-----------------------------------------------------------------------------------*/
/* Asynchroniczne ładowanie skryptów
/*-----------------------------------------------------------------------------------*/
function dd_async_scripts($tag, $handle, $src) {
	$async_scripts = array('webfont-loader');
	
	if(in_array($handle, $async_scripts)) {
		return '<script src="'.$src.'" async="async"></script>'."\n";
	}
	
	return $tag;
}
add_filter('script_loader_tag', 'dd_async_scripts', 10, 3);



/*-----------------------------------------------------------------------------------*/
/* Usunięcie ładowania emocji przez Wordpress
/*-----------------------------------------------------------------------------------*/
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script' );
remove_action('admin_print_styles', 'print_emoji_styles' );




?>
