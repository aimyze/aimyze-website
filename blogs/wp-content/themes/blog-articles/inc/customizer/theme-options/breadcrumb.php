<?php
/**
 * Breadcrumb settings
 */

$wp_customize->add_section(
	'blog_articles_breadcrumb_section',
	array(
		'title' => esc_html__( 'Breadcrumb Options', 'blog-articles' ),
		'panel' => 'blog_articles_theme_options_panel',
	)
);

// Breadcrumb enable setting.
$wp_customize->add_setting(
	'blog_articles_breadcrumb_enable',
	array(
		'default'           => true,
		'sanitize_callback' => 'blog_articles_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Blog_Articles_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'blog_articles_breadcrumb_enable',
		array(
			'label'    => esc_html__( 'Enable breadcrumb.', 'blog-articles' ),
			'type'     => 'checkbox',
			'settings' => 'blog_articles_breadcrumb_enable',
			'section'  => 'blog_articles_breadcrumb_section',
		)
	)
);

// Breadcrumb - Separator.
$wp_customize->add_setting(
	'blog_articles_breadcrumb_separator',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default'           => '/',
	)
);

$wp_customize->add_control(
	'blog_articles_breadcrumb_separator',
	array(
		'label'           => esc_html__( 'Separator', 'blog-articles' ),
		'section'         => 'blog_articles_breadcrumb_section',
		'active_callback' => function( $control ) {
			return ( $control->manager->get_setting( 'blog_articles_breadcrumb_enable' )->value() );
		},
	)
);
