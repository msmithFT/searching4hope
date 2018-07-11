<?php get_header(); ?>
				<div class="col-md-9 nath-post">
					<?php if(have_posts()): ?>
						<?php
							while(have_posts()) : the_post();
								get_template_part('template-parts/content', get_post_format());
							endwhile;
						?>
						<?php
							the_posts_pagination( array(
								'mid_size'	=> 1,
								'prev_text' => '<i class="fa fa-long-arrow-left"></i>',
								'next_text' => '<i class="fa fa-long-arrow-right"></i>'
							) );
						?>
					<?php endif; ?>
				</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>