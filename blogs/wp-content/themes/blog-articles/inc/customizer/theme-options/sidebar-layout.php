<?php
/**
 * Sidebar settings
 */

$wp_customize->add_section(
	'blog_articles_sidebar_option',
	array(
		'title' => esc_html__( 'Sidebar Options', 'blog-articles' ),
		'panel' => 'blog_articles_theme_options_panel',
	)
);

// Sidebar Option - Global Sidebar Position.
$wp_customize->add_setting(
	'blog_articles_sidebar_position',
	array(
		'sanitize_callback' => 'blog_articles_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'blog_articles_sidebar_position',
	array(
		'label'   => esc_html__( 'Global Sidebar Position', 'blog-articles' ),
		'section' => 'blog_articles_sidebar_option',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'blog-articles' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'blog-articles' ),
		),
	)
);

// Sidebar Option - Post Sidebar Position.
$wp_customize->add_setting(
	'blog_articles_post_sidebar_position',
	array(
		'sanitize_callback' => 'blog_articles_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'blog_articles_post_sidebar_position',
	array(
		'label'   => esc_html__( 'Post Sidebar Position', 'blog-articles' ),
		'section' => 'blog_articles_sidebar_option',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'blog-articles' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'blog-articles' ),
		),
	)
);

// Sidebar Option - Page Sidebar Position.
$wp_customize->add_setting(
	'blog_articles_page_sidebar_position',
	array(
		'sanitize_callback' => 'blog_articles_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'blog_articles_page_sidebar_position',
	array(
		'label'   => esc_html__( 'Page Sidebar Position', 'blog-articles' ),
		'section' => 'blog_articles_sidebar_option',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'blog-articles' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'blog-articles' ),
		),
	)
);
