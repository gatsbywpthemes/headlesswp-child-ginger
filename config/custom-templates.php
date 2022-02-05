<?php

add_filter(
	'headlesswp_page_templates',
	function( $array ) {
		/*
		default $array is as below
		array(
			'post' => array(
				'post_type' => 'post',
				'choices'   => array(
					array(
						'value' => 'full',
						'label' => __( 'Full Width', 'headlesswp' ),
					),
					array(
						'value' => 'right',
						'label' => __( 'Right Sidebar', 'headlesswp' ),
					),
					array(
						'value' => 'left',
						'label' => __( 'Left Sidebar', 'headlesswp' ),
					),
				),
			),
			'page' => array(
				'post_type' => 'page',
				'choices'   => array(
					array(
						'value' => 'full',
						'label' => __( 'Full Width', 'headlesswp' ),
					),
					array(
						'value' => 'right',
						'label' => __( 'Right Sidebar', 'headlesswp' ),
					),
					array(
						'value' => 'left',
						'label' => __( 'Left Sidebar', 'headlesswp' ),
					),
				),
			),
		);
		*/
		// modify $array or create new and return
		// ex. return false if custom templates are not supported
		// ex. remove post type entry if not supported
		unset( $array['page'] );
		return $array;
	}
);
