<?php
  if(isset($_REQUEST["action"]) && $_REQUEST["action"] == "cadastrar")
  {
    # Dados para a conexão com o banco de dados
	  $servidor = 'localhost'; 		# Nome DNS ou IP do seu servidor HTTP
	  $usuario = 'usuario';       # Nome de usuário para acesso ao MySQL
	  $senha = '*****';      	    # Senha de acesso
	  $banco = 'meuBanco';   		  # Nome do banco de dados
  
    # Executa a conexão com o MySQL
    $link = mysqli_connect($servidor, $usuario, $senha, $banco)
     or die('Não foi possivel conectar: '.mysqli_error($link));

    $campo_usuario = $_POST["CAMPO_USUARIO"];
    $campo_senha = md5($_POST["CAMPO_SENHA"]);
    
    $sql  = "INSERT INTO USUARIOS (USUARIO, SENHA)";
    $sql .= "VALUES('".$campo_usuario."', '".$campo_senha."')";
    $result = mysqli_query($link, $sql);
    
    if($result)
      echo "Usuário cadastrado com sucesso!";
      
    mysqli_close($link);
  }
  
?>
<HTML>
  <BODY>
    <FORM action="?action=cadastrar" method="POST">
      Nome de usuário: <INPUT type="TEXT" name="CAMPO_USUARIO"><BR>
      Senha: <INPUT type="PASSWORD" name="CAMPO_SENHA"><BR>
      <INPUT type="SUBMIT" value="Cadastrar">
    </FORM>
  </BODY>
</HTML>
