<?php if ( strpos( $_SERVER[ "REQUEST_URI" ], "frontend" ) ) : ?>

	<?php $tUrl = get_bloginfo("template_url"); ?>

	<?php require( "frontend/estagio.php" ) ?>

<?php else : ?>


	<?php get_header(); ?>
	<section id="page-contato" class="pagina">
		<div id="map" class="map">
		<!-- <iframe id="map" width="100%" height="546" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3838.9262935692777!2d-47.899727!3d-15.807839999999967!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3ac728ff2ec7%3A0x5c223cb89aa0c021!2zW2hpXQ!5e0!3m2!1spt-BR!2sbr!4v1409514412296"></iframe> -->
		</div>
		<!-- <iframe id="map" width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=-15.807975,+-47.899701&amp;aq=&amp;sll=-15.807975,-47.899701&amp;sspn=0.009425,0.016512&amp;ie=UTF8&amp;t=m&amp;z=16&amp;hq=&amp;output=embed"></iframe> -->

		<div id="topo-bg-form" class="container-fluid">
		</div>	
		
		<div id="wrap-form" class="container-fluid">
		    <div class="row-fluid">

		    	<div id="wrap-endereco" class="span4 offset4">

					<div class="span5">
						<figure>
							<img src="<?php bloginfo('template_url') ?>/img/hi-icon-endereco.png">
						</figure>
					</div>		    		
		    		
					<div class="span7">
						<address>
							<p>E-mail: <strong>ola@souhi.com.br</strong><br>
							Fone: <strong>61.3244.2565</strong>
							</p>
							<p>
							CRS Quadra 505,<br>
							Bloco C, Entrada 14<br>
							70350-530 - Brasília-DF</p>
						</address>
					</div>		    		
		    		
		    	</div>

		    </div>

		    <div class="row-fluid">

		    	<div id="form" class="span4 offset4">

		    		
		    		<div id="process" class="alert">
		    		  Enviando e-mail...
		    		</div>

		    		<div id="success" class="alert alert-success">
		    		  <button type="button" class="close">×</button>
		    		  <strong>Sucesso!</strong> Seu e-mail foi enviado. Entraremos em contato em breve.
		    		</div>

		    		<div id="error" class="alert alert-error">
		    		  <button type="button" class="close">×</button>
		    		  <strong>Opa!</strong> Houve um erro ao enviar seu e-mail, tente novamente por favor.
		    		</div>

		    		<form id="form-contato" action="<?php bloginfo('url') ?>/envia-email" method="POST">

		    		    <div class="control-group">
		    		        <label class="control-label" for="input-nome">Nome*</label>
		    		        <div class="controls">
		    		            <input type="text" name="nome" id="input-nome" class="required">
		    		        </div>
		    		    </div>

		    		    <div class="control-group">
		    		        <label class="control-label" for="input-email">E-mail*</label>
		    		        <div class="controls">
		    		            <input type="email" name="email" id="input-email" class="required">
		    		        </div>
		    		    </div>

		    		    <div class="control-group">
		    		        <label class="control-label" for="input-assunto">Assunto*</label>
		    		        <div class="controls">
		    		            <input type="text" name="assunto" id="input-assunto" class="required">
		    		        </div>
		    		    </div>

		    		    <div class="control-group">
		    		        <label class="control-label" for="input-mensagem">Mensagem*</label>
		    		        <div class="controls">
		    		            <textarea name="mensagem" id="input-mensagem" class="required"></textarea>  
		    		        </div>
		    		    </div>

		    		    <input class="animado-02-in-out" type="submit" value="Enviar">
		    		    <p>* campos obrigatórios</p>
		    		</form>


		    	</div>

		    </div>
		</div>	

	</section>

	<?php get_footer() ?>

<?php endif; ?>