<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>/normalize.css">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&display=swap" rel="stylesheet">
    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/https://kit.fontawesome.com/087f0185d9.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/top-button.js"></script>
   <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
   <?php wp_head(); ?>
</head>
<body>
<!-------------------------top-button---------------->
<div class="pagetop"><a href="#"><i class="fas fa-caret-up triangle_color fa-5x"></i></a>
    <p>top</p></div>
<!-------------------------header---------------------------->




<header>

    <div class="header-nav">
        <div class="logo">
            <a href="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/logo.png" srcset="<?php bloginfo( 'stylesheet_directory' ); ?>/img/logo.png 1x, <?php bloginfo( 'stylesheet_directory' ); ?>/img/logo@2x.png 2x" alt="logo"></a>
<!--            <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/logo@2x.png" width="241px"  height="96px" alt="logo">-->
        </div>

        <nav>
            <ul class="g-nav">
              <?php wp_nav_menu( array(
                 'theme_location'=>'place_global',
                          'container'     =>'',
                          'menu_class'    =>'',
                          'items_wrap' => '%3$s',//<ul>を出力しない
                        ));
                  ?>
            </ul>
        </nav>
    </div>

</header>
