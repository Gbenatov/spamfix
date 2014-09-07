<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Footer Template
 *
 *
 * @file           footer.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.2
 * @filesource     wp-content/themes/responsive/footer.php
 * @link           http://codex.wordpress.org/Theme_Development#Footer_.28footer.php.29
 * @since          available since Release 1.0
 */

/*
 * Globalize Theme options
 */
global $responsive_options;
$responsive_options = responsive_get_options();
?>
<?php responsive_wrapper_bottom(); // after wrapper content hook ?>
</div><!-- end of #wrapper -->
<?php responsive_wrapper_end(); // after wrapper hook ?>
</div><!-- end of #container -->
<?php responsive_container_end(); // after container hook ?>
<hr>
<div id="footer" class="clearfix">
	<?php responsive_footer_top(); ?>

	<div id="footer-wrapper">

		<?php get_sidebar( 'footer' ); ?>

		<div class="grid col-940">

			<div class="grid col-540">
				<?php if( has_nav_menu( 'footer-menu', 'responsive' ) ) { ?>
					<?php wp_nav_menu( array(
										   'container'      => '',
										   'fallback_cb'    => false,
										   'menu_class'     => 'footer-menu',
										   'theme_location' => 'footer-menu'
									   )
					);
					?>
				<?php } ?>
			</div>
			<!-- end of col-540 -->

			<div class="grid col-380 fit">
				<?php echo responsive_get_social_icons() ?>
			</div>
			<!-- end of col-380 fit -->

		</div>
		<!-- end of col-940 -->
		<?php get_sidebar( 'colophon' ); ?>

		<div class="grid col-300 copyright">
			<?php esc_attr_e( '&copy;', 'responsive' ); ?> <?php echo date( 'Y' );  ?><a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
				 כל הזכויות שמורות <?php bloginfo( 'name' ); ?>
				
			</a>
		</div>
		<!-- end of .copyright -->
		

		<div style="width:308px; margin-right:-6px;" class="grid col-300 scroll-top"><a href="#scroll-top" title="<?php esc_attr_e( 'scroll to top', 'responsive' ); ?>"><?php _e( '&uarr;', 'responsive' ); ?></a><a style="border-left:1px solid gray; padding-left:10px;" href="https://test-c9-gbenatov_1.c9.io/"> בית</a><a style="padding-right:10px;  padding-left:10px; border-left:1px solid gray;" href="https://test-c9-gbenatov_1.c9.io/?page_id=116"> שאלות נפוצות</a><a style="padding-right:10px;  padding-left:10px; border-left:1px solid gray;" href="https://test-c9-gbenatov_1.c9.io/?page_id=116">פרטיות</a>
		<a style="padding-right:10px;  padding-left:10px;" href="https://test-c9-gbenatov_1.c9.io/?page_id=113">הצטרף כעו"ד</a>
		</div>
		

		<div class="grid col-300 fit powered">
			<a  style="border-left:1px solid gray; padding-left:10px;" href="<?php echo esc_url( 'https://www.facebook.com/spamfix' ); ?>" title="<?php esc_attr_e( 'Responsive Theme', 'responsive' ); ?>">
				בקרו בפייסבוק</a>
			<a href="mailto:support@spamfix.co.il?Subject=שלום%20שוב" target="_top">
כתבו לנו</a>
</p>
		</div>
		<!-- end .powered -->

	</div>
	<!-- end #footer-wrapper -->

	<?php responsive_footer_bottom(); ?>
</div><!-- end #footer -->

<?php responsive_footer_after(); ?>

<?php wp_footer(); ?>
</body>
</html>