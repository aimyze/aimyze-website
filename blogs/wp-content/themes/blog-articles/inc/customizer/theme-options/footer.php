<?php
/**
 * Footer copyright
 */

// Footer copyright
$wp_customize->add_section(
	'blog_articles_footer_section',
	array(
		'title' => esc_html__( 'Footer Options', 'blog-articles' ),
		'panel' => 'blog_articles_theme_options_panel',
	)
);

$copyright_default = sprintf( esc_html_x( 'Copyright &copy; %1$s %2$s', '1: Year, 2: Site Title with home URL', 'blog-articles' ), '[the-year]', '[site-link]' );

// Footer copyright setting.
$wp_customize->add_setting(
	'blog_articles_copyright_txt',
	array(
		'default'           => $copyright_default,
		'sanitize_callback' => 'blog_articles_sanitize_html',
	)
);

$wp_customize->add_control(
	'blog_articles_copyright_txt',
	array(
		'label'   => esc_html__( 'Copyright text', 'blog-articles' ),
		'section' => 'blog_articles_footer_section',
		'type'    => 'textarea',
	)
);
