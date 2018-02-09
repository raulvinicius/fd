<section id="contato" class="container-fluid form-contato">
	<div class="row">
		<div class="container">
			<div class="row">
				
				<div id="box" class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 col-xs-10 col-xs-offset-1" style="padding: 0;">

					<h3 class="col-md-10 col-md-offset-1"><?php echo $fraseContato ?></h3>

					<form class="js" action="<?php bloginfo('url')?>/envia-email" method="POST" role="form">
						
						<div class="form-group" id="assunto">
							<label for="input-ssnt1" class="ani-04" id="checked">Fazer um orçamento</label><label for="input-ssnt2" class="ani-04">Tirar dúvidas</label>

							<input type="radio" name="ssnt" id="input-ssnt1" value="Orçamento" checked="checked" />
							<input type="radio" name="ssnt" id="input-ssnt2" value="Dúvida" />
						</div>

						<div class="form-group" id="dados">
                            <div id="campo-nome" class="linha">
                                <label class="" for="input-nm">Nome</label>
                                <div id="w-input" class="required">
                                    <input type="text" class=" required color-b" id="input-nm" name="nm">
                                </div>
                            </div>
                            <input type="hidden" id="input-ssnt" name="ssnt" value="Orçamento">
                            <div id="campo-email" class="linha">
                                <label class="" for="input-ml">E-mail</label>
                                <div id="w-input" class="required">
                                    <input type="text" class="required color-b" id="input-ml" name="ml">
                                </div>
                            </div>
                            <div id="campo-mensagem" class="linha">
                                <label class="" for="input-mnsg">Mensagem</label>
                                <div id="w-input" class="required">
                                    <textarea name="mnsgm" id="input-mnsg" class="auto-resize required color-b"></textarea>
                                </div>
                            </div>
                            <div class="clearfix"></div>    
                        </div>
                    
                        <input type="submit" class="ani-04 black" value="Enviar">

                        <div id="notificacoes">
                            
                            <div id="processando" class="ani-04">

                                <span id="txt">Enviando seu e-mail...</span>
                                <div>
                                    <!-- <img src="<?php bloginfo('template_url') ?>/img/premiomerito-loading.gif"> -->
                                </div>
                                
                            </div>

                            <div id="sucesso" class="ani-04">

                                <span id="txt"><span id="tit">Obrigado por seu <strong>contato</strong>.</span> Seu e-mail foi enviado e será respondido em breve.</span>
                                <button type="button" id="fecha-notificacao" class="bt-ferds">OK</button>
                                
                            </div>

                            <div id="erro" class="ani-04">

                                <span id="txt">Houve um erro ao enviar seu e-mail, por favor, tente novamente.</span>
                                <button type="button" id="fecha-notificacao" class="bt-ferds">OK</button>
                                
                            </div>

                        </div>


					</form>
				</div>

				<div class="instrucao col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 col-xs-10 col-xs-offset-1">Campos obrigatórios</div>

			</div>
		</div>
	</div>
</section>