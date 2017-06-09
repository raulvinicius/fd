<?php get_header(); ?>





<section class="container-fluid sobre">
	<div class="row">
		<div class="container">
			<div class="col-sm-offset-2 col-sm-8">
				<figure><img src="<?php bloginfo('template_url') ?>/img/fernando-duarte-foto-fernando.png" alt=""></figure>
				<h3>Lorem ipsum <span>adipisicing</span></h3>
				<h6>Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</h6>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

				<a href="#">Conheça mais da minha a história</a>
			</div>
		</div>
	</div>
</section>


<section class="container-fluid solucoes">
	<div class="row">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-offset-3 col-sm-6 title-solucoes">
					<img src="<?php bloginfo('template_url') ?>/img/fernando-duarte-selo.png" alt="">
					<p>Uma variedade de produtos desenvolvidos para buscar o melhor de cada um.</p>
				</div>

				<div class="col-sm-offset- col-sm-12">
					<ul>

						<li>
							<a href="#" class="produto">
								<div class="conteudo">
									<i class="ani-02"><img src="<?php bloginfo('template_url') ?>/img/fernando-duarte-logo-dm.png" alt=""></i>
									<p class="ani-02">Deixando Marcas</p>
									<span class="ani-02"><p>Saber mais</p></span>
								</div>
							</a>
						</li>

						<li>
							<a href="#" class="produto">
								<div class="conteudo">
									<i class="ani-02"><img src="<?php bloginfo('template_url') ?>/img/fernando-duarte-logo-av.png" alt=""></i>
									<p class="ani-02">Alçando </br>Voo</p>
									<span class="ani-02"><p>Saber mais</p></span>
								</div>
							</a>
						</li>

						<li>
							<a href="#" class="produto">
								<div class="conteudo">
									<i class="ani-02"><img src="<?php bloginfo('template_url') ?>/img/fernando-duarte-logo-jh.png" alt=""></i>
									<p class="ani-02">Jornada </br>do Herói</p>
									<span class="ani-02"><p>Saber mais</p></span>
								</div>
							</a>
						</li>

						<div class="clearfix"></div>

						<li>
							<a href="#" class="produto">
								<div class="conteudo">
									<i class="ani-02"><img src="<?php bloginfo('template_url') ?>/img/fernando-duarte-logo-rt.png" alt=""></i>
									<p class="ani-02">Rumo ao </br>Topo</p>
									<span class="ani-02"><p>Saber mais</p></span>
								</div>
							</a>
						</li>

						<li>
							<a href="#" class="produto">
								<div class="conteudo">
									<i class="ani-02"><img src="<?php bloginfo('template_url') ?>/img/fernando-duarte-logo-delions.png" alt=""></i>
									<p class="ani-02">Delions</p>
									<span class="ani-02"><p>Saber mais</p></span>
								</div>
							</a>
						</li>

						<div class="clearfix"></div>

						<li>
							<a href="#" class="produto">
								<div class="conteudo">
									<i class="ani-02"><img src="<?php bloginfo('template_url') ?>/img/fernando-duarte-logo-hi-school.png" alt=""></i>
									<p class="ani-02">[hi] School</p>
									<span class="ani-02"><p>Saber mais</p></span>
								</div>
							</a>
						</li>

					</ul>
				</div>


			</div>
		</div>
	</div>
</section>

<section class="container-fluid contato">
	<div class="row">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-offset-6 col-sm-4" style="padding: 0;">
					<p>Se você tem alguma dúvida ou sugestões sobre palestras ou soluções basta preencher o formulário abaixo.</p>
					<p>Se preferir, você pode entrar em contato pelos canais alternativos:</p>

					<p class="mont"><i class="email"></i>contato@fernandohi.com.br</p>
					<p class="mont"><i class="telefone"></i>(61) 9 9631-0107</p>

					<form class="js" action="<?php bloginfo('url')?>/envia-email" method="POST" role="form">
						
						<div class="form-group" id="dados">
                            <div id="campo-nome" class="linha">
                                <label class="" for="input-nm">Nome</label>
                                <div id="w-input" class="required">
                                    <input type="text" class=" required color-b" id="input-nm" name="nm">
                                </div>
                            </div>
                            <div id="campo-email" class="linha">
                                <label class="" for="input-ml">E-mail</label>
                                <div id="w-input" class="required">
                                    <input type="text" class="required color-b" id="input-ml" name="ml">
                                </div>
                            </div>
                            <div id="campo-mensagem" class="linha">
                                <label class="" for="input-mnsg">Mensagem</label>
                                <div id="w-input" class="required">
                                    <textarea name="mnsg" id="input-mnsg" class="auto-resize required color-b"></textarea>
                                </div>
                            </div>
                            <div class="clearfix"></div>    
                        </div>
                    
                        <input type="submit" class="ani-04 black" value="Enviar">

                        <div id="notificacoes">
                            
                            <div id="processando" class="ani-04">

                                <span>Enviando seu e-mail...</span>
                                <div>
                                    <img src="<?php bloginfo('template_url') ?>/img/premiomerito-loading.gif">
                                </div>
                                
                            </div>

                            <div id="sucesso" class="ani-04">

                                <span><span id="green">Obrigado pelo contato.</span> Seu e-mail foi enviado, responderemos em breve.</span>
                                <button type="button" id="fecha-notificacao" class="merito-bt bg-cor-1 bg-cor-1-hover">OK</button>
                                
                            </div>

                            <div id="erro" class="ani-04">

                                <span>Houve um erro ao enviar seu e-mail, por favor, tente novamente.</span>
                                <button type="button" id="fecha-notificacao" class="merito-bt bg-cor-1 bg-cor-1-hover">OK</button>
                                
                            </div>

                        </div>

					</form>
				</div>

			</div>
		</div>
	</div>
</section>





<?php get_footer(); ?>