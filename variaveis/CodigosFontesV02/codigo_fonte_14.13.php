<?PHP
  if($_REQUEST["action"] == "cadastrar")
  {
    # Dados para a conex�o com o banco de dados
    $servidor = 'localhost';
    $usuario = 'usuario';
    $senha = '*****';
    $banco = 'meuBanco';
     
    $link = mysql_connect($servidor, $usuario, $senha)
      or die('N�o foi possivel conectar: ' . mysql_error());
    
    $select = mysql_select_db($banco);
    
    $campo_usuario = $_POST["CAMPO_USUARIO"];
    $campo_senha = md5($_POST["CAMPO_SENHA"]);
    
    $sql  = "INSERT INTO USUARIOS (USUARIO, SENHA)";
    $sql .= "VALUES('".$campo_usuario."', '".$campo_senha."')";
    $result = mysql_query($sql);
    
    if($result)
      echo "Usu�rio cadastrado com sucesso!";
  }
 
?>
<HTML>
  <BODY>
    <FORM action="?action=cadastrar" method="POST">
      Nome de usu�rio: <INPUT type="TEXT" name="CAMPO_USUARIO"><BR>
      Senha: <INPUT type="PASSWORD" name="CAMPO_SENHA"><BR>
      <INPUT type="SUBMIT" value="Cadastrar">
    </FORM>
  </BODY>
</HTML>
