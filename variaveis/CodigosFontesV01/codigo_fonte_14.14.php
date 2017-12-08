<?PHP
  if($_REQUEST["action"] == "autenticar")
  {
    # Dados para a conexão com o banco de dados
    $servidor = 'localhost';
    $usuario = 'usuario';
    $senha = '*****';
    $banco = 'meuBanco';
     
    $link = mysql_connect($servidor, $usuario, $senha)
      or die('Não foi possivel conectar: ' . mysql_error());
    
    $select = mysql_select_db($banco);
    
    $campo_usuario = addslashes($_POST["CAMPO_USUARIO"]);
    $campo_senha = md5($_POST["CAMPO_SENHA"]);
    
    $sql  = "SELECT * FROM USUARIOS WHERE USUARIO = '".$campo_usuario."'";
    $sql .= " AND SENHA = '".$campo_senha."'";
    $result = mysql_query($sql);
    if($tbl = mysql_fetch_array($result))
      echo "Usuário logado com sucesso!";
    else
      echo "Usuário ou senha inválida.";
  }
  else
  {
  
?>
<HTML>
  <BODY>
    <FORM action="?action=autenticar" method="POST">
      Nome de usuário: <INPUT type="TEXT" name="CAMPO_USUARIO"><BR>
      Senha: <INPUT type="PASSWORD" name="CAMPO_SENHA"><BR>
      <INPUT type="SUBMIT" value="Autenticar">
    </FORM>
  </BODY>
</HTML>
<?
  }
?>
