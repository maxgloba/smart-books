<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="keywords" content="<?php bloginfo('keywords'); ?>"/>
    <meta name="description" content="<?php bloginfo('description'); ?>"/>
    <meta name="copyright" content="<?php bloginfo('copyright'); ?>">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, user-scalable=no, user-scalable=0, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0 user-scalable=0">
    <meta name="author" content="MaxGloba">
    <meta name="theme-color" content="#ffffff">

    <title>
      <?php
        if(is_front_page()){
          bloginfo('name'); echo ' - '; bloginfo('description');
        } else {
          echo get_bloginfo('name'); wp_title( '|', true, 'left' );
        }
      ?>
    </title>

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico?v=1.02" />

    <script>
      const vh = window.innerHeight * 0.01;
      document.documentElement.style.setProperty('--vh', `${vh}px`);
    </script>

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> >

    <header class="main-header">
      <div class="container">
        <div class="main-header__logo">
          <a href="<?php echo home_url(); ?>"><img src="<?php echo IMG; ?>/logo-white.png" alt=""></a>
        </div>
        <ul class="main-header__info">
          <li>
            <a target="_blank" href="https://www.instagram.com/smart_books_ua/">
              <i class="fab fa-instagram"></i>
              @smart_books_ua
            </a>
          </li>
          <li>
            <a target="_blank" href="tel:0731817786">
              <i class="far fa-phone"></i>
              (073) 181-77-86
            </a>
          </li>
        </ul>
      </div>
    </header>

    <?php get_template_part( 'miniCart/cart', 'template' ); ?>
    <?php get_template_part( 'miniCart/discount', 'template' ); ?>

    <?php if( is_single() && TYPE() === 'product' ): ?>
      <?php get_template_part( 'miniCart/cart', 'template' ); ?>
      <?php get_template_part( 'miniCart/discount', 'template' ); ?>
    <?php endif; ?>