<?PHP
 
  # Variáveis do formulário
  $mailContact = "Seu Nome <seu.email@seu.dominio.com.br>";
  $mailSubject = "[E-MAIL FORMATO HTML]";
    
  # Envio de e-mail (criação de cabeçalho e corpo da mensagem)
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1;' . "\r\n";
  $headers .= "Return-Path: ".$mailContact."\r\n";
  $headers .= "From: ".$mailContact."\r\n";
  $headers .= "Reply-To: ".$mailContact."\r\n";
  
  $mailBody   = "<B>Texto em negrito:</B> Texto sem negrito<BR>";
  $mailBody  .= "<I>Texto em itálico:</I> Texto sem itálico<BR>";
  $mailBody  .= "<U>Texto sublinhado:</U> Texto sem sublinhado<BR>";
 
  $sucess = mail($mailContact, $mailSubject, $mailBody, $headers);
  if($sucess)
  {
    echo "E-mail enviado com sucesso!";
  } 
  
?>
