<?php
	/*
	Plugin Name: Set WordPress image alt-text
	Description: Automatically add alt-txt from image caption
	Author: Andi Elliott | brandedPixels
	Author URI: https://www.www.brandedpixels.co.uk?utm_src=set_wordpress_image_alt_text
	*/
	

	add_action( 'add_attachment', 'brpx_set_wordpress_image_alt_text' );
	function brpx_set_wordpress_image_alt_text( $post_ID ) {
		
		// Check if uploaded file is an image, else do nothing
		
		if ( wp_attachment_is_image( $post_ID ) ) {
			
			$attachment_data = get_post( $post_ID );

			update_post_meta( $post_ID, '_wp_attachment_image_alt', $attachment_data->post_excerpt );
			
		}
	}

?>