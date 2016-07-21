<?php

function getImage($num) {
global $more;
$more = 1;
$link = get_permalink();
$content = get_the_content();
$count = substr_count($content, '<img');
$start = 0;
for($i=1;$i<=$count;$i++) {
$imgBeg = strpos($content, '<img', $start);
$post = substr($content, $imgBeg);
$imgEnd = strpos($post, '>');
$postOutput = substr($post, 0, $imgEnd+1);
$postOutput = preg_replace('/width="([0-9]*)" height="([0-9]*)"/', '',$postOutput);;
$image[$i] = $postOutput;
$start=$imgEnd+1;
}
if(stristr($image[$num],'<img')) { echo $image[$num];}
$more = 0;
}

function learningWordPress_resources() {

	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'learningWordPress_resources');

function ourWidgetsInit() {

	register_sidebar( array(
		 'name' => 'Sidebar',
		 'id' => 'sidebar1',
		 'before_widget' => '<div class="margin-bottom-20 ">',
		 'after_widget' => '</div>',
		 'before_title' => '<h4>',
		 'after_title'  => '</h4>'
		));

	register_sidebar( array(
		 'name' => 'Footer Area 1',
		 'id' => 'footer1'
		));

	register_sidebar( array(
		 'name' => 'Front Page',
		 'id' => 'front',
		 'before_widget' => '<div class="front-events">',
		 'after_widget' => '</div>',
		 'before_title' => '<h4>',
		 'after_title'  => '</h4>'
		));

}

add_action('widgets_init', 'ourWidgetsInit');


function custom_excerpt_length() {
	return 25;
}

add_filter('excerpt_length', 'custom_excerpt_length');



function aliyaTheme_setup() {

	// Navigation Menus

	register_nav_menus(array(
		'primary' => __('Primary Menu'),
		'footer'  => __('Footer Menu')
	));

	// Add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 180, 120, true);
	add_image_size('banner-image', 920, 210, true);
}

add_action('after_setup_theme', 'aliyaTheme_setup');

?>

<?php
function custom_comments($comment, $args, $depth) {
	$GLOBAL['comment'] = $comment; ?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
		<div id="comment-<?php comment_ID(); ?>">
			<div class="comment-author v-card">
				<?php echo get_avatar($comment, $size='48',$default='<path-to-url>'); ?>

				<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
			</div>
			<?php if ($comments->comment_approved == '0') : ?>
				<em><?php _e('Your comment is awaiting moderation.') ?></em>
				<br />
			<?php endif; ?>

			<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)) ?>"><?php printf(__('%1s at %2$s'), get_comment_date(), get_comment_time()) ?> </a> <?php edit_comment_link(__('(Edit)'),' ', '') ?> </div>

			<?php comment_text() ?>

			<div class="reply">
				<?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
			</div>
		</div>
	</li>
	<?php
}

?>

