<?php
$headlesswp_plugins = add_filter(
	'headlesswp_plugins',
	function ( $array ) {
		/*
		array(
		'wp-gatsby'         => array(
		'slug'      => 'wp-gatsby',
		'name'      => 'WP Gatsby',
		'source'    => 'repo',
		'file_path' => 'wp-gatsby/wp-gatsby.php',
		'required'  => true,
		),
		'wp-graphql'        => array(
		'slug'      => 'wp-graphql',
		'name'      => 'WPGraphQL',
		'source'    => 'repo',
		'file_path' => 'wp-graphql/wp-graphql.php',
		'required'  => true,
		),
		'contact-form-7'    => array(
		'slug'        => 'contact-form-7',
		'name'        => 'Contact Form 7',
		'source'      => 'repo',
		'file_path'   => 'contact-form-7/wp-contact-form-7.php',
		'required'    => false,
		'description' => __( 'If you want to set up a contact form on your website, make sure to use Contact Form 7. For the moment, Contact Form 7 is the only WordPress plugin compatible with our Gatsby themes.', 'headlesswp' ),
		),
		'wordpress-seo'     => array(
		'slug'      => 'wordpress-seo',
		'name'      => 'Yoast SEO',
		'source'    => 'repo',
		'file_path' => 'wordpress-seo/wp-seo.php',
		'required'  => false,
		),
		'add-wpgraphql-seo' => array(
		'slug'        => 'add-wpgraphql-seo',
		'name'        => 'Add WPGraphQL SEO',
		'source'      => 'repo',
		'file_path'   => 'add-wpgraphql-seo/wp-graphql-yoast-seo.php',
		'required'    => false,
		'description' => 'fjakfo jfaiofjoq',
		),
		'code-syntax-block' => array(
		'slug'      => 'code-syntax-block',
		'name'      => 'Code Syntax Block',
		'source'    => 'repo',
		'file_path' => 'code-syntax-block/index.php',
		'required'  => false,
		),
		)
		*/
		return $array;
	}
);
