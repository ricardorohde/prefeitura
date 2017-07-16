<?php
	$nome = $_POST['fmnome'];
    $fmmsg = $_POST['fmmsg'];
    $tipo = $_POST['fmtipo'];
    $destinatario = "ouvidoria@paragominas.pa.gov.br";
	$email = $_POST['fmEmail'];
	$mensagem = "<p>Email de: <b>".$nome."</b></p><p>Email: <b>".$email."</b></p><p>Assunto: <b>". $tipo."</b></p><p>Mensagem: ".$_POST['fmmsg'];
	
require 'resources/mail/class.simple_mail.php';
$mailer = new SimpleMail();


$send	= $mailer->setTo($destinatario , 'Ouvidoria') // Destinatário 1
				 ->setSubject($tipo) // Assunto
				 ->setFrom($email, $nome) //Remetente
				 ->addGenericHeader('X-Mailer', 'PHP/' . phpversion())
				 ->addGenericHeader('Content-Type', 'text/html; charset="utf-8"')
				 ->setMessage($mensagem)
				 ->setWrap(78)
				 ->send();

if ($send) {
	$msg = "<p class=\"msg-sucess\"><b>Olá ".$_POST['fmnome']."</b>, sua mensagem foi enviada com sucesso!</p>";
}
else {
	echo 'Ocorreu um Erro';
}

?>