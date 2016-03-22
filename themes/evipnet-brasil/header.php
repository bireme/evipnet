<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri(); ?>/reset.css" />
    <link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri(); ?>/style.css" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <?php wp_head(); ?>

    <script type='text/javascript' src='<?= get_stylesheet_directory_uri(); ?>/scripts.js'></script>
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

            <div class="contato">
                <a href="#contato" class="fancybox">Contato</a>
                <div style="display:none" class="fancybox-hidden">
                    <div id="contato">
                        <?php
                            $contact_page = get_page_by_title( 'Contato', OBJECT, 'wpcf7_contact_form' );
                            if( $contact_page ) {
                                $shortcode = sprintf( '[contact-form-7 id="%1$d" title="%2$s"]', $contact_page->ID, $contact_page->post_title );
                                echo do_shortcode($shortcode);
                            }
                        ?>
                    </div>
                </div>
            </div>

            <div class="logo"><img src="<?= get_stylesheet_directory_uri();?>/img/logo.png"></div>
            
            <div class="social">
                <ul>
                    <?php if(get_option('link_facebook')): ?>
                        <li><a href="<?= esc_attr( get_option('link_facebook') ); ?>"><img src="<?= get_stylesheet_directory_uri();?>/img/icon-facebook.png"></a></li>
                    <?php endif; ?>
                    <?php if(get_option('link_twitter')): ?>
                        <li><a href="<?= esc_attr( get_option('link_twitter') ); ?>"><img src="<?= get_stylesheet_directory_uri();?>/img/icon-twitter.png"></a></li>
                    <?php endif; ?>
                    <?php if(get_option('link_linkedin')): ?>
                        <li><a href="<?= esc_attr( get_option('link_linkedin') ); ?>"><img src="<?= get_stylesheet_directory_uri();?>/img/icon-linkedin.png"></a></li>
                    <?php endif; ?>
                    <?php if(get_option('link_youtube')): ?>
                        <li><a href="<?= esc_attr( get_option('link_youtube') ); ?>"><img src="<?= get_stylesheet_directory_uri();?>/img/icon-youtube.png"></a></li>
                    <?php endif; ?>
                </ul>
            </div>
            
            <?php wp_nav_menu( array('menu' => 'Topo' )); ?>

            <div style="clear:both"></div>
        </div>
    </header>
