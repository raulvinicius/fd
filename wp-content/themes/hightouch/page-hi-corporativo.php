<?php if ( strpos( $_SERVER[ "REQUEST_URI" ], "frontend" ) ) : ?>

	<?php $tUrl = get_bloginfo("template_url"); ?>

	<?php require( "frontend/cases.php" ) ?>

<?php else : ?>

	<?php get_header(); ?>
	<div class="page corporativo">

		<section id="intro">

			<div class="container">

		    	<h2 class="span12">[hi] Corporativo</h2>
		    	<p class="offset1 span10">Sabemos que estreitando e fortalecendo o relacionamento das pessoas, a empresa fica mais forte e leve, atingindo o alto desempenho.</p>

		    </div>

	    </section>

		<section id="modulos">

			<div class="container">

	    		<p class="offset1 span10">O [hi] Corpor<strong>ativo</strong> é composto por <strong>06 etapas</strong> que se complementam:</p>

			</div>
	    	<figure id="todos">
	    		<img src="<?php bloginfo('template_url') ?>/img/hi-modulos-corporativo.jpg">
	    	</figure>

	    </section>

	    <section id="desc-modulos">

<!--
 	    	<nav>
	    		<ul>
	    			<li><a href="#conhecer">Conhecer</a></li>
	    			<li><a href="#desafiar">Desafiar</a></li>
	    			<li><a href="#sensibilizar">Sensibilizar</a></li>
	    			<li><a href="#unir">Unir</a></li>
	    			<li><a href="#fortalecer">Fortalecer</a></li>
	    			<li><a href="#manter">Manter</a></li>
	    		</ul>
	    	</nav>
 -->
	    	<article id="conhecer">

	    		<div class="row-fluid">
			    	<figure class="span3 offset1">
			    		<img src="<?php bloginfo('template_url') ?>/img/hi-logo-conhecer.png">
			    	</figure>

			    	<div class="bg-azul"></div>

			    	<div class="span8">
			    		<div class="row-fluid">
				    		<h2 class="span7">Conhecer</h2>
			    		</div>
			    		
			    		<div class="row-fluid">
				    		<p class="span7"><strong>Conhecer</strong> é o norteador de todo o programa corporativo. Trata-se uma metodologia de <strong>levantamento de informações</strong> face a face e uma metodologia de <strong>análise de informações</strong>, a fim de estruturar ações e deixa-las personalizadas para a realidade organizacional.</p>
			    		</div>

			    	</div>
	    		</div>

		    </article>

	    	<article id="desafiar">

	    		<div class="row-fluid">
			    	<figure class="span3 offset1">
			    		<img src="<?php bloginfo('template_url') ?>/img/hi-logo-desafiar.png">
			    	</figure>

			    	<div class="bg-azul"></div>

			    	<div class="span8">
			    		<div class="row-fluid">
				    		<h2 class="span7">Desafiar</h2>
			    		</div>
			    		
			    		<div class="row-fluid">
				    		<p class="span7">Desafiar é um convite para que toda equipe participe das ações de melhoria propostas no <strong>Relatório Conhecer</strong>. Os desafios são feitos usando-se três meios:</p>
			    		</div>
			    		
			    		<div class="row-fluid">
					    	<ol class="span12">
					    		<li>Peças impressas</li>
					    		<li>Ações</li>
					    		<li>Peças digitais</li>
					    	</ol>
			    		</div>
			    	</div>
	    		</div>

		    </article>

	    	<article id="sensibilizar">

	    		<div class="row-fluid">
			    	<figure class="span3 offset1">
			    		<img src="<?php bloginfo('template_url') ?>/img/hi-logo-sensibilizar.png">
			    	</figure>

			    	<div class="bg-azul"></div>

			    	<div class="span8">
			    		<div class="row-fluid">
				    		<h2 class="span7">Sensibilizar</h2>
			    		</div>
			    		
			    		<div class="row-fluid">
				    		<p class="span7"><strong>Sensibilizar</strong> é um encontro onde os funcionários se <strong>comprometem com a melhoria organizacional</strong>. Nesse encontro, toda equipe é convidada a se <strong>engajar na construção</strong> de um ambiente colaborativo voltado para a <strong>alta performance</strong>.</p>
			    		</div>
			    		
			    	</div>
	    		</div>

		    </article>

	    	<article id="unir">

	    		<div class="row-fluid">
			    	<figure class="span3 offset1">
			    		<img src="<?php bloginfo('template_url') ?>/img/hi-logo-unir.png">
			    	</figure>

			    	<div class="bg-azul"></div>

			    	<div class="span8">
			    		<div class="row-fluid">
				    		<h2 class="span7">Unir</h2>
			    		</div>
			    		
			    		<div class="row-fluid">
				    		<p class="span7"><strong>Unir</strong> é uma capacitação voltada a <strong>alta performance coletiva</strong>. Esse projeto é dividido em quatro etapas: </p>
			    		</div>
			    		
			    		<div class="row-fluid">
					    	<ol class="span12">
					    		<li>Eu</li>
					    		<li>Eu & Você</li>
					    		<li>Equipe</li>
					    		<li>Consciência</li>
					    	</ol>
			    		</div>
			    	</div>
	    		</div>

		    </article>

	    	<article id="fortalecer">

	    		<div class="row-fluid">
			    	<figure class="span3 offset1">
			    		<img src="<?php bloginfo('template_url') ?>/img/hi-logo-fortalecer.png">
			    	</figure>

			    	<div class="bg-azul"></div>

			    	<div class="span8">
			    		<div class="row-fluid">
				    		<h2 class="span7">Fortalecer</h2>
			    		</div>
			    		
			    		<div class="row-fluid">
				    		<p class="span7"><strong>Fortalecer</strong> é um convite para que toda a equipe participe da proposta de valor da empresa na entrega de seus serviços prestados e seus produtos. Este projeto é uma ferramenta voltada para o maior <strong>nível de engajamento</strong> dos funcionários na realização da estratégia empresarial.</p>
			    		</div>
			    	</div>
	    		</div>

		    </article>

	    	<article id="manter">

	    		<div class="row-fluid">
			    	<figure class="span3 offset1">
			    		<img src="<?php bloginfo('template_url') ?>/img/hi-logo-manter.png">
			    	</figure>

			    	<div class="bg-azul"></div>

			    	<div class="span8">
			    		<div class="row-fluid">
				    		<h2 class="span7">Manter</h2>
			    		</div>
			    		
			    		<div class="row-fluid">
				    		<p class="span7"><strong>Manter</strong> é uma capacitação voltada para a alta <strong>performance individual</strong>. Esse projeto é dividido em três etapas:</p>
			    		</div>
			    		
			    		<div class="row-fluid">
					    	<ol class="span12">
					    		<li>Quero ser Líder</li>
					    		<li>Autoconceito de liderança</li>
					    		<li>Esclarecimento</li>
					    	</ol>
			    		</div>
			    	</div>
	    		</div>

		    </article>

	    </section>


		<?php get_footer(); ?>

	</div>

<?php endif; ?>