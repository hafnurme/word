<?php
/**
 * Template part for displaying header column layout.
 *
 * @package octo
 * @since: 1.0.0
 */

use octo\frontend\Template_Parts;

?>
<div class="site-container">
	<div class="site-container-inner">
		<?php Template_Parts::load_site_branding(); ?>
		<?php Template_Parts::load_header_widget_area(); ?>
		<?php Template_Parts::load_menu_toggle_button(); ?>
		<?php Template_Parts::load_primary_menu(); ?>
	</div><!-- .site-container-inner -->
</div><!-- .site-container -->
<?php Template_Parts::load_mobile_menu(); ?>