<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico">

  <?php wp_head(); ?>
</head>

<body <?php body_class(''); ?>>
 
<header class="m-header d-select-none">
    <div class="container-fluid d-bg-gray-light --d-border-bottom py-2">
        <div class="container p-0">
            <div class="row">
                <div class="col-12 d-flex flex-column align-items-center flex-md-row justify-content-md-between">
                    
                    <?php if (is_page_template( 'page-corporativo.php' )): ?>
                        <div class="c-navbar --main --brand-color-three mb-3 mb-lg-0">
                            <?php wp_nav_menu( array( 'theme_location' => 'primary_menu',)); ?>
                        </div>
                    <?php elseif (is_page( 'central-de-ajuda' )): ?>
                        <div class="c-navbar --main mb-3 mb-lg-0">
                            <?php wp_nav_menu( array( 'theme_location' => 'primary_menu',)); ?>
                        </div>
                    <?php else: ?>
                        <div class="c-navbar --brand-color --main mb-3 mb-lg-0">
                            <?php wp_nav_menu( array( 'theme_location' => 'primary_menu',)); ?>
                        </div>
                    <?php endif ?>
                    
                    <a class="e-btn --brand-color-two --small mb-3 mb-lg-0" title="Fale com um consultor" href="<?php echo home_url(); ?>/educacional/fale-com-um-consultor">Fale com um consultor</a>

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-4 d-bg-gray-light">
        <div class="container p-0">
            <nav class="m-header__menu_secondary navbar navbar-expand-lg">
                
                <!-- Logo primary and secondary -->
                <?php if (is_page_template( 'page-corporativo.php' )): ?>
                    <img src="<?php echo get_theme_mod( 'secondary_logo' ); ?>" alt="Logo Aulapp Corporativo">
                <?php elseif (is_page_template( 'page-educacional.php' ) || is_page(array(46,24,22,20 ))): ?>
                    <?php the_custom_logo(); ?>
                <?php else: ?>
                    <img src="<?php echo get_theme_mod( 'tertiary_logo' ); ?>" alt="Logo Aulapp Tecnologia">
                <?php endif ?>

                <button class="m-header__toggle-bt" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="m-header__toggle-icon material-icons">menu</span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="main-menu">
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'secondary_menu',
                            'container' => false,
                            'menu_class' => 'c-navbar --secondary',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="%1$s" class="navbar-nav mb-2 mb-md-0 %2$s">%3$s</ul>',
                            'depth' => 2,
                            'walker' => new bootstrap_5_wp_nav_menu_walker()
                        ));
                    ?>
                </div>

            </nav>
        </div>
    </div>
</header>