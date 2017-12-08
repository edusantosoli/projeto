<?PHP
 
  if($_REQUEST["action"] == "login")
  {
    if($_POST["CAMPO_USUARIO"] == "andre" && $_POST["CAMPO_SENHA"] == "abc123")
    {
      session_start();
      $_SESSION["usuario"] = $_POST["CAMPO_USUARIO"];
      $_SESSION["autenticado"] = TRUE;
      header("Location: codigo_fonte_12.04.php");
    }
    else
    {
      echo "Seu nome de usuário ou senha estão incorretos.";
    }
  }
  else
  {
?>
 
<FORM action="codigo_fonte_12.03.php?action=login" method="POST">
  Digite o seu nome: 
  <INPUT type="TEXT" name="CAMPO_USUARIO"><BR>
  Digite sua senha: 
  <INPUT type="PASSWORD" name="CAMPO_SENHA"><BR>
  <INPUT type="SUBMIT" value="Autenticar">
</FORM>
 
<?
  }
?>
