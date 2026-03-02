<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="container">
            <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
            <nav class="main-navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header_menu',
                    'menu_class'     => 'nav-links',
                    'fallback_cb'    => false,
                ));
                ?>
            </nav>
        </div>
    </header>