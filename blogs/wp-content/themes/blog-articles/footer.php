<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blog Articles
 */

?>

</div>

<?php

if ( is_singular( 'post' ) ) {
	$args = array(
		'posts_per_page' => absint( 4 ),
		'post__not_in'   => array( $post->ID ),
		'orderby'        => 'rand',
	);

	$cat_content_id = get_the_category( $post->ID );
	if ( ! empty( $cat_content_id ) ) {
		$args['cat'] = $cat_content_id[0]->term_id;
	}

	$query = new WP_Query( $args );

	if ( $query->have_posts() ) :
		$related_title = get_theme_mod( 'blog_articles_related_posts_title', __( 'Related Posts', 'blog-articles' ) );
		?>
		<div class="related-posts">
			<?php if ( ! empty( $related_title ) ) : ?>
				<h2 class="related-title"><?php echo esc_html( $related_title ); ?></h2>
			<?php endif; ?>
			<div class="theme-archive-layout grid-layout grid-column-4">
				<?php
				while ( $query->have_posts() ) :
					$query->the_post();
					?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
									<li class="post-author"> 
										<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><i class="far fa-user"></i><?php echo esc_html( get_the_author() ); ?></a>
									</li>
									<li class="post-date"><i class="far fa-calendar-alt"></i><?php echo esc_html( get_the_date() ); ?></li>
								</ul>
							</div>
						</div>
					</article>
					<?php
				endwhile;
				wp_reset_postdata();
				?>
			</div>
		</div>
		<?php
	endif;
}

?>
<?php if ( ! is_front_page() || is_home() ) { ?>
</div>
</div><!-- #content -->

<?php
if ( is_front_page() ) {

	require get_template_directory() . '/inc/frontpage-sections/posts-grid.php';
	
}
}

?>
<footer id="colophon" class="site-footer">
	<?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' ) ) : ?>
	<div class="top-footer">
		<div class="theme-wrapper">
			<div class="top-footer-widgets">

				<?php for ( $i = 1; $i <= 4; $i++ ) { ?>
					<div class="footer-widget">
						<?php dynamic_sidebar( 'footer-' . $i ); ?>
					</div>
				<?php } ?>

			</div>
		</div>
	</div>
<?php endif; ?>
<?php
$blog_articles_search = array( '[the-year]', '[site-link]' );
$replace              = array( date( 'Y' ), '<a href="' . esc_url( home_url( '/' ) ) . '">' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '</a>' );
$copyright_default    = sprintf( esc_html_x( 'Copyright &copy; %1$s %2$s', '1: Year, 2: Site Title with home URL', 'blog-articles' ), '[the-year]', '[site-link]' );
$copyright_text       = get_theme_mod( 'blog_articles_copyright_txt', $copyright_default );
$copyright_text       = str_replace( $blog_articles_search, $replace, $copyright_text );
?>
<div class="bottom-footer">
	<div class="theme-wrapper">
		<div class="bottom-footer-info no-footer-social-menu">
			<?php if ( ! empty( $copyright_text ) ) : ?>
				<div class="site-info">
					<span><?php echo wp_kses_post( $copyright_text ); ?></span>	
				</div><!-- .site-info -->
			<?php endif ?>
		</div>
	</div>
</div>
</footer><!-- #colophon -->

<a href="#" id="scroll-to-top" class="blog-articles-scroll-to-top"></a>		

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
