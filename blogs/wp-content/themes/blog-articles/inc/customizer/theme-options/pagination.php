<?php
/**
 * Pagination setting
 */

// Pagination setting.
$wp_customize->add_section(
	'blog_articles_pagination',
	array(
		'title' => esc_html__( 'Pagination', 'blog-articles' ),
		'panel' => 'blog_articles_theme_options_panel',
	)
);

// Pagination enable setting.
$wp_customize->add_setting(
	'blog_articles_pagination_enable',
	array(
		'default'           => true,
		'sanitize_callback' => 'blog_articles_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Blog_Articles_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'blog_articles_pagination_enable',
		array(
			'label'    => esc_html__( 'Enable Pagination.', 'blog-articles' ),
			'settings' => 'blog_articles_pagination_enable',
			'section'  => 'blog_articles_pagination',
			'type'     => 'checkbox',
		)
	)
);

// Pagination - Pagination Style.
$wp_customize->add_setting(
	'blog_articles_pagination_type',
	array(
		'default'           => 'numeric',
		'sanitize_callback' => 'blog_articles_sanitize_select',
	)
);

$wp_customize->add_control(
	'blog_articles_pagination_type',
	array(
		'label'           => esc_html__( 'Pagination Style', 'blog-articles' ),
		'section'         => 'blog_articles_pagination',
		'type'            => 'select',
		'choices'         => array(
			'default' => __( 'Default (Older/Newer)', 'blog-articles' ),
			'numeric' => __( 'Numeric', 'blog-articles' ),
		),
		'active_callback' => 'blog_articles_pagination_enabled',
	)
);

/*========================Active Callback==============================*/
function blog_articles_pagination_enabled( $control ) {
	return $control->manager->get_setting( 'blog_articles_pagination_enable' )->value();
}
