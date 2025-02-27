<?php
/**
 * Single Post Options
 */

$wp_customize->add_section(
	'blog_articles_single_page_options',
	array(
		'title' => esc_html__( 'Single Post Options', 'blog-articles' ),
		'panel' => 'blog_articles_theme_options_panel',
	)
);

// Enable single post category setting.
$wp_customize->add_setting(
	'blog_articles_enable_single_category',
	array(
		'default'           => true,
		'sanitize_callback' => 'blog_articles_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Blog_Articles_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'blog_articles_enable_single_category',
		array(
			'label'    => esc_html__( 'Enable Category', 'blog-articles' ),
			'settings' => 'blog_articles_enable_single_category',
			'section'  => 'blog_articles_single_page_options',
			'type'     => 'checkbox',
		)
	)
);

// Enable single post author setting.
$wp_customize->add_setting(
	'blog_articles_enable_single_author',
	array(
		'default'           => true,
		'sanitize_callback' => 'blog_articles_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Blog_Articles_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'blog_articles_enable_single_author',
		array(
			'label'    => esc_html__( 'Enable Author', 'blog-articles' ),
			'settings' => 'blog_articles_enable_single_author',
			'section'  => 'blog_articles_single_page_options',
			'type'     => 'checkbox',
		)
	)
);

// Enable single post date setting.
$wp_customize->add_setting(
	'blog_articles_enable_single_date',
	array(
		'default'           => true,
		'sanitize_callback' => 'blog_articles_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Blog_Articles_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'blog_articles_enable_single_date',
		array(
			'label'    => esc_html__( 'Enable Date', 'blog-articles' ),
			'settings' => 'blog_articles_enable_single_date',
			'section'  => 'blog_articles_single_page_options',
			'type'     => 'checkbox',
		)
	)
);

// Enable single post tag setting.
$wp_customize->add_setting(
	'blog_articles_enable_single_tag',
	array(
		'default'           => true,
		'sanitize_callback' => 'blog_articles_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Blog_Articles_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'blog_articles_enable_single_tag',
		array(
			'label'    => esc_html__( 'Enable Post Tag', 'blog-articles' ),
			'settings' => 'blog_articles_enable_single_tag',
			'section'  => 'blog_articles_single_page_options',
			'type'     => 'checkbox',
		)
	)
);

// Single post related Posts title label.
$wp_customize->add_setting(
	'blog_articles_related_posts_title',
	array(
		'default'           => __( 'Related Posts', 'blog-articles' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'blog_articles_related_posts_title',
	array(
		'label'           => esc_html__( 'Related Posts Title', 'blog-articles' ),
		'section'         => 'blog_articles_single_page_options',
		'settings'        => 'blog_articles_related_posts_title',
	)
);

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'blog_articles_related_posts_title',
		array(
			'selector'            => '.primary-site-content .related-posts h2.related-title',
			'settings'            => 'blog_articles_related_posts_title',
			'container_inclusive' => false,
			'fallback_refresh'    => true,
		)
	);
}
