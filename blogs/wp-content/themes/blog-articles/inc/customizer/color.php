<?php

/**
 * Color Options
 */

// Site tagline color setting.
$wp_customize->add_setting(
	'blog_articles_header_tagline',
	array(
		'default'           => '#000000',
		'sanitize_callback' => 'blog_articles_sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'blog_articles_header_tagline',
		array(
			'label'   => esc_html__( 'Site tagline Color', 'blog-articles' ),
			'section' => 'colors',
		)
	)
);
