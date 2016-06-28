<?php 

get_header(); ?>

	<div class="container margin-bottom-30">
		<div class="row">
            <div class="col-sm-9 ">
                <div class=" card extra-padding-all-sides">

				<?php if (have_posts()) :
					while (have_posts()) : the_post(); ?>
					
					<article class="post page">

						<?php

						$args = array(

							'child_of' => $post->ID

						);
						?>
						<?php wp_list_pages($args); ?>

						<h2><?php the_title(); ?></h2>
						<!--?php the_excerpt(); ?-->
						<p><?php the_content(); ?></p>
					</article>
					<?php endwhile;

				else :
					echo '<p> No posts </p>';
				endif; ?>

				</div>
				
			</div>
			<div class="col-sm-3 sidebar-col">
				<div class=" card extra-padding-all-sides">
					<div class="widget-sidebar">
						<?php dynamic_sidebar('sidebar1'); ?>
						
					</div>
				</div>
			</div>
		</div>	
	</div>

<?php

get_footer();

?>