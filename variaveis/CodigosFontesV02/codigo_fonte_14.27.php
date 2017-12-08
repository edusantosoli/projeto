<?PHP
 
  if($_REQUEST["action"] == "sendmail")
  {
    # Variáveis do formulário
    $mailContact = "Seu Nome <seu.email@seu.dominio.com.br>";
    $mailAuthor  = $_POST["campo_nome"];
    $mailReply   = $_POST["campo_email"];
    $mailSubject = "[CONTATO VIA SITE] ".$_POST["campo_assunto"];
    $mailMessage = $_POST["campo_mensagem"];
      
    # Envio de e-mail (criação de cabeçalho e corpo da mensagem)
    $headers  = "Return-Path: ".$mailContact."\r\n";
    $headers .= "From: ".$mailContact."\r\n";
    $headers .= "Reply-To: ".$mailReply."\r\n";
    
    $mailBody  = "Nome: ".$mailAuthor."\r\n";
    $mailBody .= "E-mail: ".$mailReply."\r\n";
    $mailBody .= "Assunto: ".$mailSubject."\r\n";
    $mailBody .= "Mensagem: ".$mailMessage."\r\n";
  
    $sucess = mail($mailContact, $mailSubject, $mailBody, $headers)
              or die("Problemas para enviar o e-mail");
              
    if($sucess)
    {
      echo "E-mail enviado com sucesso!";
    }
  }
  else
  {
    echo "Ação inválida";
  }
 
?>

