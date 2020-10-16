<?php
  
  if( function_exists('acf_add_options_page') ) {
	
    acf_add_options_page();
    
  }
  
  
  
  function  montheme_supports () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(1500,1500,true);
  }
  function montheme_register_assets(){
    wp_register_style('Bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' , ['popper','jquery'] , false , TRUE);
    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' , [] , false ,true);
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js' , [] , false ,true);
    wp_enqueue_style('Bootstrap');
    wp_enqueue_script('bootstrap');
  }
  function montheme_add_style(){
    wp_register_style('Style' , 'style.css');
    wp_enqueue_style('Style');
  }

  function montheme_title_separator(){
    return '|';
  }
  function enregistre_mon_menu(){
    register_nav_menu( 'menu_principal', __('menu principal') );
  }
  function register_theme_menus() {
    register_nav_menus( 
      array(
        'menu-header-1' => __( 'Emplacement Principal' ),
        'menu-footer-1' => __( 'Emplacement Pied de page 1' ),
      )
    );
  };

  function ACF_ADD_Options(){
    acf_add_options_page( array(
      'page_title' => __('Add Article'),
      'menu_title' => __('My Article'),
      'menu_slug' => 'my-Article',
      'capability' => 'edit_posts',
      'position' => '63.3',
      'parent_slug' => 'my-parent-page',
      'icon_url' => '',
      'redirect' => true,
      'post_id' => 'options',
      'update_button' => __('Update', 'acf'),
      'updated_message' => __("Options Updated", 'acf'),
      'kses' => true,
      
    ) );
  }


add_action('init' , 'ACF_ADD_Options');
add_action('init' , 'montheme_add_style');
add_action( 'init', 'register_theme_menus' );
add_action('after_setup_theme' , 'montheme_supports');
add_action( 'init', 'enregistre_mon_menu');
add_action('wp_enqueue_scripts', 'montheme_register_assets');
add_filter('document_title_separator' , 'montheme_title_separator');
 // for posts
//  add_filter('use_block_editor_for_post', '__return_false', 10);
//  // for post types
//  add_filter('use_block_editor_for_post_type', '__return_false', 10);