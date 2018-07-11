							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div class="row">
									<?php if ( ! is_single() ): ?>
										<div class="col-md-12">
											<span class="post-cat"><?php echo wp_kses(get_the_category_list( ' &bull; ' ), array(
												'a'	=> array(
													'href'	=> array(),
												),
											)); ?></span>
											<?php
												the_title( '<h2 class="post-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
											?>
											<div class="post-meta">
												<?php echo esc_html__( 'by', 'harvestly' ); ?> <span class="post-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span> / <span class="post-on"><?php echo esc_html( get_the_date() ); ?></span>
											</div>
											<div class="post-content">
												<?php the_content(); ?>
											</div><!-- .entry-content -->
											<a class="btn btn-default" href="<?php the_permalink(); ?>"><?php echo esc_html__( 'Read More', 'harvestly' ); ?></a>
										</div>
									<?php else : ?>
										<div class="col-md-12">
											<div class="post-thumbnail">
												<?php the_post_thumbnail(); ?>
											</div>
											<span class="post-cat"><?php echo wp_kses(get_the_category_list( ' &bull; ' ), array(
												'a'	=> array(
													'href'	=> array(),
												),
											)); ?></span>
											<?php
												if (is_single()) {
													the_title( '<h2 class="post-title">', '</h2>' );
												} else {
													the_title( '<h2 class="post-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
												}
											?>
											<div class="post-meta">
												<?php echo esc_html__( 'by', 'harvestly' ); ?> <span class="post-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span> / <span class="post-on"><?php echo esc_html( get_the_date() ); ?></span>
											</div>

											<div class="post-content">
												<?php the_content(); ?>
											</div><!-- .entry-content -->
										</div>
									<?php endif; ?>
									<?php
										wp_link_pages( array(
											'before'      => '<div class="page-links">' . __( 'Pages:', 'harvestly' ),
											'after'       => '</div>',
											'link_before' => '<span class="page-number">',
											'link_after'  => '</span>',
										) );
									?>
								</div>
							</article>
