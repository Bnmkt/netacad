<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
   <link rel="stylesheet" href="<?= assets('assets/css/app.css') ?>">
   <?php wp_head(); ?>
    <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <?php wp_head(); ?>
    <script type="text/javascript">
        const assetFolder = "<?= assets(''); ?>"
    </script>
</head>

<body>
    <div class="page">
        <header class="page_header bg_w">
            <h1 class="title site_title hidden">
                Acad Exchange
            </h1>
            <a href="index.html" class="logo_link">
                <img class="logo" src="<?= assets('assets/images/icons/logo.svg'); ?>" alt="" width="150" height="150">
            </a>
            <nav class="site_navigation vertical_list">
                <h2 class="hidden">Main navigation</h2>
                <?php if( have_rows('menu', 'option') ): ?>

                    <?php while( have_rows('menu', 'option') ): the_row(); ?>

                    <ul class="<?= the_sub_field('menu_classes') ?>">
                        <?php if( have_rows('liens') ): ?>

                            <?php while( have_rows('liens') ): the_row();
                            ?>

                                <li class="navigation_item">
                                    <a class="<?php the_sub_field('classes'); ?>" href="<?= (have_rows("url"))?the_sub_field("url"):the_sub_field("page") ?>"><?php the_sub_field('intitule'); ?></a>
                                </li>

                            <?php endwhile; ?>

                        <?php endif; ?>

                        </ul>
                    <?php endwhile; ?>


                <?php endif; ?>
            </nav>
        </header>