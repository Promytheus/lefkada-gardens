<?php
/**
 * @package Lefkada Gardens
 */

/**
 * Register block styles.
 */

if ( ! function_exists( 'lefkadagardens_block_stylesheets' ) ) :
	
    /**
     * Enqueue custom block stylesheets
     *
     * @return void
     */
    function lefkadagardens_block_stylesheets() {
        /**
         * The wp_enqueue_block_style() function allows us to enqueue a stylesheet
         * for a specific block. These will only get loaded when the block is rendered
         * (both in the editor and on the front end), improving performance
         * and reducing the amount of data requested by visitors.
         *
         * See https://make.wordpress.org/core/2021/12/15/using-multiple-stylesheets-per-block/ for more info.
         */
        wp_enqueue_block_style(
            'core/group',
            array(
                'handle' => 'lefkadagardens-group-style',
                'src'    => get_parent_theme_file_uri( 'assets/css/group.css' ),
                'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
                'path'   => get_parent_theme_file_path( 'assets/css/group.css' ),
            )
        );
    }
endif;
    
add_action( 'init', 'lefkadagardens_block_stylesheets' );
