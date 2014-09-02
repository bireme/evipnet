<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri(); ?>/reset.css" />
    <link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri(); ?>/style.css" />
    
    <?php wp_head(); ?>

    <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">
</head>

<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

    <header class='top'>
        <div class="container">

            <div class="contato"><a href="#">   
                Contato
            </a></div>

            <div class="logo"><img src="<?= get_stylesheet_directory_uri();?>/img/logo.png"></div>
            
            <div class="social">
                <ul>
                    <li><a href="#"><img src="<?= get_stylesheet_directory_uri();?>/img/icon-facebook.png"></a></li>
                    <li><a href="#"><img src="<?= get_stylesheet_directory_uri();?>/img/icon-twitter.png"></a></li>
                    <li><a href="#"><img src="<?= get_stylesheet_directory_uri();?>/img/icon-linkedin.png"></a></li>
                    <li><a href="#"><img src="<?= get_stylesheet_directory_uri();?>/img/icon-youtube.png"></a></li>
                </ul>
            </div>
            
            <?php wp_nav_menu( array('menu' => 'Topo' )); ?>

            <div style="clear:both"></div>
        </div>
    </header>
