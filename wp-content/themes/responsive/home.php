<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Blog Template
 *
 * @file           home.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.1.0
 * @filesource     wp-content/themes/responsive/home.php
 * @link           http://codex.wordpress.org/Templates
 * @since          available since Release 1.0
 */

get_header();

global $more;
$more = 0;
?>
	<div id="featured" class="main-image clearfix">
            
		<div id="featured-content" class="grid col-460">

			<h1 class="featured-title">
				<?php
				if ( isset( $responsive_options['home_headline'] ) && $db && $empty ) {
					echo $responsive_options['home_headline'];
				} else {
					_e( 'Hello, World!', 'responsive' );
				}
				?>
			</h1>

			<h2 class="featured-subtitle">
				<?php
				if ( isset( $responsive_options['home_subheadline'] ) && $db && $empty )
					echo $responsive_options['home_subheadline'];
				else {
					_e( 'Your H2 subheadline here', 'responsive' );
				}
				?>
			</h2>

			<?php
			if ( isset( $responsive_options['home_content_area'] ) && $db && $empty ) {
				echo do_shortcode( wpautop( $responsive_options['home_content_area'] ) );
			} else {
				?>
			
			

			<?php
			}

			if ( $responsive_options['cta_button'] == 0 ): ?>

				<div class="call-to-action">
				    

					<a href="<?php echo $responsive_options['cta_url']; ?>"  class="blue button">
					
						<?php
						if ( isset( $responsive_options['cta_text'] ) && $db )
							echo $responsive_options['cta_text'];
						else
							_e( 'Call to Action', 'responsive' );
						?>
						
					</a>
				<h4 style="color:gray;text-align: right;font-size: 16px;font-weight: 200;margin-top: 0px;" ;="" 'margin-top:-33px';="" 'font-weight:200'=""> *מה זה ייצוגית</h4>

				</div><!-- end of .call-to-action -->

			<?php endif; ?>

		</div>
		<!-- end of .col-460 -->

		<div id="featured-image" class="grid col-460 fit">

			<?php $featured_content = ( !empty( $responsive_options['featured_content'] ) ) ? $responsive_options['featured_content'] : '<img class="aligncenter" src="' . get_template_directory_uri() . '/core/images/groppy6.png" width="350" height="300" alt="" />'; ?>

			<?php echo do_shortcode( wpautop( $featured_content ) ); ?>

		</div>
		<!-- end of #featured-image -->

	</div><!-- end of #featured -->




<?php get_sidebar( 'home' ); ?>
<?php get_footer(); ?>