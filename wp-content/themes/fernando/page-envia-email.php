<?php

	$nome = $_POST['nm'];
	$nick = explode( " ", $nome, 2 );
	$nick = $nick[0];
	$email = $_POST['ml'];
	$assunto = $_POST['ssnt'];
	$mensagem = $_POST['mnsgm'];

	$url = get_bloginfo('url');
	$tUrl = get_bloginfo('template_url');

	$nomeEmpresa = "Fernando Duarte";
	$emailEmpresa = "ola@fernandoduarte.bsb.br";
	// $emailEmpresa = "raul@humanostud.io";


	$msgParaEmpresa ="
	<!DOCTYPE html PUBLIC \'-//W3C//DTD XHTML 1.0 Strict//EN\' \'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\'>
	<div style='width: 100%; b: #fffbce; padding: 50px 0;'>
	    <table style='background: white; width: 460px; border-radius: 4px; margin: 0 auto; border: 15px solid #216382; border-spacing: 0;'>
	        <tr style='background: #216382; margin: 0; padding: 0'>
	            <td  style='font-family:Arial, sans; height: 70px; text-align: center;'>
	                <img src='$tUrl/img/fernando-duarte-logo-branca.png' style='margin: 20px 0 -50px'>
	            </td>
	        </tr>
	        <tr>
	            <td  style='font-family:Arial, sans; padding: 50px 15px 35px'>
	                <div style='width: 90%; padding: 1% 5%; margin-top: 20px'>
	                    <p><b><span style='display: inline-block'>Novo Contato</span></b></p>
	                    <p style='border-bottom: 1px dotted #ccc; padding: 10px 0 20px'><b style='color: #ccc'><span style='width: 120px; display: inline-block'>Nome:</span> </b>$nome</p>
	                    <p style='border-bottom: 1px dotted #ccc; padding: 10px 0 20px'><b style='color: #ccc'><span style='width: 120px; display: inline-block'>Assunto</span> </b>$assunto</p>
	                    <p style='border-bottom: 1px dotted #ccc; padding: 10px 0 20px'><b style='color: #ccc'><span style='width: 120px; display: inline-block'>Mensagem</span> </b>$mensagem</p>
	                </div>
	            </td>
	        </tr>
	    </table>
	</div>
	";


	$msgParaUsuario  = "
	<!DOCTYPE html PUBLIC \'-//W3C//DTD XHTML 1.0 Strict//EN\' \'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\'>
	<div style='width: 100%; padding: 50px 0'>
	    <table style='background: white; width: 460px; border-radius: 4px; margin: 0 auto; border: 5px solid #216382; border-bottom-width: 20px; border-left-width: 0; border-right-width: 0; border-spacing: 0'>
	        <tr style='background: #216382; margin: 0; padding: 0'>
	            <td  style='font-family:Arial, sans; height: 60px; text-align: center;'>
	                <img src='$tUrl/img/fernando-duarte-logo-branca.png' style='margin: 20px 0 -60px'>
	            </td>
	        </tr>
	        <tr>
	            <td  style='font-family:Arial, sans; padding: 5px 15px 15px'>
	                <div style='width: 90%; padding: 1% 5%; margin-top: 30px'>
	                    <p style='font-size:20px; margin-bottom: 10px; color: #666; line-height: 24px'><span style='line-height: 34px; color: #0a6b98; font-size: 34px;'>Obrigado pelo seu contato, <b>$nick</b>!</span><br/><br/>
	                        Recebi sua mensagem e responderei você o mais breve possível. <b>Grande abra&ccedil;o!</b><br>
	                    </p>
	                    <p style='margin-top: 50px; font-style: italic; color:#999; font-size:11px; font-family: Arial'>Observa&ccedil;&atilde;o: N&atilde;o &eacute; necess&aacute;rio responder este e-mail.</p>
	                </div>
	            </td>
	        </tr>
	    </table>
	</div>  
	";

	$assuntoEmpresa = "Novo contato";
	$assuntoUsuario = "Obrigado pelo seu contato, $nick";

	$headerParaUsuario = "MIME-Version: 1.0\r\n";
	$headerParaUsuario .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headerParaUsuario .= "From: $nomeEmpresa <$emailEmpresa>\r\n"; // remetente
	$headerParaUsuario .= "Return-Path: $email\r\n"; // return-path
	
	$headerParaEmpresa = "MIME-Version: 1.0\r\n";
	$headerParaEmpresa .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headerParaEmpresa .="From: $nome <$email>\n";
	$headerParaEmpresa .= "Return-Path: $emailEmpresa\r\n"; // return-path


	// if($_SERVER['HTTP_HOST'] != "localhost")
	// {
		mail($emailEmpresa,utf8_decode($assuntoEmpresa),utf8_decode($msgParaEmpresa),$headerParaEmpresa) or die("erro");
		mail($email,utf8_decode($assuntoUsuario),utf8_decode($msgParaUsuario),$headerParaUsuario) or die("erro");
	// }

	echo 'sucesso';