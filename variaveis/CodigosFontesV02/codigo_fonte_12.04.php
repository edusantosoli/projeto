<?PHP
 
  session_start();
  if(! isset($_SESSION["autenticado"]) || $_SESSION["autenticado"] != TRUE)
  {
    echo "Acesso n�o autorizado!<BR>";
    echo "Por gentileza, fa�a o seu login 
          <A href=\"codigo_fonte_12.3.php\">clicando aqui</A>.";
    exit();
  }
  else
  {
    echo "Voc� est� logado como usu�rio: ".$_SESSION["usuario"];
  }
  
?>
 
<BR><BR>
Conte�do privado de sua aplica��o
