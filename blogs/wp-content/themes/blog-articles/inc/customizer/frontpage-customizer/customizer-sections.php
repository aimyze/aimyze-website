<?php

// Home Page Customizer panel.
$wp_customize->add_panel(
	'blog_articles_frontpage_panel',
	array(
		'title'    => esc_html__( 'Frontpage Sections', 'blog-articles' ),
		'priority' => 140,
	)
);

$customizer_settings = array( 'banner', 'posts-grid' );

foreach ( $customizer_settings as $customizer ) {

	require get_template_directory() . '/inc/customizer/frontpage-customizer/' . $customizer . '.php';

}
