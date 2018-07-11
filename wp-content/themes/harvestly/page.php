<?php get_header(); ?>
				<div class="col-md-9 nath-post">
					<?php if(have_posts()): ?>
						<?php
							while(have_posts()) : the_post();
								get_template_part( 'template-parts/content', 'page' );
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
							endwhile;
						?>
					<?php endif; ?>
				</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>