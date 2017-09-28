<?php

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$assunto = $_POST['assunto'];
	$mensagem = $_POST['mensagem'];

	$url = get_bloginfo('url');
	$tUrl = get_bloginfo('template_url');

	$nomeEmpresa = "HighTouch";
	$emailEmpresa = "fernando@souhi.com.br";
	// $emailEmpresa = "raul.portifolio@gmail.com";


	$msgParaAdmin ="
	<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
	<div style='width: 100%; b: #fffbce; padding: 50px 0;'>
		<table style='background: white; width: 460px; border-radius: 3px 0 3px; margin: 0 auto;'>
			<tr style='background: #0095da'>
				<td  style='font-family:Arial, sans; height: 110px;'>
					<img src='$tUrl/img/hi-logo-branca.png' style='margin: 20px 0 10px 10px'>
				</td>
			</tr>
			<tr>
				<td  style='font-family:Arial, sans;'>
					<h1 style='font-size:16px; margin-bottom: 10px; color: #ed1c24;'><b>CONTATO / D&Uacute;VIDA</b></h1>
					<p style='font-size:14px; margin-bottom: 10px; color: #999;'><b>Um contato foi feito atrav&eacute;s do site.</b></p>
					<div style='width: 90%; background: #f9f9f9; padding: 1% 5%; margin-top: 20px'>
						<p style='border-bottom: 1px dotted #fff; padding: 10px 0'><b style='color: #0095da'>Nome: </b>$nome</p>
						<p style='border-bottom: 1px dotted #fff; padding: 10px 0'><b style='color: #0095da'>E-mail: </b>$email</p>
						<p style='border-bottom: 1px dotted #fff; padding: 10px 0'><b style='color: #0095da'>Mensagem: </b>$mensagem</p>
					</div>
				</td>
			</tr>
		</table>
	</div>
	";


	$msgParaUsuario  = "
	<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
	<div style='width: 100%; padding: 50px 0'>
		<table style='background: white; width: 460px; border-radius: 3px 0 3px; margin: 0 auto;'>
			<tr style='background: #0095da'>
				<td  style='font-family:Arial, sans; height: 110px;'>
					<img src='$tUrl/img/hi-logo-branca.png' style='margin: 20px 0 10px 10px'>
				</td>
			</tr>
			<tr>
				<td  style='font-family:Arial, sans;'>
					<h1 style='font-size:16px; margin-bottom: 10px; color: #ed1c24;'><b>CONFIRMA&Ccedil;&Atilde;O DE CONTATO</b></h1>
					<p style='font-size:14px; margin-bottom: 10px; color: #666; line-height: 24px'><strong>[Hi] <b>$nome</b>!</strong><br/><br/>
						Já recebemos seu e-mail e responderemos o mais breve poss&iacute;vel.<br>
						Ficamos felizes pelo seu contato.<br>
					</p>
					<p style='margin-top: 30px; font-style: italic; color:#999; font-size:10px; font-family: Arial'>Observa&ccedil;&atilde;o: N&atilde;o &eacute; necess&aacute;rio responder este e-mail.</p>
				</td>
			</tr>
		</table>
	</div>
	";

	$headerParaUsuario = "MIME-Version: 1.1\r\n";
	$headerParaUsuario .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headerParaUsuario .= "From: $emailEmpresa <$nomeEmpresa>\r\n"; // remetente
	$headerParaUsuario .= "Return-Path: $emailEmpresa\r\n"; // return-path
	
	$headerParaEmpresa = "MIME-Version: 1.0\r\n";
	$headerParaEmpresa .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headerParaEmpresa .="From: $email <$nome>\n";
	$headerParaEmpresa .= "Return-Path: $emailEmpresa\r\n"; // return-path


	// if($_SERVER['HTTP_HOST'] != "localhost")
	// {
		mail($emailEmpresa,utf8_decode($assunto),utf8_decode($msgParaAdmin),$headerParaEmpresa) or die("erro");
		mail($email,utf8_decode("Confirmação de Contato"),utf8_decode($msgParaUsuario),$headerParaUsuario) or die("erro");
	// }

	echo "sucesso";