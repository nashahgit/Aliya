<?php 

get_header();

if (have_posts()) :
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
endif;

get_footer();

?>