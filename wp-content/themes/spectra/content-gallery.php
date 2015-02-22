<?php
/**
 * Theme Name: 		SPECTRA - Responsive Music Wordpress Theme
 * Theme Author: 	Mariusz Rek - Rascals Themes
 * Theme URI: 		http://rascals.eu/spectra
 * Author URI: 		http://rascals.eu
 * File:			content-gallery.php
 * =========================================================================================================================================
 *
 * @package spectra
 * @since 1.0.0
 */
?>

<?php 
   	global $spectra_opts, $wp_query, $post, $spectra_layout;
   	$gallery_slider_id = get_post_meta( $wp_query->post->ID, '_gallery_slider_id', true );

   	// Set width and height slider
   	if ( $spectra_layout == 'wide' ) {
   		$width = 990;
   		$height = 420;
   	} else {
   		$width = 680;
   		$height = 380;
   	}

   	// Disqus
	$disqus = $spectra_opts->get_option( 'disqus_comments' );
	$disqus_shortname = $spectra_opts->get_option( 'disqus_shortname' );

	if ( ( $disqus && $disqus == 'on' ) && ( $disqus_shortname && $disqus_shortname != '' ) ) {
		$disqus = true;

	} else {
		$disqus = false;
	}

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry">
		<header class="entry-header">
			<?php
				if ( is_single() ) :
					the_title( '<h1 class="entry-title animated" data-delay="0">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title animated" data-delay="0"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;
			?>

			<div class="entry-meta">
				<div class="meta-posted-by animated" data-delay="100"><?php _e( 'Posted by: ', SPECTRA_THEME ) ?> <?php the_author_posts_link(); ?></div>
				<div class="meta-categories animated" data-delay="200"><?php _e( 'Categories: ', SPECTRA_THEME ) ?> <?php the_category(' &bull; '); ?></div>
				<?php if ( is_single() ) : ?>
				<div class="meta-categories animated" data-delay="300"><?php _e( 'Tags: ', SPECTRA_THEME ) ?> <?php the_tags( '',' &bull; ','' ); ?></div>
				<?php endif; ?>
			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->
		
		<div class="entry-side animated" data-delay="100">
			<div class="entry-date">
				<span class="day"><?php the_time( 'd' ); ?></span>
				<span class="month"><?php the_time( 'M' ); ?></span>
			</div>
			<?php if ( comments_open() || get_comments_number() ) : ?>
			<a href="<?php echo esc_url( get_permalink() ); ?>#comments" class="comments-link" data-offset="-65"><?php if ( ! $disqus ) { comments_number('0','1','%'); } ?><span class="icon icon-bubbles"></span></a>
			<?php endif; ?>
			<?php edit_post_link( __( 'Edit', SPECTRA_THEME ), '<span class="edit-link">', '</span>' ); ?>
		</div>

		<?php if ( $gallery_slider_id && $gallery_slider_id !== 'none' ) : ?>
			<div class="entry-media animated" data-delay="100">
				<?php 
				if ( function_exists( 'spectra_slider' ) ) {
					echo spectra_slider( array( 'id' => $gallery_slider_id ) );
				}

				?>
			</div>
		<?php endif; // if slider ids ?>

		<div class="entry-content animated" data-delay="0">
			<?php 
			 	if ( ! is_single() && has_excerpt() ) {
            		the_excerpt();
            		echo '<a href="' . esc_url( get_permalink() ) . '" class="more-link-excerpt">' . __( 'Continue reading ', SPECTRA_THEME ) . '<span class="meta-nav">&rarr;</span>' . '</a>';
           		} else {
              		the_content( __( 'Continue reading ', SPECTRA_THEME ) . '<span class="meta-nav">&rarr;</span>' );
           		}
           	?>
		</div><!-- .entry-content -->

	</div><!-- .entry -->
	<?php if ( is_single() ) : ?>
	<!-- ############ PAGE FOOTER ############ -->
    <footer class="page-footer animated" data-delay="0">
        <!-- ############ PAGE SOCIAL ############ -->
        <div class="social-wrap">
            <div class="page-social">
                <!-- Facebook -->
                <a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo esc_url( get_permalink( $post->ID ) ) ?>" class="facebook-share"><span class="icon icon-facebook"></span></a>
                <!-- Twitter -->
                <a target="_blank" href="http://twitter.com/share?url=<?php echo esc_url( get_permalink( $post->ID ) ) ?>" class="twitter-share"><span class="icon icon-twitter"></span></a>
                 <!-- G+ -->
                <a target="_blank" href="https://plus.google.com/share?url=<?php echo esc_url( get_permalink( $post->ID ) ) ?>" class="googleplus-share"><span class="icon icon-googleplus"></span></a>
            </div>
        </div>
        <!-- /page social -->
        <!-- POST NAVIGATION -->
        <?php echo spectra_post_nav(); ?>
    </footer>
    <!-- /page footer -->
	<?php endif; ?>

</article><!-- #post-## -->