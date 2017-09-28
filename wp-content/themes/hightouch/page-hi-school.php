<?php if ( strpos( $_SERVER[ "REQUEST_URI" ], "frontend" ) ) : ?>

	<?php $tUrl = get_bloginfo("template_url"); ?>

	<?php require( "frontend/cases.php" ) ?>

<?php else : ?>

	<?php get_header(); ?>

	<div id="hightouch" class="page hischool pagina">

    <section id="intro">
    	<div class="container-fluid">
    		<div class="row-fluid">
	    		<h2 class="span8 offset3">[hi] School</h2>
    		</div>
    		<div class="row-fluid">
	    		<h3 class="span8 offset3">É um produto educacional que gera benefício social para a comunidade através de bate-papos em escolas.</h3>
    		</div>
    		<div class="row-fluid">
	    		<h4 class="span8 offset3">Com o projeto, temos a intenção de passar, também para os jovens, o conteúdo dos nossos treinamentos afim de aproveitar todo seu potencial emocional e relacional.</h4>
    		</div>
    	</div>
    </section>

    <section id="escolas">
		<div class="overlines"></div>

    	<h2 id="titulo">Algumas escolas em que estamos presentes</h2>
    	<div class="row-fluid">
	    	<ul>
	    		<li class="span4" style="background: url('<?php bloginfo('template_url') ?>/img/hi-bate-papo-sigma.jpg') no-repeat center"><p>Sigma</p></li>
	    		<li class="span4" style="background: url('<?php bloginfo('template_url') ?>/img/hi-bate-papo-marista-champagnat.jpg') no-repeat center"><p class="cell">Marista Champagnat</p></li>
	    		<li class="span4" style="background: url('<?php bloginfo('template_url') ?>/img/hi-bate-papo-madre-salles.jpg') no-repeat center"><p>Madre Carmem Sallés</p></li>
	    		<li class="span4" style="background: url('<?php bloginfo('template_url') ?>/img/hi-bate-papo-leonardo-da-vinci.jpg') no-repeat center"><p>Leonardo da Vinci</p></li>
	    	</ul>
    	</div>
    </section>

    <section id="mais-escolas">
    	<div class="overlines"></div>
    	<h2 id="titulo">Outras escolas alcançadas</h2>
    	<div class="container-fluid">
	    	<div class="row-fluid">
		    	<ul>
		    		<div class="span3">
		    		<li>
		    			<h2>Águas Claras</h2>
		    			<ul>
		    				<li>La Salle</li>
							<li>Sigma</li>
		    			</ul>
		    		</li>
		    		<li>
		    			<h2>Asa Norte</h2>
		    			<ul>
		    				<li>Carmen Salles</li>
		    				<li>CEAN</li>
		    				<li>Colégio Militar</li>
		    				<li>Gisno</li>
		    				<li>JK</li>
		    				<li>João Paulo II</li>
		    				<li>Leonardo da Vinci</li>
		    				<li>Paulo Freire</li>
		    				<li>Pódion</li>
		    				<li>Sagrada Família</li>
		    				<li>Sagrado Coração de Maria</li>
		    				<li>Santa Doroteia</li>
		    				<li>Sigma</li>
		    			</ul>
		    		</li>
		    		<li>
		    			<h2>Asa Sul</h2>
		    			<ul>
		    				<li>Batista</li>
		    				<li>CEMA</li>
		    				<li>CEMEB</li>
		    				<li>CESAS</li>
		    				<li>CMDP II</li>
		    				<li>Cor Jesu</li>
		    				<li>Dom Bosco</li>
		    				<li>Galois</li>
		    				<li>La Salle</li>
		    				<li>Leonardo da Vinci</li>
		    				<li>Maristão</li>
		    				<li>Notre Dame</li>
		    				<li>Objetivo</li>
		    				<li>Setor Leste</li>
		    				<li>Sigma</li>
		    			</ul>
		    		</li>
		    		</div>
		    		<div class="span3">
		    		<li>
		    			<h2>Candangolândia</h2>
		    			<ul>
		    				<li>CEM JK</li>
		    			</ul>
		    		</li>
		    		<li>
		    			<h2>Ceilândia</h2>
		    			<ul>
		    				<li>CED 06</li>
		    				<li>CED 11</li>
		    			</ul>
		    		</li>
		    		<li>
		    			<h2>Gama</h2>
		    			<ul>
		    				<li>CG</li>
		    			</ul>
		    		</li>
		    		<li>
		    			<h2>Guará</h2>
		    			<ul>
		    				<li>CED 01</li>
		    				<li>CED 02</li>
		    				<li>CED 04</li>
		    				<li>Projeção</li>
		    			</ul>
		    		</li>
		    		<li>
		    			<h2>Lago Norte</h2>
		    			<ul>
		    				<li>CECAP</li>
		    			</ul>
		    		</li>
		    		<li>
		    			<h2>Lago Sul</h2>
		    			<ul>
		    				<li>CEL</li>
		    				<li>Escola das Nações</li>
		    				<li>Mackenzie </li>
		    			</ul>
		    		</li>
		    		<li>
		    			<h2>Novo Gama</h2>
		    			<ul>
		    				<li>Fernando Pessoa</li>
		    				<li>João XXIII</li>
		    			</ul>
		    		</li>
		    		<li>
		    			<h2>Núcleo Bandeirante</h2>
		    			<ul>
		    				<li>CEM 01</li>
		    				<li>Domingo Sávio</li>
		    				<li>La Salle</li>
		    			</ul>
		    		</li>
		    		<li>
		    			<h2>Octogonal</h2>
		    			<ul>
		    				<li>CIMAN</li>
		    			</ul>
		    		</li>
		    		</div>
		    		<div class="span3">
		    		<li>
		    			<h2>Planaltina</h2>
		    			<ul>
		    				<li>Centro Educacional Varzea</li>
		    			</ul>
		    		</li>
		    		<li>
		    			<h2>Recanto das Emas</h2>
		    			<ul>
		    				<li>Reação</li>
		    			</ul>
		    		</li>
		    		<li>
		    			<h2>Riacho Fundo</h2>
		    			<ul>
		    				<li>CED Passionista</li>
		    			</ul>
		    		</li>
		    		<li>
		    			<h2>Samambaia</h2>
		    			<ul>
		    				<li>CED 619</li>
		    				<li>CEM 304</li>
		    				<li>CEMA - Objetivo</li>
		    				<li>Fundação Bradesco</li>
		    			</ul>
		    		</li>
		    		<li>
		    			<h2>Sobradinho</h2>
		    			<ul>
		    				<li>CED 02</li>
		    				<li>CED 03</li>
		    				<li>Instituto São José</li>
		    				<li>La Salle</li>
		    				<li>Mont Blanc</li>
		    				<li>Santa Rita</li>
		    				<li>Santo Elias</li>
		    				<li>Sete Estrelas</li>
		    			</ul>
		    		</li>
		    		</div>
		    		<div class="span3">
		    		<li>
		    			<h2>Taguatinga</h2>
		    			<ul>
		    				<li>CED 02</li>
		    				<li>CED 05</li>
		    				<li>CEM 03</li>
		    				<li>CEMAB</li>
		    				<li>CEMEIT</li>
		    				<li>Centrão</li>
		    				<li>Colégio Certo</li>
		    				<li>Guiness</li>
		    				<li>Ideal</li>
		    				<li>Leonardo da Vinci</li>
		    				<li>Marista Champagnat</li>
		    				<li>Objetivo</li>
		    				<li>Projeção</li>
		    				<li>Santa Terezinha</li>
		    			</ul>
		    		</li>
		    		<li>
		    			<h2>Outros estados</h2>
		    			<ul>
		    				<li>João Amos Comenius (São Paulo - SP)</li>
		    				<li>Athos (Unaí - MG)</li>
		    			</ul>
		    		</li>
		    		</div>
		    	</ul>
	    	</div>
    	</div>

    </section>

    <section id="contrapartidas">
    	<h2 id="titulo">Contrapartidas de patrocínio</h2>

    	<div class="container-fluid">
    		<div class="row-fluid">
		    	<p class="span12">Diferentes modalidades de patrocínio que abrangem algumas ou todas as contrapartidas abaixo e mais ainda.</p>
   			</div>
    		<div class="row-fluid">
		    	<ul>
		    		<li class="span3">
		    			<article>
		    				<figure>
		    					<img src="<?php bloginfo('template_url') ?>/img/hi-ico-material-impresso.jpg">
		    				</figure>
		    				<h2>Marca em material gráfico</h2>
		    				<p>Incluímos sua marca em pastas, avaliações, material de dinâmica, papel timbrado e camiseta da equipe</p>
		    			</article>
		    		</li>
		    		<li class="span3">
		    			<article>
		    				<figure>
		    					<img src="<?php bloginfo('template_url') ?>/img/hi-ico-agradecimento.jpg">
		    				</figure>
		    				<h2>Agradecimento à empresa patrocinadora</h2>
		    				<p>Incluimos uma fala especial de agradecimento ao patrocinador durante os bate-papos</p>
		    			</article>
		    		</li>
		    		<li class="span3">
		    			<article>
		    				<figure>
		    					<img src="<?php bloginfo('template_url') ?>/img/hi-ico-redes-sociais.jpg">
		    				</figure>
		    				<h2>Marca nas Redes Sociais</h2>
		    				<p>Além da marca nas capas das redes sociais, tambémincluímos postagens com hashtagse menções sobre sua empresa</p>
		    			</article>
		    		</li>
		    		<li class="span3">
		    			<article>
		    				<figure>
		    					<img src="<?php bloginfo('template_url') ?>/img/hi-ico-banner-palco.jpg">
		    				</figure>
		    				<h2>Marca dentro e fora dos palcos</h2>
		    				<p>Um banner é fixado no palco com a marca da sua empresa, tanto nos bate-papos, quanto em ações promocionais</p>
		    			</article>
		    		</li>
		    	</ul>
	    	</div>
	    	<div class="row-fluid">
	    		<p id="contate" class="span4 offset4 animado-04-in-out"><a href="<?php bloginfo('url') ?>/contato">Entre em contato conosco e solicite uma visita.</a></p>
	    	</div>
	    </div>

    </section>

	<?php get_footer(); ?>

    </div>

<?php endif; ?>