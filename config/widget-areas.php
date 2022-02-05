<?php

add_filter(
	'headlesswp_customizer_widget_areas',
	function( $array ) {
		unset( $array['sidebar_widgets'] );
		return $array;
	}
);

add_filter( 'headlesswp_customizer_archive_sidebar_position', '__return_false' );