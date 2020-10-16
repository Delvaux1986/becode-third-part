<?php
/**
 * Header file for the Composition WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Composition
 * @since Composition 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

    <head>
        
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <link rel="profile" href="https://gmpg.org/xfn/11%22%3E">
        <title><?php bloginfo('name')?></title>
        <?php wp_head(); ?>

    </head>
    <header>
        <nav class="navbar navbar-dark bg-dark d-flex justify-content-center text-light" >    
            <?php wp_nav_menu( array( 'theme_location' => 'menu_principal' ));?>
        </nav>
    </header>
    <body <?php body_class(); ?>>

  





        </header><!-- #site-header -->

        <div class="container">
