<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

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

        <title><?php echo ( $post->post_name != '' ) ? get_the_title() . " | " : ""; ?>Fernando Duarte</title>
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <!--[if IE]><link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/favicon.ico"><![endif]-->
        <link rel="icon" href="<?php bloginfo('template_url') ?>/favicon.ico">
        <link rel="apple-touch-icon" href="<?php bloginfo('template_url') ?>/apple-touch-icon.png">

        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/animate.css">

        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css">

        
        <!-- http://www.favicon-generator.org/ -->
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
        <meta name="msapplication-TileColor" content="#f7931e">
        <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#f7931e">

<!--         <?php if (!is_user_logged_in()): ?>
            <meta http-equiv="refresh" content="0; URL=http://facebook.com/Ferds.Duarte">
        <?php endif ?>
 -->
        <!-- PUBLICAÇÃO EM REDES SOCIAIS -->

        <!-- FACEBOOK -->
        <meta property='fb:admins' content='Ferds.Duarte' /> <!-- essa configuração diz ao Facebook que você é o administrador da fanpage -->
        <meta property='og:locale' content='pt_BR' />
        <meta property='og:title' content='' /> <!-- título interessante para a página (ex.: Conhecendo a equipe) -->
        <meta property='og:site_name' content='Fernando Duarte' /> <!-- nome do site (ex.: Empresa X) -->
        <meta property='og:description' content='' /> <!-- Descrição do conteúdo/site para intrigar os usuários (ex.: Fazendo o bem para o mundo), max: 200 caracteres -->
        <meta property='og:url' content='<?php bloginfo('url') ?>' />
        <meta property='og:image' content='<?php bloginfo('template_url') ?>/img/imagem.png'/>
        <meta property='og:image:type' content="image/png">
        <meta property="og:image:width" content="800">
        <meta property="og:image:height" content="600">
        <meta property='og:type' content='website' />
        <!-- caso o tipo seja um "ARTICLE" -->
        <!-- 
        <meta property="og:type" content="article">
        <meta property="article:author" content="Autor">
        <meta property="article:section" content="Tutoriais">
        <meta property="article:tag" content="Facebook, tags, og, open graph">
        <meta property="article:published_time" content="date_time">
         -->

        <!-- TWITTER -->
        <meta name='twitter:card' content='summary'> <!-- photo (para imagens), player (para vídeos), Summary (para todo o resto) -->
        <meta name='twitter:url' content='<?php bloginfo('url') ?>'>
        <meta name='twitter:title' content='' /> <!-- título interessante para a página (ex.: Conhecendo a equipe) -->
        <meta name='twitter:description' content='' /> <!-- Descrição do conteúdo/site para intrigar os usuários (ex.: Fazendo o bem para o mundo), max: 200 caracteres -->
        <meta name='twitter:image' content='<?php bloginfo('template_url') ?>/img/imagem.png'/> <!-- entre 60x60px e 120x120px -->

        <!-- GOOGLE+ -->
        <!-- Atualize a tag html para incluir os atributos itemscope e itemtype. -->
        <meta itemprop='name' content=''> <!-- nome ou título interessante para a página (ex.: Conhecendo a equipe) -->
        <meta itemprop='description' content=''>  <!-- Descrição do conteúdo/site para intrigar os usuários (ex.: Fazendo o bem para o mundo), max: 200 caracteres -->
        <meta itemprop='image' content='<?php bloginfo('template_url') ?>/img/imagem.png'/> <!-- entre 60x60px e 120x120px -->


    </head>

    <?php 
    /*
    if (!is_user_logged_in()): 

    die();

    endif 
    */
    ?>

    <body class="wp-<?php global $post; $post_slug=$post->post_name; echo $post_slug; ?>">
        <?php wp_path_to_js(); ?>

        <!--[if lt IE 8]>

            <div class="alert">

                <p class="browserupgrade">Você está usando um navegador <strong>desatualizado</strong>. Por favor, <a href="http://browsehappy.com/">atualize seu browser</a> para melhorar sua experiência na internet.</p>
                <button type="button" class="close">×</button>

            </div>

        <![endif]-->

    <div class="moldura t"></div>
    <div class="moldura r"></div>
    <div class="moldura b"></div>
    <div class="moldura l"></div>


    <header>
        <nav class="menu fechado">
            <div class="wrap-menu">

                <div class="moldura-l"></div>
                
                <button id="menu-btn" class=" menu-btn ani-02">
                    <i class="t"></i>
                    <i class="m"></i>
                    <i class="b"></i>
                    <span class="fecha-menu"></span>
                </button>

                <h1><a href="<?php bloginfo('url') ?>">Fernando Duarte</a></h1>

                <ul class="nv-1">
                    <li><a class="ani-02" href="<?php bloginfo('url') ?>/competencias-socioemocionais">Socioemocional</a></li>
                    <li><a class="ani-02" href="<?php bloginfo('url') ?>/hischooll">[hi]School</a></li>
                    <li id="solucoes" class="submenu">
                        <a class="ani-02 click" href="#">Produtos</a>
                        <ul class="ani-02">

                            <li>
                                <a class="ani-02" href="<?php bloginfo('url') ?>/deixando-marcas">Deixando Marcas</a>
                            </li>
 
                            <li>
                                <a class="ani-02" href="<?php bloginfo('url') ?>/rumo-ao-topo">Rumo ao Topo</a>
                            </li>

                            <li>
                                <a class="ani-02" href="<?php bloginfo('url') ?>/jornada-do-heroi">Jornada do Herói</a>
                            </li>
 
                            <li>
                                <a class="ani-02" href="<?php bloginfo('url') ?>/alcando-voo">Alçando Voo</a>
                            </li>

                            <li>
                                <a class="ani-02" href="<?php bloginfo('url') ?>/delions">Delions</a>
                            </li>

                         </ul>
                    </li>
                    <li><a class="ani-02" href="<?php bloginfo('url') ?>/artigos">Artigos</a></li>
                    <li><a class="ani-02" href="<?php bloginfo('url') ?>/o-palestrante">O Palestrante</a></li>
                </ul>

            </div>
        </nav>
    </header> 



