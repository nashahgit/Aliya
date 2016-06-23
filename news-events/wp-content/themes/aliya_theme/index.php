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
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<?php the_time(); ?> <?php echo "|";?> <?php the_date(); ?>
								<!--?php the_category() ?--> 
								<p><?php the_content(" Read More >>"); ?></p>
								
							</article>

							<?php comments_template(); ?> 

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