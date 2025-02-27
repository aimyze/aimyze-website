<?php 
$main_banner_query = new WP_Query( $main_banner_args );
if ( $main_banner_query->have_posts() ) {
	?>
	<div class="main-banner-section">
		<div class="banner-section-wrapper">
			<?php
			while ( $main_banner_query->have_posts() ) :
				$main_banner_query->the_post();
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
							<li class="post-author"> 
								<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><i class="far fa-user"></i><?php echo esc_html( get_the_author() ); ?></a>
							</li>
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
	<?php
}
