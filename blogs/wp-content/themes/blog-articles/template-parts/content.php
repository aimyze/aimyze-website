<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blog Articles
 */

$archive_category = get_theme_mod( 'blog_articles_enable_archive_category', true );
$archive_author   = get_theme_mod( 'blog_articles_enable_archive_author', true );
$archive_date     = get_theme_mod( 'blog_articles_enable_archive_date', true );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-item post-overlay-grid">
		<div class="post-item-image">
			<?php blog_articles_post_thumbnail(); ?>
		</div>
		<div class="post-item-content">
			<div class="entry-cat">
				<?php if ( $archive_category === true ) : ?>
					<?php the_category( '', '', get_the_ID() ); ?>
				<?php endif; ?>
				<span class="reading-time">
					<?php
					echo blog_articles_time_interval( get_the_content() );
					echo esc_html__( ' min read', 'blog-articles' );
					?>
				</span>
			</div>
			<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;
			?>
			<ul class="entry-meta">
				<?php if ( $archive_author === true ) : ?>
					<li class="post-author"> 
						<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><i class="far fa-user"></i><?php echo esc_html( get_the_author() ); ?></a>
					</li>
				<?php endif; ?>
				<?php if ( $archive_date === true ) : ?>
					<li class="post-date"><i class="far fa-calendar-alt"></i><?php echo esc_html( get_the_date() ); ?></li>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
