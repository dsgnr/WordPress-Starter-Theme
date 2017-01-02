<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title><?php wp_title(); ?></title>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div id="site-container" class="site-container">
        <header id="site-header" class="header">
            <div class="container">

                    <div class="title-area">
                      <a href="<?php echo esc_url( home_url() ) ?>" title="<?php bloginfo('name'); ?>">
                      <h1><?php bloginfo('name'); ?></h1>
                    </a>
                  </div>

                    <div class="menu-icon js-menu-toggle" id="js-menu-toggle">
                      <span></span>
                    </div>

                    <nav class="site-nav">
                        <?php wp_nav_menu(array(
                            'container' => false,
                            'theme_location' => 'main-nav',
                        )); ?>
                    </nav>


            </div>
        </header>
        <div class="site-content">






