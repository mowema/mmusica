<?php
$output = $el_class = $bg_image = $bg_color = $bg_image_repeat = $font_color = $padding = $margin_bottom = $css = '';
extract(shortcode_atts(array(
	'type' 		  	  => 'row',
	'anchor'		  => '',
    'parallax'        => 'no',
    'overlay'         => 'none',
    'section_sign'    => 'no',
    'sign_icon'       => 'twitter',
    'sign_icon_bg'    => '#80ADD2',
    'el_class'        => '',
    'bg_image'        => '',
    'bg_color'        => '',
    'bg_image_repeat' => '',
    'font_color'      => '',
    'padding'         => '',
    'margin_bottom'   => '',
    'css' => ''
), $atts));

// wp_enqueue_style( 'js_composer_front' );
wp_enqueue_script( 'wpb_composer_front_js' );
// wp_enqueue_style('js_composer_custom_css');
$class = " clearfix";
$sign_html = '';
$el_class = $this->getExtraClass($el_class);

$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'vc_row wpb_row '. ( $this->settings('base')==='vc_row_inner' ? 'vc_inner ' : '' ) . get_row_css_class() . $el_class . vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );

$style = $this->buildStyle($bg_image, $bg_color, $bg_image_repeat, $font_color, $padding, $margin_bottom);

if ( $anchor != '' ) {
    $anchor = 'id="' . esc_html( sanitize_title_with_dashes( $anchor ) ) . '"';
}

// Section Sign
if ( $section_sign === 'yes' ) {

    $sign_html = '<div class="section-sign" style="background-color:' . esc_attr( $sign_icon_bg ) . '"><span class="icon icon-' . esc_attr( $sign_icon ) . '"></span></div>';
}

// Section
if ( $type == 'section' ) {

    // Parallax
    if ( $parallax === 'yes' ) {
        $class = ' vc-parallax';
    }

    // Overlay
    if ( $overlay && $overlay === 'black' ) {
        $overlay = '<span class="overlay"></span>';
    } else if ( $overlay && $overlay === 'noise' ) {
        $overlay = '<span class="overlay noise"></span>';
    } else if ( $overlay && $overlay === 'dots' ) {
        $overlay = '<span class="overlay dots"></span>';
    } else {
        $overlay = '';
    }
	$output .= '<section ' . $anchor . ' class="vc-custom-section ' . esc_attr( $css_class ) . esc_attr( $class ) . '"' . $style . '>';
    $output .= $sign_html;
    $output .= $overlay;
	$output .= '<div class="container"><div class="vc_row wpb_row vc_row-fluid">';
	$style = '';
	$css_class = '';
} else if ( $type === 'full_width' ) {
    $output .= '<section ' . $anchor . ' class="vc-custom-section vc-custom-fw ' . esc_attr( $css_class ) . esc_attr( $class ) . '"' . $style . '>';
    $output .= $sign_html;
    $style = '';
    $css_class = '';
} else if ( $type === 'full_width_section' ) {
    $output .= '<section ' . $anchor . ' class="vc-custom-section vc-custom-fw-section ' . esc_attr( $css_class ) . esc_attr( $class ) . '"' . $style . '>';
    $output .= $sign_html;
    $style = '';
    $css_class = '';
} else if ( $type === 'row' ) {
    $output .= '<div class="' . esc_attr( $css_class ) . '"' . $style . '>';
}

// Content
$output .= wpb_js_remove_wpautop($content);

if ( $type == 'section' ) {
	$output .= '</div></div></section>';
} else if ( $type === 'full_width' || $type === 'full_width_section' ) {
    $output .= '</section>';
} else if ( $type == 'row' ) {
    $output .= '</div>'.$this->endBlockComment('row');
}

echo $output;