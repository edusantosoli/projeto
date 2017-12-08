<?PHP
 
  if($_REQUEST["action"] == "sent")
  {
    session_start();
    $_SESSION["usuario"] = $_POST["CAMPO_USUARIO"];
    echo "<A href=\"codigo_fonte_12.02.php\">Outro arquivo</A>";
  }
  else
  {
?>
 
<FORM action="codigo_fonte_12.01.php?action=sent" method="POST">
  Digite o seu nome: 
  <INPUT type="TEXT" name="CAMPO_USUARIO">
  <INPUT type="SUBMIT" value="Enviar">
</FORM>
 
<?
  }
?>
