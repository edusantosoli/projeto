<?PHP
 
  session_start();
  if(! isset($_SESSION["autenticado"]) || $_SESSION["autenticado"] != TRUE)
  {
    echo "Acesso não autorizado!<BR>";
    echo "Por gentileza, faça o seu login 
          <A href=\"codigo_fonte_12.3.php\">clicando aqui</A>.";
    exit();
  }
  else
  {
    echo "Você está logado como usuário: ".$_SESSION["usuario"];
  }
  
?>
 
<BR><BR>
Conteúdo privado de sua aplicação
