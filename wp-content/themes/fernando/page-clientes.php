<?php get_header(); ?>


<section class="clientes pagina">


	<section class="container-fluid cliente-titulo bg-parallax" data-speed="5">
		<div class="row">
			<div class="container">
				<div class="col-sm-offset-2 col-sm-8">
					<h3>separei aqui, alguns <span>clientes</span> com quem tive a honra de trabalhar</h3>
					<h6>Procuro sempre formar uma aliança estreita ao aplicar uma solução, isso a torna ainda mais eficaz, além de sairmos com algumas amizades a mais na conclusão do projeto</h6>
				</div>
			</div>
		</div>
	</section>

	<div class="container-fluid wrap-clientes">
		<section class="container depoimentos">
			<div class="row carousel">
				<ul>
					<li>
						<div class="col-xs-offset-4 col-xs-4 col-sm-offset-1 col-sm-3">
							<figure class="circle"><img src="<?php bloginfo('template_url') ?>/img/fernando-duarte-logo-serpro.jpg" alt=""></figure>
						</div>

						<div class="col-xs-offset-6 col-xs-8 col-sm-offset-0 col-sm-7">
							<p class="depoimento">A importância de despertar para uma consciência mais ampla e melhor, mais humana. Mudança de valor, retorno as raízes, momento de reflexão. Ainda há tempo para mudarmos para nosso bem e dos outros.</p>
							<div class="nome">
								<p>Martelleto</p>
								<span>Gerente Regional | SERPRO BH</span>
							</div>
						</div>
					</li>
					<li>
						<div class="col-xs-offset-4 col-xs-4 col-sm-offset-1 col-sm-3">
							<figure class="circle"><img src="<?php bloginfo('template_url') ?>/img/fernando-duarte-logo-brbcard-depo.jpg" alt=""></figure>
						</div>

						<div class="col-xs-offset-6 col-xs-8 col-sm-offset-0 col-sm-7">
							<p class="depoimento">Maravilhoso poder reconhecer pessoas importantes da minha vida. Me inspirou a continuar fazendo a diferença no mundo.</p>
							<div class="nome">
								<p>Eliane Santos</p>
								<span>Gerente de Recursos Humanos | BRBCard</span>
							</div>
						</div>
					</li>
					<li>
						<div class="col-xs-offset-4 col-xs-4 col-sm-offset-1 col-sm-3">
							<figure class="circle"><img src="<?php bloginfo('template_url') ?>/img/fernando-duarte-logo-serpro.jpg" alt=""></figure>
						</div>

						<div class="col-xs-offset-6 col-xs-8 col-sm-offset-0 col-sm-7">
							<p class="depoimento">As "marcas deixadas" pelas palavras, mensagens e vídeos apresentados pelo palestrante. O que ouvi nesta tarde, vai fazer diferença, trazer mudanças para minha vida. Fernando, parabéns pela inda profissão. Muito obrigada pelo compartilhamento do seu conhecimento.</p>
							<div class="nome">
								<p>Rita Nogueira</p>
								<span>SERPRO BA</span>
							</div>
						</div>
					</li>
				</ul>
				<div class="col-sm-12 buttons contador-ferds">
					<button id="ant" class="ani-06"></button>
					<span id="item" class="ani-04"></span>
					<span id="item" class="ani-04"></span>
					<span id="item" class="ani-04"></span>
					<button id="pro" class="ani-06"></button>
				</div>
			</div>
		</section>

		<section class="container marcas">
			<div class="row">

				<div class="col-sm-12">
					<div class="row">
						
					<ul>
						<li>
							<div class="conteudo">
								<i class="ani-02"><img nopin="nopin" src="<?php bloginfo('template_url') ?>/img/fernando-duarte-logo-leonardo-da-vinci.png" alt=""></i>
								<p>Leonardo da Vinci</p>
							</div>
						</li>

						<li>
							<div class="conteudo">
								<i class="ani-02"><img nopin="nopin" src="<?php bloginfo('template_url') ?>/img/fernando-duarte-logo-uniceub.png" alt=""></i>
								<p>UniCEUB</p>
							</div>
						</li>

						<li>
							<div class="conteudo">
								<i class="ani-02"><img nopin="nopin" src="<?php bloginfo('template_url') ?>/img/fernando-duarte-logo-agil.png" alt=""></i>
								<p>Ágil</p>
							</div>
						</li>

						<div class="clearfix"></div>

						<li>
							<div class="conteudo">
								<i class="ani-02"><img nopin="nopin" src="<?php bloginfo('template_url') ?>/img/fernando-duarte-logo-iesb.png" alt=""></i>
								<p>IESB</p>
							</div>
						</li>

						<li>
							<div class="conteudo">
								<i class="ani-02"><img nopin="nopin" src="<?php bloginfo('template_url') ?>/img/fernando-duarte-logo-coronario.png" alt=""></i>
								<p>Gráfica Coronário</p>
							</div>
						</li>


						<div class="clearfix"></div>

						<li>
							<div class="conteudo">
								<i class="ani-02"><img nopin="nopin" src="<?php bloginfo('template_url') ?>/img/fernando-duarte-logo-brbcard.png" alt=""></i>
								<p>BRBCard</p>
							</div>
						</li>

					</ul>
					</div>
				</div>

			</div>
		</section>
	</div>

	<?php $fraseContato = 'Emocione também a sua empresa, com <span>cursos e palestras incríveis</span>' ?>
	<?php include 'contato-rodape.php' ?>

</section>


<?php get_footer(); ?>