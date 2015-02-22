<?php
/**
 * Template Name: Events All (Future+Past)
 *
 * @package spectra
 * @since 1.0.0
 */

get_header(); ?>

<?php 
   global $spectra_opts, $wp_query, $post;

    // Copy query
    $temp_post = $post;
    $query_temp = $wp_query;

    // Date format
    $date_format = 'd/m';
    if ( $spectra_opts->get_option( 'event_date' ) ) {
        $date_format = $spectra_opts->get_option( 'event_date' );
    }

    // Pagination Limit
    $limit = (int)get_post_meta( $wp_query->post->ID, '_limit', true );
    $limit = $limit && $limit == '' ? $limit = 6 : $limit = $limit;

?>

<?php 
    // Get Custom Intro Section
    get_template_part( 'inc/custom-intro' );

?>


<!-- ############ EVENTS ############ -->
<div id="page" class="no-margin">
        
    <?php

    // Count
    $count = 1;
    $paged_events = $paged;
    if ( $paged_events > 0 ) {
        $paged_events = $paged_events-1;
    }
    $events_count = ($paged_events*$limit)+1;

    // Future Events
    $future_events = get_posts( array(
        'post_type' => 'spectra_events',
        'showposts' => -1,
        'tax_query' => array(
            array(
                'taxonomy' => 'spectra_event_type',
                'field' => 'slug',
                'terms' => 'future-events'
            )
        ),
        'orderby' => 'meta_value',
        'meta_key' => '_event_date_start',
        'order' => 'ASC'
    ));

    // Past Events
    $past_events = get_posts(array(
        'post_type' => 'spectra_events',
        'showposts' => -1,
        'tax_query' => array(
            array(
                'taxonomy' => 'spectra_event_type',
                'field' => 'slug',
                'terms' => 'past-events'
            )
        ),
        'orderby' => 'meta_value',
        'meta_key' => '_event_date_start',
        'order' => 'DSC'
    ));

    $future_nr = count( $future_events );
    $past_nr = count( $past_events );

    // echo "Paged: $paged, Future events: $future_nr, Past events: $past_nr";

    $mergedposts = array_merge( $future_events, $past_events ); //combine queries

    $postids = array();
    foreach( $mergedposts as $item ) {
        $postids[] = $item->ID; //create a new query only of the post ids
    }
    $uniqueposts = array_unique( $postids ); //remove duplicate post ids

    // var_dump($uniqueposts);
    $args = array(
        'post_type' => 'spectra_events',
        'showposts' => $limit,
        'paged'     => $paged,
        'post__in'  => $uniqueposts,
        'orderby' => 'post__in'
    );

    $wp_query = new WP_Query();
    $wp_query->query( $args );


    ?>
    <?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>
    
     <?php

        // Custom link 
        $ticket_link = get_post_meta( $wp_query->post->ID, '_ticket_url', true );

        // Link target attribute 
        $target = get_post_meta( $wp_query->post->ID, '_ticket_target', true );
        $target = isset( $target ) && $target == 'on' ? $target = '_blank' : $target = '';

        /* Event Date */
        $event_date_start = strtotime( get_post_meta( $wp_query->post->ID, '_event_date_start', true ) );
        $event_date_end = strtotime( get_post_meta( $wp_query->post->ID, '_event_date_end', true ) );

        /* Location */
        $event_location = get_post_meta( $wp_query->post->ID, '_event_address', true );

        // Get Event Image
        $event_image = get_post_meta( $wp_query->post->ID, '_event_image', true );
        $event_image_crop = get_post_meta( $wp_query->post->ID, '_event_image_crop', true );
        $event_ID = $wp_query->post->ID;
        if ( $event_image ) {
            $custom_css = 'background-image: url(' . esc_url( $spectra_opts->get_image( $event_image ) ) . ');';
        } else {
            $custom_css = '';
        }
        
        $check_tax = get_the_term_list( get_the_ID(), 'spectra_event_type', '', ' &bull; ', '' );
        if ( ! is_wp_error( $check_tax ) ){
            $event_type = get_the_term_list( get_the_ID(), 'spectra_event_type', '', ' &bull; ', '' );
        } else {
            $event_type = '';
        }

        ?>
        <?php if ( $future_nr > 0 && $events_count <= $future_nr && $count == 1 ) : ?>
            <div class="events-separator animated" data-delay="0">
                <h6 class="heading-xl"><?php _e( 'Future events', SPECTRA_THEME ); ?></h6>
            </div>
            <ul id="events-list">
        <?php endif; ?>

        <?php if ( $past_nr > 0 && $events_count == ( $future_nr + 1 ) ) : ?>
            <?php if ( $future_nr > 0 ) { echo '</ul>'; } ?>
            <div class="events-separator animated" data-delay="0">
                <h6 class="heading-xl"><?php _e( 'Past events', SPECTRA_THEME ); ?></h6>
            </div>
            <ul id="events-list">

        <?php elseif ( $events_count > $future_nr && $count == 1 ) : ?>
            <div class="events-separator animated" data-delay="0">
                <h6 class="heading-xl"><?php _e( 'Past events', SPECTRA_THEME ); ?></h6>
            </div>
            <ul id="events-list">
        <?php endif; ?>
        
        <!-- event -->
        <li id="event_<?php esc_attr( the_id() ) ?>" class="animated" data-delay="0" style="<?php echo esc_attr( $custom_css ) ?>">
            <div class="inner">
                <span class="event-date"><?php echo date( $date_format, $event_date_start ); ?></span>
                <h2><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></h2>
                <span class="event-location"><?php echo esc_html( $event_location ) ?></span>
            </div>
        </li>
        <!-- /event -->

    <?php 
        $events_count++;
        $count++;
        endwhile; // End Loop ?>
    </ul>
    <!-- /events -->
    <div class="clear"></div>
    <?php spectra_paging_nav(); ?>
    <?php endif; ?>
    
</div>
<!-- /page -->

<?php
   // Get orginal query
   $post = $temp_post;
   $wp_query = $query_temp;
?>
<?php get_footer(); ?>