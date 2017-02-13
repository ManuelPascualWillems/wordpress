<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
    <?php
        $host  = $_SERVER['HTTP_HOST'];
        $uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $base = "http://" . $host . $uri . "/wp-content/themes/plantilla-tema/js";
      ?>
    <script src="<?php echo $base?>/bootstrap.js"></script>
    <script src="<?php echo $base?>/dropdown.js"></script>
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <?php wp_head(); ?>

  </head>
  <body>
    <div class="page-header">
      <h1><?php bloginfo('name'); ?></h1>
    </div>
    <nav class="navbar navbar-default navigate" role="navigation">
          <?php
          wp_nav_menu( array(
               'menu'              => 'primary',
               'theme_location'    => 'primary',
               'depth'             => 2,
               'container'         => 'div',
               'container_class'   => 'collapse navbar-collapse',
               'container_id'      => 'bs-example-navbar-collapse-1',
               'menu_class'        => 'nav navbar-nav',
               'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
               'walker'            => new wp_bootstrap_navwalker())
           );
       ?>
    </nav>
