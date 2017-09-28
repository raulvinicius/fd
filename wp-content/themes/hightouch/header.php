<?php 

    /*
    */
    $theme = wp_get_theme()->stylesheet;
    $server = $_SERVER;
    $lnk = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" .$_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    if ($server['SERVER_NAME'] != 'localhost') 
    {
        if (($server['SERVER_NAME'] == 'sejahi.com.br' || $server['SERVER_NAME'] == 'www.sejahi.com.br') && $theme != 'hightouch') 
        {
            switch_theme('hightouch');
            header('Location: ' . $lnk);
            die();
        }
        if (($server['SERVER_NAME'] == 'fernandoduarte.bsb.br' || $server['SERVER_NAME'] == 'www.fernandoduarte.bsb.br') && $theme != 'fernando') 
        {
            switch_theme('fernando');
            header('Location: ' . $lnk);
            die();
        }
    }
    else
    {
        if ($server['REQUEST_URI'] == 'hi' && $theme != 'hightouch') 
        {
            switch_theme('hightouch');
            header('Location: ' . $lnk);
        }
        if ($server['REQUEST_URI'] == 'fernando' && $theme != 'fernando') 
        {
            switch_theme('fernando');
            header('Location: ' . $lnk);
        }
    }

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<!--[if lt IE 7]>
      <html 
        xmlns='http://www.w3.org/1999/xhtml' 
        xmlns:og='http://ogp.me/ns#' 
        class="no-js lt-ie9 lt-ie8 lt-ie7" 
        lang="pt-br">
<![endif]-->
<!--[if IE 7]>
    <html 
        xmlns='http://www.w3.org/1999/xhtml' 
        xmlns:og='http://ogp.me/ns#' 
        class="no-js lt-ie9 lt-ie8" 
        lang="pt-br">
<![endif]-->
<!--[if IE 8]>
    <html 
        xmlns='http://www.w3.org/1999/xhtml' 
        xmlns:og='http://ogp.me/ns#' 
        class="no-js lt-ie9" 
        lang="pt-br">
<![endif]-->
<!--[if gt IE 8]><!-->
<html
    xmlns='http://www.w3.org/1999/xhtml'
    xmlns:og='http://ogp.me/ns#'
    class="no-js"
    lang="pt-br">
<!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo ( $post->post_name != '' ) ? get_the_title() . " | " : ""; ?>[hi]</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">


        <link rel="icon" href="<?php bloginfo('template_url') ?>/favicon.ico">

        <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_url') ?>/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url') ?>/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url') ?>/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url') ?>/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?php bloginfo('template_url') ?>/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#0095da">
        <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#0095da">

        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/normalize.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap-responsive.css">
        <script src="<?php bloginfo('template_url') ?>/js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js"></script>
    </head>

    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header>
            <div id="header" class="container-fluid navbar-fixed-top">
                <div class="row-fluid">

                    <div id="bg-logo" class="span12">
                        <a id="logo" href="<?php bloginfo('url') ?>">
                            <h1>[hi]</h1>
                            <h2>Desafie-se</h2>
                        </a>
                    </div>

                </div>
                <div class="row-fluid">

                    <div id="ico-open-menu" data-trigger="menu">
                        <a href="#">
                            <img src="<?php bloginfo( 'template_url' ) ?>/img/hi-ico-open-menu.png">
                        </a>
                    </div>
                    <div id="menu" class="span12 menu">
                        <nav class="animado-04-in-out">
                            <ul>
                                <li class="link animado-02-in-out"><a href="<?php bloginfo('url') ?>/hi">[hi]</a>
                                </li><li class="link animado-02-in-out"><a href="<?php bloginfo('url') ?>/cases">Cases</a>
                                </li><li class="space link dropdown animado-02-in-out">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Soluções</a>
                                    <ul class="dropdown-menu animado-02-in-out">
                                        <li>
                                            <a class="animado-02-in-out" href="<?php bloginfo('url') ?>/solucoes/hi-comemoracao">[hi] Comemoração</a>
                                        </li>
                                        <li>
                                            <a class="animado-02-in-out" href="<?php bloginfo('url') ?>/solucoes/hi-corporativo">[hi] Corporativo</a>
                                        </li>
                                        <li>
                                            <a class="animado-02-in-out" href="<?php bloginfo('url') ?>/hi-school">[hi] School</a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </li><li class="link animado-02-in-out"><a href="<?php bloginfo('url') ?>/contato">Contato</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </header>