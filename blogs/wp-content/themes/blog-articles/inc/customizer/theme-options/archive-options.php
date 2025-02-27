<?php
/**
 * Blog / Archive Options
 */

$wp_customize->add_section(
	'blog_articles_archive_page_options',
	array(
		'title' => esc_html__( 'Blog / Archive Pages Options', 'blog-articles' ),
		'panel' => 'blog_articles_theme_options_panel',
	)
);

// Grid Column layout options.
$wp_customize->add_setting(
	'blog_articles_archive_grid_column_layout',
	array(
		'default'           => 'grid-column-2',
		'sanitize_callback' => 'blog_articles_sanitize_select',
	)
);

$wp_customize->add_control(
	'blog_articles_archive_grid_column_layout',
	array(
		'label'   => esc_html__( 'Grid Column Layout', 'blog-articles' ),
		'section' => 'blog_articles_archive_page_options',
		'type'    => 'select',
		'choices' => array(
			'grid-column-2' => __( 'Column 2', 'blog-articles' ),
			'grid-column-3' => __( 'Column 3', 'blog-articles' ),
		),
	)
);

// Enable archive page category setting.
$wp_customize->add_setting(
	'blog_articles_enable_archive_category',
	array(
		'default'           => true,
		'sanitize_callback' => 'blog_articles_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Blog_Articles_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'blog_articles_enable_archive_category',
		array(
			'label'    => esc_html__( 'Enable Category', 'blog-articles' ),
			'settings' => 'blog_articles_enable_archive_category',
			'section'  => 'blog_articles_archive_page_options',
			'type'     => 'checkbox',
		)
	)
);

// Enable archive page author setting.
$wp_customize->add_setting(
	'blog_articles_enable_archive_author',
	array(
		'default'           => true,
		'sanitize_callback' => 'blog_articles_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Blog_Articles_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'blog_articles_enable_archive_author',
		array(
			'label'    => esc_html__( 'Enable Author', 'blog-articles' ),
			'settings' => 'blog_articles_enable_archive_author',
			'section'  => 'blog_articles_archive_page_options',
			'type'     => 'checkbox',
		)
	)
);

// Enable archive page date setting.
$wp_customize->add_setting(
	'blog_articles_enable_archive_date',
	array(
		'default'           => true,
		'sanitize_callback' => 'blog_articles_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Blog_Articles_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'blog_articles_enable_archive_date',
		array(
			'label'    => esc_html__( 'Enable Date', 'blog-articles' ),
			'settings' => 'blog_articles_enable_archive_date',
			'section'  => 'blog_articles_archive_page_options',
			'type'     => 'checkbox',
		)
	)
);
