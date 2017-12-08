<?php
	include('Mail.php');
	include('Mail/mime.php');
	
	$text = 'Versao texto do email';
	$html = 'Versao HTML do email';
	$crlf = "\n";
	$mime = new Mail_mime($crlf);
	$mime->setTXTBody($text);
	$mime->setHTMLBody($html);
	$body = $mime->get();
	$recipients = array('<email_do_destinatario>');
	$headers['From'] = '<seu_email>';
	$headers['To'] = '<email_do_destinatario>';
	$headers['Cc'] = '';
	$headers['Bcc'] = '';
	$headers['Subject'] = 'Teste de e-mail formulário com autenticação';
	$headers = $mime->headers($headers);
	$params['host'] = '<seu_servidor_smtp>';
	$params['port'] = '25';
	$params['auth'] = TRUE;
	$params['username'] = '<seu_nome_de_usuario>';
	$params['password'] = '<sua_senha>';
	
	$mail_object =& Mail::factory('smtp', $params);
	$rs = $mail_object->send($recipients, $headers, $body);
	if (PEAR::isError($rs)) {
    	echo $rs->getMessage()."\n";
	}	
?>
