<?php

/**
 * Plugin Name: Pretty Portfolio
 * Plugin URI:
 * Description: This plugin displays a portfolio
 * Version: 0.1.0
 * Author: Theodoros Vragkos
 * Author URI: http://www.teovragkos.com
 * License: GPL v2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: pretty-portfolio
 * Domain Path: 
 */

 //Exit if accessed directly
 if( !defined('ABSPATH'))exit;

 function pp_register_post_type(){

    $labels = array(
        'name'                  => _x( 'Portfolio', 'Post type general name', 'pretty-portfolio' ),
        'singular_name'         => _x( 'Portfolio Item', 'Post type singular name', 'pretty-portfolio' ),
        'menu_name'             => _x( 'Portfolio Items', 'Admin Menu text', 'pretty-portfolio' ),
        'name_admin_bar'        => _x( 'Portfolio Items', 'Add New on Toolbar', 'pretty-portfolio' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Portfolio' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-screenoptions',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type('pp_portfolio', $args);

 }

 add_action( 'init', 'pp_register_post_type');