<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="bg-dark text-white p-5 text-center">
        <div class="container">
            <h1>Settings for your Gatsby website</h1>
            <p>Hi! welcome to the Customizer Area. You can configure your website for Gatsby here.</p>
        </div>
    </header>
    <div class="container pt-4">
        <?php site_identity_in_documentation( $headlesswp_customizer_config ); ?>
        <?php general_settings_in_documentation( $headlesswp_customizer_config ); ?>
        <?php social_follows_in_documentation( $headlesswp_customizer_config ); ?>
        <?php widgets_in_documentation( $headlesswp_customizer_config ); ?>
        <section class="mb-5">
            <h2 class="fs-5 border-bottom border-dark">CSS Theme</h2>
            <p>You can set your Gatsby theme colors here. Below, you can quickly preview certain of the text -
                background color pairings.</p>
            <h3 class="fs-6">Default Mode (light)</h3>
            <?php

					$pairings = array(
						array( 'text', 'bg', 'Body' ),
						array( 'headerColor', 'headerBg', 'Header' ),
						array( 'footerColor', 'footerBg', 'Footer' ),
						array( 'sidebarColor', 'sidebarBg', 'Sidebar' ),
						array( 'cardColor', 'cardBg', 'Card', '', 'border: .75rem solid var(--headlesswp-colors-cardBorder); box-shadow: rgb(0 0 0 / 10%) 0px 20px 40px -10px;' ),
						array( 'commentsColor', 'commentsBg', 'Comments' ),
					);
					foreach ( $pairings as $pairing ) {
						$text  = isset( $pairing[3] ) ? $pairing[3] : '';
						$style = isset( $pairing[4] ) ? $pairing[4] : '';
						preview_colors_pairing( "headlesswp-colors-$pairing[0]", "headlesswp-colors-$pairing[1]", $pairing[2], $text, $style );
					}
					?>
        </section>
    </div>
    <div class="bg-dark text-white">
        <div class="container py-5">
            <h3>Dark Mode</h3>
            <?php
			$pairings[4][4] = 'border: .75rem solid var(--headlesswp-colors-mode-dark-cardBorder); box-shadow: rgb(0 0 0 / 10%) 0px 20px 40px -10px;';
			foreach ( $pairings as $pairing ) {
				$text  = isset( $pairing[3] ) ? $pairing[3] : '';
				$style = isset( $pairing[4] ) ? $pairing[4] : '';
				preview_colors_pairing( "headlesswp-colors-mode-dark-$pairing[0]", "headlesswp-colors-mode-dark-$pairing[1]", $pairing[2], $text, $style );
			}
			?>
        </div>
    </div>
    <?php wp_footer(); ?>
</body>

</html>