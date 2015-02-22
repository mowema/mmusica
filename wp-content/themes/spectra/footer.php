<?php
/**
 * Theme Name: 		SPECTRA - Responsive Music Wordpress Theme
 * Theme Author: 	Mariusz Rek - Rascals Themes
 * Theme URI: 		http://rascals.eu/spectra
 * Author URI: 		http://rascals.eu
 * File:			footer.php
 * =========================================================================================================================================
 *
 * @package spectra
 * @since 1.0.0
 */
?>
<?php global $spectra_opts, $post, $wp_query; ?>
		
	
	<?php 

		############################# Footer Modules #############################

		if ( isset( $wp_query ) && isset( $post ) ) {
			// Get module

		   	$fm = get_post_meta( $wp_query->post->ID, '_footer_module', true );

			if ( isset( $fm ) && $fm !== 'none' ) {

				if ( $fm === 'mailchimp' && function_exists( 'mailchimpSF_signup_form' ) ) {

				?>
				<div id="newsletter">
					<div class="overlay dots"></div>
					<div class="container">
						<?php mailchimpSF_signup_form(); ?>
					</div>	
				</div>
				<?php

				}

		   	}
   		}

	 ?>

		</div>
		<!-- /ajax content -->
	</div>
	<!-- /ajax container -->

	<!-- ############################# Social ############################# -->
	<?php 
		// Set Social icons column layout
		if ( ! $spectra_opts->get_option( 'social_layout' ) ) {
			$social_col = '4';
		} else {
			$social_col = $spectra_opts->get_option( 'social_layout' );
		}
		
	 ?>

	<?php if ( $spectra_opts->get_option( 'social_icons' ) && $spectra_opts->get_option( 'social_icons' ) == 'on' ) : ?>
	<section id="social">
		<?php if ( $spectra_opts->get_option( 'social_rss' ) ) : ?>
			<div class="flex-col-1-<?php echo esc_attr( $social_col ) ?>"><a href="<?php esc_url( bloginfo( 'rss2_url' ) ) ?>" class="social-feed"><span class="icon icon-feed"></span><?php echo esc_attr( __( 'RSS Feed', SPECTRA_THEME ) ); ?></a></div>
		<?php endif; ?>	
	    <?php if ( $spectra_opts->get_option( 'social_twitter' ) ) : ?>
	    	<div class="flex-col-1-<?php echo esc_attr( $social_col ) ?>"><a href="<?php echo esc_url( $spectra_opts->get_option( 'social_twitter' ) ); ?>" class="social-twitter"><span class="icon icon-twitter"></span><?php echo esc_attr( __( 'Twitter', SPECTRA_THEME ) ); ?></a></div>
	    <?php endif; ?>	
	    <?php if ( $spectra_opts->get_option( 'social_facebook' ) ) : ?>
	    	<div class="flex-col-1-<?php echo esc_attr( $social_col ) ?>"><a href="<?php echo esc_url( $spectra_opts->get_option( 'social_facebook' ) ); ?>" class="social-facebook"><span class="icon icon-facebook"></span><?php echo esc_attr( __( 'Facebook', SPECTRA_THEME ) ); ?></a></div>
	    <?php endif; ?>
	    <?php if ( $spectra_opts->get_option( 'social_gplus' ) ) : ?>
	    	<div class="flex-col-1-<?php echo esc_attr( $social_col ) ?>"><a href="<?php echo esc_url( $spectra_opts->get_option( 'social_gplus' ) ); ?>" class="social-google-plus"><span class="icon icon-googleplus"></span><?php echo esc_attr( __( 'Google Plus', SPECTRA_THEME ) ); ?></a></div>
	    <?php endif; ?>	
	    <?php if ( $spectra_opts->get_option( 'social_soundcloud' ) ) : ?>
	    	<div class="flex-col-1-<?php echo esc_attr( $social_col ) ?>"><a href="<?php echo esc_url( $spectra_opts->get_option( 'social_soundcloud' ) ); ?>" class="social-soundcloud"><span class="icon icon-soundcloud"></span><?php echo esc_attr( __( 'Soundcloud', SPECTRA_THEME ) ); ?></a></div>
	    <?php endif; ?>

	    <?php if ( $spectra_opts->get_option( 'social_vimeo' ) ) : ?>
	    	<div class="flex-col-1-<?php echo esc_attr( $social_col ) ?>"><a href="<?php echo esc_url( $spectra_opts->get_option( 'social_vimeo' ) ); ?>" class="social-vimeo"><span class="icon icon-vimeo"></span><?php echo esc_attr( __( 'Vimeo', SPECTRA_THEME ) ); ?></a></div>
	    <?php endif; ?>	
	    <?php if ( $spectra_opts->get_option( 'social_youtube' ) ) : ?>
	    	<div class="flex-col-1-<?php echo esc_attr( $social_col ) ?>"><a href="<?php echo esc_url( $spectra_opts->get_option( 'social_youtube' ) ); ?>" class="social-youtube"><span class="icon icon-youtube"></span><?php echo esc_attr( __( 'Youtube', SPECTRA_THEME ) ); ?></a></div>
	    <?php endif; ?>	
	    <?php if ( $spectra_opts->get_option( 'social_dribbble' ) ) : ?>
	    	<div class="flex-col-1-<?php echo esc_attr( $social_col ) ?>"><a href="<?php echo esc_url( $spectra_opts->get_option( 'social_dribbble' ) ); ?>" class="social-dribbble"><span class="icon icon-dribbble"></span><?php echo esc_attr( __( 'Dribbble', SPECTRA_THEME ) ); ?></a></div>
	    <?php endif; ?>	
	    <?php if ( $spectra_opts->get_option( 'social_flickr' ) ) : ?>
	    	<div class="flex-col-1-<?php echo esc_attr( $social_col ) ?>"><a href="<?php echo esc_url( $spectra_opts->get_option( 'social_flickr' ) ); ?>" class="social-flickr"><span class="icon icon-flickr"></span><?php echo esc_attr( __( 'Flickr', SPECTRA_THEME ) ); ?></a></div>
	    <?php endif; ?>	
	    <?php if ( $spectra_opts->get_option( 'social_delicious' ) ) : ?>
	    	<div class="flex-col-1-<?php echo esc_attr( $social_col ) ?>"><a href="<?php echo esc_url( $spectra_opts->get_option( 'social_delicious
