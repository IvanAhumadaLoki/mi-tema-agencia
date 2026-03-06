<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="main-nav">
    <div class="container nav-container">
        <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php 
                $logo_text = get_theme_mod('logo_text', 'AGENCIA CUSTOM');
                $words = explode(' ', $logo_text);
                if (count($words) >= 2) {
                    echo '<strong>' . esc_html($words[0]) . '</strong><span>' . esc_html($words[1]) . '</span>';
                } else {
                    echo '<strong>' . esc_html($logo_text) . '</strong>';
                }
                ?>
            </a>
        </div>
        
        <nav class="desktop-menu">
            <?php wp_nav_menu(array('theme_location' => 'header_menu', 'container' => false, 'menu_class' => 'nav-list')); ?>
        </nav>

        <button class="menu-toggle" id="openMobileMenu">
            <i class="fas fa-bars"></i>
        </button>
    </div>
</header>

<div class="mobile-menu-overlay" id="menuOverlay"></div>
<aside class="mobile-side-menu" id="mobileMenu">
    <button class="menu-close" id="closeMobileMenu">
        <i class="fas fa-times"></i>
    </button>
    <nav class="mobile-nav-container">
        <?php wp_nav_menu(array('theme_location' => 'header_menu', 'container' => false, 'menu_class' => 'mobile-nav-list')); ?>
    </nav>
</aside>