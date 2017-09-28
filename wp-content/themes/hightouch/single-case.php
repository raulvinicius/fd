<?php if ( strpos( $_SERVER[ "REQUEST_URI" ], "frontend" ) ) : ?>

	<?php $tUrl = get_bloginfo("template_url"); ?>

	<?php require( "frontend/cases.php" ) ?>

<?php else : ?>

	<?php 
		get_header();
		the_post();

		$logo = get_field('logo'); 
		$imagemPrincipal = get_field('imagem_principal');
		$imagemPrincipal = wp_get_attachment_image_src($imagemPrincipal, 'full');
		$logo = wp_get_attachment_image_src( $logo, 'full' );

	 ?>

	<section id="hightouch" class="page-single-case pagina">

	    <section>
	        <div id="wrap-case-principal" class="container-fluid">
	            <div class="row-fluid">

	                <div id="img-case" class="img-topo" style="background: url('<?php echo $imagemPrincipal[0] ?>')">
	                    <div id="mascara-azul">

	                    </div>
	                </div>

	            </div>
	        </div>
	    </section>


	    <section>   
	        <div id="wrap-descricao-case" class="container-fluid">
	            <div class="container">
	                <div class="row-fluid">

	                	<div id="wrap-icon" class="span3">
	                		<figure><img src="<?php bloginfo('template_url') ?>/img/hi-icon-cases.png"></figure>
	                	</div>

	                	<div class="span9">
	                		<h2><?php the_title() ?></h2>
	                		<h3><?php echo get_field('ano') ?></h3>
	                		<?php echo get_field('descricao_cliente') ?>
	                	</div>

	                </div>
	            </div>
	        </div>
	    </section>

        <div id="bottom-descricao" class="container-fluid">
        </div>

	    <section>   
	        <div id="wrap-resumo-case" class="container-fluid">
	            <div class="container">
	                <div class="row-fluid">

	                	<div id="wrap-icon" class="span3">
	                		<figure><img src="<?php bloginfo('template_url') ?>/img/hi-icon-resumo.png"></figure>
	                	</div>

	                	<div id="wrap-texto" class="span9">
	                		<h2>Resumo do case</h2>
	                		<?php echo get_field('resumo') ?>
	                	</div>

	                </div>
	            </div>
	        </div>
	    </section>

        <div id="bottom-resumo" class="container-fluid">
        </div>

	    <section>   
	        <div id="wrap-objetivo-case" class="container-fluid">
	            <div class="container">
	                <div class="row-fluid">

	                	<div class="span4 radius-all animado-02-in-out">
	                		<figure class="animado-02-in-out"><img src="<?php bloginfo('template_url') ?>/img/hi-icon-objetivos.png"></figure>
	                		<h2 class="animado-02-in-out">Objetivos</h2>
	                		<div id="wrap-text">
		                		<?php echo get_field('objetivos') ?>
	                		</div>
	                	</div>

	                	<div class="span4 radius-all animado-02-in-out">
	                		<figure class="animado-02-in-out"><img src="<?php bloginfo('template_url') ?>/img/hi-icon-solucoes.png"></figure>
	                		<h2 class="animado-02-in-out">Soluções</h2>
	                		<div id="wrap-text">
		                		<?php echo get_field('solucoes') ?>
	                		</div>
	                	</div>

	                	<div class="span4 radius-all animado-02-in-out">
	                		<figure class="animado-02-in-out"><img src="<?php bloginfo('template_url') ?>/img/hi-icon-resultados.png"></figure>
	                		<h2 class="animado-02-in-out">Resultados</h2>
	                		<div id="wrap-text">
		                		<?php echo get_field('resultados') ?>
	                		</div>
	                	</div>

	                </div>
	            </div>
	        </div>
	    </section>

        <div id="bottom-objetivo" class="container-fluid">
        </div>

	    <section>
	        <div id="wrap-agencia-case" class="container-fluid">
	            <div class="container">
	                <div class="row-fluid">

	                	<div class="span12">
	                		<h2>Agência Parceira</h2>
	                		<?php
	                			$agencia = get_field('agencia_parceira');
	                			$agencia = $agencia[0];
								$nome = get_the_title($agencia->ID);
	                			$site = get_field('site', $agencia->ID);
	                			$logo = get_field('logo', $agencia->ID);
								$logo = wp_get_attachment_image_src( $logo, 'full' );

	                		?>
	                		<figure>
	                			<a href="http://<?php echo $site ?>" target="_blank" title="<?php echo $nome ?>">
	                				<img class="animado-02-in-out" src="<?php echo $logo[0] ?>">
	                			</a>
	                		</figure>
	                	</div>

	                </div>
	            </div>
	        </div>
	    </section>

        <div id="bottom-descricao" class="container-fluid">
        </div>


	<?php get_footer(); ?>

<?php endif; ?>