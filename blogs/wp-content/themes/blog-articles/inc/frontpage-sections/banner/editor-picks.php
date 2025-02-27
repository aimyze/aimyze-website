<?php 
$editor_pick_query = new WP_Query( $editor_pick_args );
if ( $editor_pick_query->have_posts() ) {
	?>
	<div class="editor-picks-section">
		<div class="editor-wrapper">
			<?php
			while ( $editor_pick_query->have_posts() ) :
				$editor_pick_query->the_post();
				?>
				<div class="post-item post-list editor-list small-list">
					<?php if ( has_post_thumbnail() ) { ?>
						<div class="post-item-image">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail( 'post-thumbnail' ); ?>
							</a>
						</div>
					<?php } ?>
					<div class="post-item-content">
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
