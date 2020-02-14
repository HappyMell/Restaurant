<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and start of the <body> section
 *
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

  <div class="top"></div>
    <header class="page-header">
      <div class="page-header__container">
        <div class="page-header__phone">
          <a href="<?php echo get_field('phone_number', 'options')['url']?>"><?php echo get_field('phone_number', 'options')['title']?></a>
        </div>
        <div class="page-header__logo">
          <a href="index.html" class="page-header__logo">
            <img src="<?php echo the_field('logo', 'options')?>" alt="" />
          </a>
        </div>
        <div class="page-header__links">
        <?php wp_nav_menu( array( 
        'menu' => 'small-mobile-menu',
        'container'   => '',
         
        ) ); ?>  
        </div>
      </div>

      <div class="hamburger__container">
        <button class="hamburger">
          <span>Menu</span>
        </button>
      </div>
      <nav class="page-header__large">
      <?php wp_nav_menu( array( 
        'menu' => 'large-menu',
        'container'   => '',
        'items_wrap'      => '<ul  class="header-menu">%3$s</ul>' 
        ) ); ?>  
      </nav>
      <nav class="page-header__nav">
      <?php wp_nav_menu( array( 
        'menu' => 'main-mobile-menu',
        'container'   => '',
        'items_wrap'      => '<ul  class="page-header__items">%3$s</ul>' 
        ) ); ?>  
     
      </nav>
    </header>
    <main>