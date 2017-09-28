<?php get_header(); ?>

<section id="hightouch" class="pagina">

    <section id="section-case-home" >
        <div id="wrap-case-home" class="scroll-lock page-section container-fluid">

            <div id="msg-inicial" class="row-fluid">

                <p id="principal">Acreditamos no potencial das pessoas</p>
                <span class="line"></span>
                <p id="secundario">Focamos na habilidade emocional e relacional para que você possa...</p>

            </div>
                
            <div id="produtos" class="row-fluid">

                <a href="<?php bloginfo('url') ?>/solucoes/hi-comemoracao">
                    <article id="comemoracao" class="produto hided animado-02-in-out">
                        <div class="animado-02-in-out">

                            <span class="ico-produto">
                                <span class="hided animado-02-in-out bg-ico"></span>
                                <span class="hided animado-04-in-out layer1"></span>
                                <span class="hided animado-06-in-out layer2"></span>
                            </span>

                            <p class="desc">comemorar o legado da sua empresa</p>

                        </div>
                        <div class="clearfix"></div>
                    </article>
                </a>

                <div id="ou" class="hided animado-06-in-out span1"><p><span id="line1">tanto</span> quanto</p></div>

                <a href="<?php bloginfo('url') ?>/solucoes/hi-corporativo">
                    <article id="corporativo" class="produto hided animado-04-in-out">
                        <div class="animado-02-in-out">
                            
                            <span class="ico-produto">
                                <span class="hided animado-02-in-out bg-ico"></span>
                                <span class="hided animado-04-in-out layer1"></span>
                                <span class="hided animado-06-in-out layer2"></span>
                            </span>

                            <p class="desc">conquistar uma equipe de alto desempenho</p>

                        </div>
                        <div class="clearfix"></div>
                    </article>
                </a>

                <div id="ou" class="hided animado-06-in-out span1"><p><span id="line1">ou até</span> mesmo</p></div>

                <a href="<?php bloginfo('url') ?>/hi-school">
                    <article id="hischool" class="produto hided animado-06-in-out">
                        <div class="animado-02-in-out">

                            <span class="ico-produto">
                                <span class="hided animado-02-in-out bg-ico"></span>
                                <span class="hided animado-04-in-out layer1"></span>
                                <span class="hided animado-06-in-out layer2"></span>
                            </span>

                            <p class="desc">engajar sua marca em uma causa do bem</p>

                        </div>
                        <div class="clearfix"></div>
                    </article>
                </a>

            </div>
                
        </div>
    </section>

<!--
     <div id="bottom-solucoes" class="entrelinha container-fluid">
    </div>
-->
     <section>
        <div id="wrap-conheca-nos" class="page-section container-fluid">
            <div class="container">
                <div class="row-fluid">

                    <div class="span4">
                        <figure><img class="animado-02-in-out hided" src="<?php bloginfo("template_url") ?>/img/hi-figure-branca.png"></figure>
                    </div>

                    <div id="wrap-texto" class="hided animado-06-in-out span5 offset1">
                        <p>A [hi] é uma empresa que desafia pessoas a melhorarem a cada dia. Acreditamos em pessoas mais vivas, mais humanas, amáveis e envolvidas.</p>

                        <a class="animado-06-in-out" href="<?php bloginfo('url') ?>/hi">Desafie-se</a>
                    </div>


                </div>
            </div>
        </div>
    </section>

<!-- 
    <div id="bottom-conheca-nos" class="entrelinha container-fluid">
    </div>
-->
<?php 
    $GLOBALS['footerHome'] = true;
    get_footer();
?>
