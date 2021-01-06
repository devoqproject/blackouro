<?php

if ( ! function_exists( 'mwt_home_link_shortcode' ) ):
    /*
     * Prints actual site url
     */
    function mwt_home_link_shortcode( $atts, $content = "" ) {

        return esc_url( get_site_url() );
    }
endif;
add_shortcode( 'home', 'mwt_home_link_shortcode' );


if ( ! function_exists( 'mwt_single_only_shortcode' ) ):
    /*
     * Shows on sinuglar page only
     */
    function mwt_single_only_shortcode( $atts, $content = "" ) {

        return is_singular() ? $content : '';
    }
endif;
add_shortcode( 'single_only', 'mwt_single_only_shortcode' );


if ( ! function_exists( 'mwt_clearfix_shortcode' ) ):
    /*
     * Prints actual site url
     */
    function mwt_clearfix_shortcode( $atts, $content = "" ) {

        return '<span class="clearfix"></span>';
    }
endif;
add_shortcode( 'clearfix', 'mwt_clearfix_shortcode' );


if ( ! function_exists( 'mwt_break_shortcode' ) ):
    /*
     * Prints <br>
     */
    function mwt_break_shortcode( $atts, $content = "" ) {

        return '<br>';
    }
endif;
add_shortcode( 'break','mwt_break_shortcode' );


if ( ! function_exists( 'mwt_space_shortcode' ) ):
    /*
     * Prints space div with given size ( in pixels )
     */
    function mwt_space_shortcode( $atts, $content = "" ) {

	    // Init

	    $horizontal = $vertical = $out = '';

	    // Attributes

	    if ( is_array( $atts ) && ! empty( $atts ) ) {

		    foreach ( $atts as $key => $value ) {

			    if ( is_int( $key ) ) {

				    if ( is_numeric( $value ) ) {

						if ( '' == $vertical ) {
							$vertical = $value;

						} elseif ( '' == $horizontal ) {
							$horizontal = $value;
						}
				    }
			    }
		    }
	    }

	    // Conditions

	    $vertical = 0 == $vertical ? '' : 'margin-top: ' . $vertical . 'px;';
	    $horizontal = 0 == $horizontal ? '' : 'margin-left: ' . $horizontal . 'px;';

	    // Output

	    if ( '' != $vertical || '' != $horizontal ) {

	    	$out = '<div style="' . $vertical . $horizontal . '"></div>';
	    }

        return $out;
    }
endif;
add_shortcode( 'space','mwt_space_shortcode' );