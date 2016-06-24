<?php 

get_header(); ?>

	<div class="container margin-bottom-30">
		<div class="row">
			
            <div class="col-sm-9 ">
                <div class="headline"><h2>NEWS</h2></div>
                    <div class=" card extra-padding-all-sides">

						<?php if (have_posts()) :
							while (have_posts()) : the_post(); ?>
						
						
							<article class="post">
								<div class="row">
									<div class="col-sm-3">	
										<div style="margin-top:20px;"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail'); ?></a></div>
									</div>
									<div class="col-sm-9">
										<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
										<div class="post-info">
											<?php the_time('F j, Y g:i a'); ?> | by <a href="<?php echo 
											get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | posted in 

											<?php

											$categories = get_the_category();
											$separator = ", ";
											$output = '';

											if ($categories) {
												foreach ($categories as $category) {
													
													$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;

												}

												echo trim($output, $separator);
											}

											?>

										</div>
										<!--?php the_category() ?--> 
										
										<p><?php the_content(" Read More >>"); ?><!--?php echo get_the_excerpt(); ?--></p>
									</div>
								</div>
							</article>

							
							<?php endwhile;
							
						else :
							echo '<p> No posts </p>';
						endif; ?>

					</div>
				
			</div>
			<div class="col-sm-3 sidebar-col">
				<div class=" card extra-padding-all-sides widget-sidebar">
					<?php dynamic_sidebar('sidebar1'); ?>
				</div>
			</div>
		</div>	
	</div>
<?php


get_footer();

?>