/*-----------------------------------------------------------------------------------*/
/* Dodanie opcji szablonu
/*-----------------------------------------------------------------------------------*/

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'DD Carbon',
		'menu_title'	=> 'Główne ustawienia',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}



