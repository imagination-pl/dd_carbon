<?php

/*-----------------------------------------------------------------------------------*/
/* Dodanie obsługi nowych rozmiarów obrazków
/*-----------------------------------------------------------------------------------*/
add_image_size( 'dd100', 100, 100, false );
add_image_size( 'dd150', 150, 150, false );
add_image_size( 'dd200', 200, 200, false );
add_image_size( 'dd300', 300, 300, false );
add_image_size( 'dd400', 400, 400, false );
add_image_size( 'dd500', 500, 500, false );
add_image_size( 'dd600', 600, 600, false );
add_image_size( 'dd700', 700, 700, false );
add_image_size( 'dd800', 800, 800, false );
add_image_size( 'dd900', 900, 900, false );
add_image_size( 'dd1200', 1200, 1200, false );
add_image_size( 'dd1400', 1400, 1400, false );


/*-----------------------------------------------------------------------------------*/
/* Dodanie obsługi nowych rozmiarów obrazków
/*-----------------------------------------------------------------------------------*/
function get_image_url($post_id, $size){
	$image = wp_get_attachment_image_src($post_id, $size);
	$image_url = $image[0];
	return $image_url;
}


?>
