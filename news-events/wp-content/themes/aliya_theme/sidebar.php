<?php
if (have_posts()) :
							while (have_posts()) : the_post(); ?>
							
							<article class="post">
								<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
									
							</article>

						
							<?php endwhile;
							
						else :
							echo '<p> No posts </p>';
						endif;  

?>