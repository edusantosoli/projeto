<?PHP
  if($_REQUEST["action"] == "autenticar")
  {
    # Dados para a conex�o com o banco de dados
    $servidor = 'localhost';
    $usuario = 'usuario';
    $senha = '*****';
    $banco = 'meuBanco';
     
    $link = mysql_connect($servidor, $usuario, $senha)
      or die('N�o foi possivel conectar: ' . mysql_error());
    
    $select = mysql_select_db($banco);
    
    $campo_usuario = addslashes($_POST["CAMPO_USUARIO"]);
    $campo_senha = md5($_POST["CAMPO_SENHA"]);
    
    $sql  = "SELECT * FROM USUARIOS WHERE USUARIO = '".$campo_usuario."'";
    $sql .= " AND SENHA = '".$campo_senha."'";
    $result = mysql_query($sql);
    if($tbl = mysql_fetch_array($result))
      echo "Usu�rio logado com sucesso!";
    else
      echo "Usu�rio ou senha inv�lida.";
  }
  else
  {
  
?>
<HTML>
  <BODY>
    <FORM action="?action=autenticar" method="POST">
      Nome de usu�rio: <INPUT type="TEXT" name="CAMPO_USUARIO"><BR>
      Senha: <INPUT type="PASSWORD" name="CAMPO_SENHA"><BR>
      <INPUT type="SUBMIT" value="Autenticar">
    </FORM>
  </BODY>
</HTML>
<?
  }
?>
