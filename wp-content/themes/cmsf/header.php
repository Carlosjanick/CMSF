<?php include_once("admin/_app/Helpers/Check.class.php"); ?> 
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name='keywords' content='São Filipe, Municipio, Câmara Municipal'>
        <meta name='description' content='150 words'>
        <meta name='copyright' content='Câmara Municipal de São Filipe'>
        <meta name='language' content='pt-pt'>
        <meta name='robots' content='index,follow'>
        <meta name='author' content='Carlos Pina, carlospinadjarfogo@gmail.com'>
        <meta name='url' content='http://www.cmsf.cv'>
        <title>
        <?php
            // Imprimir o título certo
            if (is_home () ) {
            bloginfo('name');
            } elseif (is_category() || is_tag()) {
            single_cat_title(); echo ' &bull; ' ; bloginfo('name');
            } elseif (is_single() || is_page()) {
            single_post_title(); } else { wp_title('',true);
            }
         ?>
        </title>
        <link rel="shortcut icon" href="<?php echo get_theme_mod( 'm2_favicon' ); ?>" type="image/x-icon">
        <link rel="icon" href="<?php echo get_theme_mod( 'm2_favicon' ); ?>" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&amp;subset=latin-ext" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
        <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet" /> 
        <link href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css" rel="stylesheet" />       
        <link href="<?php bloginfo('template_url'); ?>/css/prettyPhoto.css" rel="stylesheet">
        <link href="<?php bloginfo('stylesheet_url'); ?>"  rel="stylesheet" type="text/css" media="all"/>
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>
    <body>
        <header class="site-header"><!---->
            <div class="top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <!--<p>Lorem Ipsum Dolor Sit Amet</p>-->
                            <ul class="list-inline pull-left ul_left">
                                <li><a href="https://www.facebook.com/Camaramunicpaldesaofilipe/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="mailto:cmsf@cmsf.cv"><i class="fa fa-envelope-o"></i></a></li>
                                <li><a href="#"><i class="fa fa-phone"></i> +2811313 / IP: 8143</a></li>
                            </ul> 
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-inline pull-right">
                                <form class="li_searchform" role="search" method="get" id="searchform" action="<?php echo get_option('home'); ?>">
                                    <span class="archive-link pull-right header-search-span">
                                        <span class="header-search">
                                            <input type="text" value="" name="s" id="s" class="form-control input-sm"  placeholder="O que procuras ?" />
                                            <a role="button" class="btn-srch"><i class="fa fa-search"></i></a>
                                        </span>
                                    </span>
                                </form>
                            </ul>                        
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-default">
                <div class="container">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle Navigation</span>
                        <i class="fa fa-bars"></i>
                    </button>
                    <a href="<?php echo get_settings('home'); ?>" class="navbar-brand" title="logo-site">
                        <!--<img src="<?php /*bloginfo('template_directory');*/ ?>/img/logonovo04.png" alt="Post" class="logo-site">-->
                        <img src="<?php echo get_theme_mod( 'm1_logo' ); ?>" alt="LogoMarca do Site" class="logo-site">
                    </a>
                    <!--menu dinamico-->
                    <?php
                        wp_nav_menu( array(
                            'menu'              => 'primary',
                            'theme_location'    => 'primary',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse',
                            'container_id'      => 'bs-example-navbar-collapse-1',
                            'menu_class'        => 'nav navbar-nav main-navbar-nav',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker())
                        );
                    ?> <!--menu dinamico-->

                    <!-- fecha menu NAVIG -->
                </div>
            </nav>        
        </header>