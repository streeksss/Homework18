<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>



    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name');?></title>
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
    <div class="wrapper">
        <header class="h-page">
            <div class="container clearfix">
                <div class="logo">
                    <a href="<?php echo home_url();?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Blogin"/></a>
                </div>
                <nav class="menu">
                    <?php
                    $args = array(
                        'theme_location' => 'header'
                    );
                    ?>

                    <?php wp_nav_menu($args); ?>
                </nav>
            </div>
        </header>