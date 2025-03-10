<?php
/**
 * Template part for displaying front page introduction.
 *
 * @package Blog Articles
 */

// Posts Grid Section.
$posts_grid_section = get_theme_mod( 'blog_articles_posts_grid_section_enable', false );

if ( false === $posts_grid_section ) {
	return;
}

$content_ids = array();

$posts_grid_content_type = get_theme_mod( 'blog_articles_posts_grid_content_type', 'post' );

if ( $posts_grid_content_type === 'post' ) {

	for ( $i = 1; $i <= 3; $i++ ) {
		$content_ids[] = get_theme_mod( 'blog_articles_posts_grid_post_' . $i );
	}

	$args = array(
		'post_type'           => 'post',
		'posts_per_page'      => absint( 3 ),
		'ignore_sticky_posts' => true,
	);
	if ( ! empty( array_filter( $content_ids ) ) ) {
		$args['post__in'] = array_filter( $content_ids );
		$args['orderby']  = 'post__in';
	} else {
		$args['orderby'] = 'date';
	}
} else {
	$cat_content_id = get_theme_mod( 'blog_articles_posts_grid_category' );
	$args           = array(
		'cat'            => $cat_content_id,
		'posts_per_page' => absint( 3 ),
	);
}

$query = new WP_Query( $args );
if ( $query->have_posts() ) {

	$section_title    = get_theme_mod( 'blog_articles_posts_grid_title', __( 'Latest Posts', 'blog-articles' ) );
	$viewall_btn      = get_theme_mod( 'blog_articles_posts_grid_view_all_button_label', __( 'View All', 'blog-articles' ) );
	$viewall_btn_link = get_theme_mod( 'blog_articles_posts_grid_view_all_button_url', '#' );
	?>
	<div id="blog_articles_posts_grid_section" class="frontpage post-grid-section three-column">
		<div class="theme-wrapper">
			<?php if ( ! empty( $section_title || $viewall_btn ) ) : ?>
				<div class="section-head">
					<div class="section-header">
						<h3 class="section-title"><?php echo esc_html( $section_title ); ?></h3>
					</div>
					<?php if ( ! empty( $viewall_btn ) ) { ?>
						<a href="<?php echo esc_url( $viewall_btn_link ); ?>" class="adore-view-all"><?php echo esc_html( $viewall_btn ); ?></a>
					<?php } ?>
				</div>
			<?php endif; ?>
			<div class="post-grid-wrapper">
				<?php
				while ( $query->have_posts() ) :
					$query->the_post();
					?>
					<div class="post-item post-overlay-grid">
						<?php if ( has_post_thumbnail() ) { ?>
						<div class="post-item-image">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail( 'post-thumbnail' ); ?>
							</a>
						</div>
						<?php } ?>
						<div class="post-item-content">
							<div class="entry-cat">
								<?php the_category( '', '', get_the_ID() ); ?>
								<span class="reading-time">
									<?php
									echo blog_articles_time_interval( get_the_content() );
									echo esc_html__( ' min read', 'blog-articles' );
									?>
								</span>
							</div>
							<h3 class="entry-title">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h3>  
							<ul class="entry-meta">
								<li class="post-author"> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><i class="far fa-user"></i><?php echo esc_html( get_the_author() ); ?></a></li>
								<li class="post-date"><i class="far fa-calendar-alt"></i><?php echo esc_html( get_the_date() ); ?></li>
							</ul>
						</div>
					</div>
					<?php
				endwhile;
				wp_reset_postdata();
				?>
			</div>
		</div>
	</div>

	<?php
}