social_delicious' ) ); ?>" class="social-delicious"><span class="icon icon-delicious"></span><?php echo esc_attr( __( 'Delicious', SPECTRA_THEME ) ); ?></a></div>
	    <?php endif; ?>	
	    <?php if ( $spectra_opts->get_option( 'social_pinterest' ) ) : ?>
	    	<div class="flex-col-1-<?php echo esc_attr( $social_col ) ?>"><a href="<?php echo esc_url( $spectra_opts->get_option( 'social_pinterest' ) ); ?>" class="social-pinterest"><span class="icon icon-pinterest"></span><?php echo esc_attr( __( 'Pinterest', SPECTRA_THEME ) ); ?></a></div>
	    <?php endif; ?>	
		<?php if ( $spectra_opts->get_option( 'social_instagram' ) ) : ?>
			<div class="flex-col-1-<?php echo esc_attr( $social_col ) ?>"><a href="<?php echo esc_url( $spectra_opts->get_option( 'social_instagram' ) ); ?>" class="social-instagram"><span class="icon icon-camera2"></span><?php echo esc_attr( __( 'Instagram', SPECTRA_THEME ) ); ?></a></div>
		<?php endif; ?>	

	</section>
	<!-- /social -->
	<?php endif; ?>	

	<!-- ############################# Footer ############################# -->
	<footer id="footer">
		<!-- container -->
		<div class="container"><span class="overlay noise animated active done"></span>
			<div id="copyrights">
				<?php 
					$spectra_opts->e_get_option( 'footer_content' );
				?>
			</div>
		</div>
		<!-- /container -->
	</footer>
	<!-- /footer -->
</div>
<!-- /site -->

<?php if ( $spectra_opts->get_option( 'slide_sidebar' ) && $spectra_opts->get_option( 'slide_sidebar' ) == 'on' ) :  ?>
<!-- ############################# Slidebar ############################# -->
<div id="slidebar">
	<header>
		<a href="#" id="slidebar-close"><?php _e( 'CLOSE', SPECTRA_THEME ) ?> <span class="icon icon-close"></span></a>
	</header>
	<div id="slidebar-content" class="clearfix">

		<div>
			<?php get_sidebar( 'slidebar' ); ?>
		</div>
	</div>

</div>	
<div id="slidebar-layer" class="show"></div>
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>