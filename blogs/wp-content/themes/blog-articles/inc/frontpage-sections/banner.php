<?php
/**
 * Template part for displaying front page introduction.
 *
 * @package Blog Articles
 */

// Banner Section.
$banner_section = get_theme_mod( 'blog_articles_banner_section_enable', false );

if ( false === $banner_section ) {
	return;
}

$main_banner_content_ids  = $editor_pick_content_ids = array();
$main_banner_content_type = get_theme_mod( 'blog_articles_main_banner_content_type', 'post' );
$editor_pick_content_type = get_theme_mod( 'blog_articles_banner_editor_pick_content_type', 'post' );

if ( $editor_pick_content_type === 'post' ) {

	for ( $i = 1; $i <= 4; $i++ ) {
		$editor_pick_content_ids[] = get_theme_mod( 'blog_articles_banner_editor_pick_post_' . $i );
	}

	$editor_pick_args = array(
		'post_type'           => 'post',
		'posts_per_page'      => absint( 4 ),
		'ignore_sticky_posts' => true,
	);

	if ( ! empty( array_filter( $editor_pick_content_ids ) ) ) {
		$editor_pick_args['post__in'] = array_filter( $editor_pick_content_ids );
		$editor_pick_args['orderby']  = 'post__in';
	} else {
		$editor_pick_args['orderby'] = 'date';
	}
} else {
	$cat_content_id   = get_theme_mod( 'blog_articles_banner_editor_pick_category' );
	$editor_pick_args = array(
		'cat'            => $cat_content_id,
		'posts_per_page' => absint( 4 ),
	);
}

if ( $main_banner_content_type === 'post' ) {

	for ( $i = 1; $i <= 3; $i++ ) {
		$main_banner_content_ids[] = get_theme_mod( 'blog_articles_main_banner_post_' . $i );
	}

	$main_banner_args = array(
		'post_type'           => 'post',
		'posts_per_page'      => absint( 3 ),
		'ignore_sticky_posts' => true,
	);

	if ( ! empty( array_filter( $main_banner_content_ids ) ) ) {
		$main_banner_args['post__in'] = array_filter( $main_banner_content_ids );
		$main_banner_args['orderby']  = 'post__in';
	} else {
		$main_banner_args['orderby'] = 'date';
	}
} else {
	$cat_content_id   = get_theme_mod( 'blog_articles_main_banner_category' );
	$main_banner_args = array(
		'cat'            => $cat_content_id,
		'posts_per_page' => absint( 3 ),
	);
}

?>

<div id="blog_articles_banner_section" class="frontpage banner-section">
	<div class="theme-wrapper">

		<?php
		require get_template_directory() . '/inc/frontpage-sections/banner/editor-picks.php';
		require get_template_directory() . '/inc/frontpage-sections/banner/main-banner.php';
		?>

	</div>
</div>
