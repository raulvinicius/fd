<?php if ( strpos( $_SERVER[ "REQUEST_URI" ], "frontend" ) ) : ?>

	<?php $tUrl = get_bloginfo("template_url"); ?>

	<?php require( "frontend/cases.php" ) ?>

<?php else : ?>

	<?php get_header(); ?>

	<div id="hightouch" class="page comemoracao pagina">

	    <section id="intro">
	    	<div class="container-fluid">
		    	<div class="row-fluid">
			    	<h2 class="span8 offset1">[hi] Comemoração</h2>
		    	</div>
		    	<div class="row-fluid">
			    	<h3 class="span8 offset1">Envolvemos as datas marcantes de empresas e instituições em eventos idealizados exclusivamente para celebrar um legado.</h3>
		    	</div>
		    	<div class="row-fluid">
			    	<h4 class="span7 offset1">O objetivo é utilizar o Jeito [hi] para ir além e trabalhar contrapartidas internas diferenciadas.</h4>
		    	</div>
	    	</div>
	    </section>
	    
	    <section id="cases" class="page-section">
	    	<div class="overlines"></div>
    		<div class="row-fluid">
    			<h2 id="titulo">Cases</h2>

				<a href="<?php bloginfo('url') ?>/case/colegio-leonardo-da-vinci/">
					<article class="case span12 animado-02-in-out" style="background-image: url('<?php bloginfo('template_url') ?>/img/hi-bg-case-comemoracao-leonardo-da-vinci.jpg')">
						<div class="bg-hover animado-02-in-out">
							<div class="row-fluid">
								<span></span>
								<h2 class="span4 offset1">Leonardo da Vinci</h2>
								<div class="span5 offset1 wrap-desc">
									<div class="row-fluid">
										<div class="row-fluid">
											<p class="">2011 e 2013</p>
										</div>
										<div class="row-fluid">
											<p class="">Comemorando seus 42 e 44 anos o Colégio Leonardo da Vinci realizou em 2011 e 2013 grandes atividades que marcaram a cidade.</p>
											<span class="bt-mais">Ver case</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</article>
				</a>
				
				<a href="">
					<article class="case span12 animado-02-in-out" style="background-image: url('<?php bloginfo('template_url') ?>/img/hi-bg-case-comemoracao-uniceub.jpg')">
						<div class="bg-hover animado-02-in-out">
							<div class="row-fluid">
								<span></span>
								<h2 class="span4 offset1">UniCEUB</h2>
								<div class="span5 offset1 wrap-desc">
									<div class="row-fluid">
										<div class="row-fluid">
											<p class="">2013</p>
										</div>
										<div class="row-fluid">
											<p class="">Para comemorar 45 anos do UniCEUB foi realizado o Fórum UniCEUB Educação Transformadora que movimentou o campus universitário.</p>
											<span class="bt-mais">Ver case</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</article>
				</a>

    		</div>
	    </section>

	    <section id="outros-clientes" class="outros-clientes page-section">

	    	<div class="overlines"></div>
	    	<h2 id="titulo">Outros clientes do <strong><span class="no-wrap">[hi] Comemoração</span></strong></h2>

	    	<div class="container-fluid">
	    		
	    		<div class="row-fluid">

			    	<ul>
			    		<li class="span12" style="background: url('<?php bloginfo('template_url') ?>/img/hi-logo-intech.png') no-repeat center">Intech</li>
			    	</ul>

		    	</div>

	    	</div>

	    </section>


	<?php get_footer(); ?>

	</div>

<?php endif; ?>