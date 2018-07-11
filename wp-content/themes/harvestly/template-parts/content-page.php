							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div class="row">
									<div class="col-md-12">
										<span class="post-cat"><?php echo wp_kses(get_the_category_list( ' &bull; ' ), array(
											'a'	=> array(
												'href'	=> array(),
											),
										)); ?></span>
										<?php the_title( '<h3 class="post-title">', '</h3>' ); ?>
										<div class="post-meta">
											<?php echo esc_html__( 'by', 'harvestly' ); ?> <span class="post-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span> / <span class="post-on"><?php echo esc_html( get_the_date() ); ?></span>
										</div>
										
										<?php if ('' !== get_the_post_thumbnail()): ?>
											<div class="post-thumbnail">
												<?php the_post_thumbnail(); ?>
											</div>
										<?php endif; ?>

										<div class="post-content">
											<?php the_content(); ?>
										</div><!-- .entry-content -->
									</div>
								</div>
							</article>
