<?php get_header(); ?>

<section class="pagina artigos">
	
	<section class="busca container-fluid">
		<div class="row">
			<div class="container">
				<div class="row">
					<form action="" class="col-md-8 col-md-offset-2">
						<input type="text">
						<input class="ani-04" type="submit" value="OK">
					</form>
				</div>
			</div>
		</div>
	</section>

	<section class="lista container">
		<ul>
			<li class="row">
				

				<li class="col-md-12 destaque">
					<article>
						<a href="<?php bloginfo('url') ?>/artigos/competencias-socioemocionais">
							<div class="col-md-7">
								<figure><img src="<?php bloginfo('template_url') ?>/img/ph-artigo01.jpg"></figure>
								<a id="categoria" class="ani-04" href="<?php bloginfo('url') ?>/artigos/competencias-socioemocionais">
									<h6>Socioemocional</h6>
								</a>
							</div>
							<div class="col-md-5">
								<time pubdate datetime="2017-12-08">08 de Dez, 2017</time>
								<h3><strong>Competências Socioemocionais:</strong> a capacidade de ser melhor a cada dia</h3>
								<a href="<?php bloginfo('url') ?>/artigos/competencias-socioemocionais" class="bt">Ler mais</a>
							</div>
						</a>
					</article>
				</li>

<!-- 
				<?php for ($i=0; $i < 6; $i++) : ?>

					<li class="col-md-4">
						<article>
							<a href="<?php bloginfo('url') ?>">
								<figure><img src="<?php bloginfo('template_url') ?>/img/"></figure>
								<a href="<?php bloginfo('url') ?>">
									<h6>Socioemocional</h6></a>
								<time>01 de Dez, 2017</time>
								<h3>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h3>
								<a href="<?php bloginfo('url') ?>" class="bt">Ler mais</a>
							</a>
						</article>
					</li>

				<?php endfor; ?>
 -->
				
			</li>
		</ul>
	</section>	

</section>





<?php get_footer(); ?>