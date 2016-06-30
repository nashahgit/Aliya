<?php
/**
 * Default Events Template
 * This file is the basic wrapper template for all the views if 'Default Events Template'
 * is selected in Events -> Settings -> Template -> Events Template.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/default-template.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

get_header();
?>
<!--h1>Helooo World!</h1-->
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="headline"></div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-9">
            <div class=" card extra-padding-all-sides">
				<div id="tribe-events-pg-template">
					<?php tribe_events_before_html(); ?>
					<?php tribe_get_view(); ?>
					<?php tribe_events_after_html(); ?>
				</div> <!-- #tribe-events-pg-template -->
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
