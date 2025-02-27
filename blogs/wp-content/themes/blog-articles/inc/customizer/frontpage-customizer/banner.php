<?php
/**
 * Adore Themes Customizer
 *
 * @package Blog Articles
 *
 * Banner Section
 */

$wp_customize->add_section(
	'blog_articles_banner_section',
	array(
		'title' => esc_html__( 'Banner Section', 'blog-articles' ),
		'panel' => 'blog_articles_frontpage_panel',
	)
);

// Banner enable setting.
$wp_customize->add_setting(
	'blog_articles_banner_section_enable',
	array(
		'default'           => false,
		'sanitize_callback' => 'blog_articles_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Blog_Articles_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'blog_articles_banner_section_enable',
		array(
			'label'    => esc_html__( 'Enable Banner Section', 'blog-articles' ),
			'type'     => 'checkbox',
			'settings' => 'blog_articles_banner_section_enable',
			'section'  => 'blog_articles_banner_section',
		)
	)
);

// Editor Pick Sub Heading.
$wp_customize->add_setting(
	'blog_articles_banner_editor_pick_sub_heading',
	array(
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	new Blog_Articles_Sub_Section_Heading_Custom_Control(
		$wp_customize,
		'blog_articles_banner_editor_pick_sub_heading',
		array(
			'label'           => esc_html__( 'Editor Pick Section', 'blog-articles' ),
			'settings'        => 'blog_articles_banner_editor_pick_sub_heading',
			'section'         => 'blog_articles_banner_section',
			'active_callback' => 'blog_articles_if_banner_enabled',
		)
	)
);

// banner main banner content type settings.
$wp_customize->add_setting(
	'blog_articles_banner_editor_pick_content_type',
	array(
		'default'           => 'post',
		'sanitize_callback' => 'blog_articles_sanitize_select',
	)
);

$wp_customize->add_control(
	'blog_articles_banner_editor_pick_content_type',
	array(
		'label'           => esc_html__( 'Editor Pick Content type:', 'blog-articles' ),
		'description'     => esc_html__( 'Choose where you want to render the content from.', 'blog-articles' ),
		'section'         => 'blog_articles_banner_section',
		'settings'        => 'blog_articles_banner_editor_pick_content_type',
		'type'            => 'select',
		'active_callback' => 'blog_articles_if_banner_enabled',
		'choices'         => array(
			'post'     => esc_html__( 'Post', 'blog-articles' ),
			'category' => esc_html__( 'Category', 'blog-articles' ),
		),
	)
);

for ( $i = 1; $i <= 4; $i++ ) {
	// Editor Pick post setting.
	$wp_customize->add_setting(
		'blog_articles_banner_editor_pick_post_' . $i,
		array(
			'sanitize_callback' => 'blog_articles_sanitize_dropdown_pages',
		)
	);

	$wp_customize->add_control(
		'blog_articles_banner_editor_pick_post_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Post %d', 'blog-articles' ), $i ),
			'section'         => 'blog_articles_banner_section',
			'type'            => 'select',
			'choices'         => blog_articles_get_post_choices(),
			'active_callback' => 'blog_articles_banner_editor_pick_content_type_post_enabled',
		)
	);

}

// Editor Pick category setting.
$wp_customize->add_setting(
	'blog_articles_banner_editor_pick_category',
	array(
		'sanitize_callback' => 'blog_articles_sanitize_select',
	)
);

$wp_customize->add_control(
	'blog_articles_banner_editor_pick_category',
	array(
		'label'           => esc_html__( 'Category', 'blog-articles' ),
		'section'         => 'blog_articles_banner_section',
		'type'            => 'select',
		'choices'         => blog_articles_get_post_cat_choices(),
		'active_callback' => 'blog_articles_banner_editor_pick_content_type_category_enabled',
	)
);

// Main Banner Sub Heading.
$wp_customize->add_setting(
	'blog_articles_main_banner_sub_heading',
	array(
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	new Blog_Articles_Sub_Section_Heading_Custom_Control(
		$wp_customize,
		'blog_articles_main_banner_sub_heading',
		array(
			'label'           => esc_html__( 'Main Banner Section', 'blog-articles' ),
			'settings'        => 'blog_articles_main_banner_sub_heading',
			'section'         => 'blog_articles_banner_section',
			'active_callback' => 'blog_articles_if_banner_enabled',
		)
	)
);

// banner main banner content type settings.
$wp_customize->add_setting(
	'blog_articles_main_banner_content_type',
	array(
		'default'           => 'post',
		'sanitize_callback' => 'blog_articles_sanitize_select',
	)
);

$wp_customize->add_control(
	'blog_articles_main_banner_content_type',
	array(
		'label'           => esc_html__( 'Main Banner Content type:', 'blog-articles' ),
		'description'     => esc_html__( 'Choose where you want to render the content from.', 'blog-articles' ),
		'section'         => 'blog_articles_banner_section',
		'settings'        => 'blog_articles_main_banner_content_type',
		'type'            => 'select',
		'active_callback' => 'blog_articles_if_banner_enabled',
		'choices'         => array(
			'post'     => esc_html__( 'Post', 'blog-articles' ),
			'category' => esc_html__( 'Category', 'blog-articles' ),
		),
	)
);

for ( $i = 1; $i <= 3; $i++ ) {
	// Main Banner post setting.
	$wp_customize->add_setting(
		'blog_articles_main_banner_post_' . $i,
		array(
			'sanitize_callback' => 'blog_articles_sanitize_dropdown_pages',
		)
	);

	$wp_customize->add_control(
		'blog_articles_main_banner_post_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Post %d', 'blog-articles' ), $i ),
			'section'         => 'blog_articles_banner_section',
			'type'            => 'select',
			'choices'         => blog_articles_get_post_choices(),
			'active_callback' => 'blog_articles_main_banner_content_type_post_enabled',
		)
	);

}

// Main Banner category setting.
$wp_customize->add_setting(
	'blog_articles_main_banner_category',
	array(
		'sanitize_callback' => 'blog_articles_sanitize_select',
	)
);

$wp_customize->add_control(
	'blog_articles_main_banner_category',
	array(
		'label'           => esc_html__( 'Category', 'blog-articles' ),
		'section'         => 'blog_articles_banner_section',
		'type'            => 'select',
		'choices'         => blog_articles_get_post_cat_choices(),
		'active_callback' => 'blog_articles_main_banner_content_type_category_enabled',
	)
);

/*========================Active Callback==============================*/
function blog_articles_if_banner_enabled( $control ) {
	return $control->manager->get_setting( 'blog_articles_banner_section_enable' )->value();
}
// Banner Editor Pick
function blog_articles_banner_editor_pick_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'blog_articles_banner_editor_pick_content_type' )->value();
	return blog_articles_if_banner_enabled( $control ) && ( 'post' === $content_type );
}
function blog_articles_banner_editor_pick_content_type_category_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'blog_articles_banner_editor_pick_content_type' )->value();
	return blog_articles_if_banner_enabled( $control ) && ( 'category' === $content_type );
}
// Banner Main Banner
function blog_articles_main_banner_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'blog_articles_main_banner_content_type' )->value();
	return blog_articles_if_banner_enabled( $control ) && ( 'post' === $content_type );
}
function blog_articles_main_banner_content_type_category_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'blog_articles_main_banner_content_type' )->value();
	return blog_articles_if_banner_enabled( $control ) && ( 'category' === $content_type );
}
