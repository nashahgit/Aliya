<?php 

/*
Template Name: Special Layout
*/

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	
	<article class="post page">
		<h2><?php the_title(); ?></h2>

		<div class="info-box">
			<h4>Disclaimer</h4>
			<p>kjasdfkjaskjdfljksad sadflkj lakdsjf lksadf jksdjf lkjsdfkj lkjsdf 
				lkjsdafl kjlskdajf lkjsadflkj lkasjdf kjsdfj klsdfj laksjdflkj sdkljf 
				sdaflk awerowiusjdf;l jowierfoijnsfjd nasderirjjf jdkj nasrudidn shah.</p>
		</div>

		<!--?php the_excerpt(); ?-->
		<p><?php the_content(); ?></p>
	</article>
	<?php endwhile;

else :
	echo '<p> No posts </p>';
endif;

get_footer();

?>