<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is a site about the Poltava specialized boarding school of arts">
    <title>Boardingschool</title>
    
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/menu.css" /> -->
    <?php wp_head(); ?>

</head>

<body>
    <nav class="header">
        <div class="menuMob">
                <span></span>
            </div>
            <nav class="navbar-menu">
                <?php
                wp_nav_menu([
                    'theme_location' => 'Assigned Menu',
                    'menu' => 'header_menu',
                    'container' => '',
                    'container_class' => '',
                    'container_id' => '',
                    'menu_class' => 'menu-listing',
                    'menu_id' => '',
                    'echo' => true,
                    'fallback_cb' => 'wp_page_menu',
                    'before' => '',
                    'after' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth' => 2,
                    'walker' => '',
                ]);
                ?>
            </nav>
        <div class="logo">
            <a href="/"><img width="320" height="280" src="<?= ASSETS_PATH  . '/logo.png'; ?>" alt="logo"></a>
            

        </div>
        <?php
        wp_nav_menu([
            'theme_location' => 'Assigned Menu',
            'menu' => 'header_menu',
            'container' => 'div',
            'container_class' => '',
            'container_id' => '',
            'menu_class' => 'menu',
            'menu_id' => '',
            'echo' => true,
            'fallback_cb' => 'wp_page_menu',
            'before' => '',
            'after' => '',
            'link_before' => '',
            'link_after' => '',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth' => 2,
            'walker' => '',
        ]);
        ?>
    </nav>