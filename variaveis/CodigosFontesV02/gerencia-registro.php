 <?PHP 
   # Dados para a conex�o com o banco de dados
   $servidor = '...'; 		# Nome DNS ou IP do seu servidor HTTP
   $usuario = '...';       	# Nome de usu�rio para acesso ao MySQL
   $senha = '...';      	# Senha de acesso
   $banco = '...';   		# Nome do banco de dados
 
   # Executa a conex�o com o MySQL
   $link = mysql_connect($servidor, $usuario, $senha)
    or die('N�o foi possivel conectar: '.mysql_error());

  # Seleciona o banco de dados que deseja utilizar
  $select = mysql_select_db($banco);

  # Verifica se o arquivo foi chamado a partir de um formul�rio
  if($_REQUEST["acao"] == "adicionar")
  {
    # Cria a express�o SQL de inser��o
    $sql = "INSERT INTO LIVROS (LIVRO, AUTOR, EDITORA) VALUES (";
    $sql .= "'".$_POST['FormNomeLivro']."', ";
    $sql .= "'".$_POST['FormNomeAutor']."', ";
    $sql .= "'".$_POST['FormNomeEditora']."' ";
    $sql .= ")";

    # Executa a express�o SQL no servidor, e armazena o resultado
    $result = mysql_query($sql);

    # Verifica o sucesso da opera��o
    if (!$result) 
    { die('Erro: '.mysql_error()); }

    # Se a opera��o foi realizada com sucesso, informa na tela
    else
    { echo 'A opera��o foi realizada com sucesso.'; }
  }
  else if($_REQUEST["acao"] == "alterar")
  {
    # Cria a express�o SQL de altera��o
    $sql = "UPDATE LIVROS SET ";
    $sql .= "LIVRO = '".$_POST['FormNomeLivro']."', ";
    $sql .= "AUTOR = '".$_POST['FormNomeAutor']."', ";
    $sql .= "EDITORA = '".$_POST['FormNomeEditora']."'";
    $sql .= " WHERE ID = ".$_POST['FormCodigoLivro'];

    # Executa a express�o SQL no servidor, e armazena o resultado
    $result = mysql_query($sql);

    # Verifica o sucesso da opera��o
    if (!$result) 
    { die('Erro: '.mysql_error()); }

    # Se a opera��o foi realizada com sucesso, informa na tela
    else
    { echo 'A opera��o foi realizada com sucesso.'; }
  }
  else if($_REQUEST["acao"] == "excluir")
  {
    # Cria a express�o SQL de exclus�o
    $sql = "DELETE FROM LIVROS WHERE ID = ".$_REQUEST['buscacodigo'];

    # Executa a express�o SQL no servidor, e armazena o resultado
    $result = mysql_query($sql);

    # Verifica o sucesso da opera��o
    if (!$result) 
    { die('Erro: '.mysql_error()); }

    # Se a opera��o foi realizada com sucesso, informa na tela
    else
    { echo 'A opera��o foi realizada com sucesso.'; }
  }
?>
  <BR><A href="inserir.php">Clique aqui para inserir um novo registro.</A>
  <BR><A href="lista.php">Clique aqui para visualizar os registros.</A>
