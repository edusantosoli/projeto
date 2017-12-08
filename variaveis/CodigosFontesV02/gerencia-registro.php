 <?PHP 
   # Dados para a conexão com o banco de dados
   $servidor = '...'; 		# Nome DNS ou IP do seu servidor HTTP
   $usuario = '...';       	# Nome de usuário para acesso ao MySQL
   $senha = '...';      	# Senha de acesso
   $banco = '...';   		# Nome do banco de dados
 
   # Executa a conexão com o MySQL
   $link = mysql_connect($servidor, $usuario, $senha)
    or die('Não foi possivel conectar: '.mysql_error());

  # Seleciona o banco de dados que deseja utilizar
  $select = mysql_select_db($banco);

  # Verifica se o arquivo foi chamado a partir de um formulário
  if($_REQUEST["acao"] == "adicionar")
  {
    # Cria a expressão SQL de inserção
    $sql = "INSERT INTO LIVROS (LIVRO, AUTOR, EDITORA) VALUES (";
    $sql .= "'".$_POST['FormNomeLivro']."', ";
    $sql .= "'".$_POST['FormNomeAutor']."', ";
    $sql .= "'".$_POST['FormNomeEditora']."' ";
    $sql .= ")";

    # Executa a expressão SQL no servidor, e armazena o resultado
    $result = mysql_query($sql);

    # Verifica o sucesso da operação
    if (!$result) 
    { die('Erro: '.mysql_error()); }

    # Se a operação foi realizada com sucesso, informa na tela
    else
    { echo 'A operação foi realizada com sucesso.'; }
  }
  else if($_REQUEST["acao"] == "alterar")
  {
    # Cria a expressão SQL de alteração
    $sql = "UPDATE LIVROS SET ";
    $sql .= "LIVRO = '".$_POST['FormNomeLivro']."', ";
    $sql .= "AUTOR = '".$_POST['FormNomeAutor']."', ";
    $sql .= "EDITORA = '".$_POST['FormNomeEditora']."'";
    $sql .= " WHERE ID = ".$_POST['FormCodigoLivro'];

    # Executa a expressão SQL no servidor, e armazena o resultado
    $result = mysql_query($sql);

    # Verifica o sucesso da operação
    if (!$result) 
    { die('Erro: '.mysql_error()); }

    # Se a operação foi realizada com sucesso, informa na tela
    else
    { echo 'A operação foi realizada com sucesso.'; }
  }
  else if($_REQUEST["acao"] == "excluir")
  {
    # Cria a expressão SQL de exclusão
    $sql = "DELETE FROM LIVROS WHERE ID = ".$_REQUEST['buscacodigo'];

    # Executa a expressão SQL no servidor, e armazena o resultado
    $result = mysql_query($sql);

    # Verifica o sucesso da operação
    if (!$result) 
    { die('Erro: '.mysql_error()); }

    # Se a operação foi realizada com sucesso, informa na tela
    else
    { echo 'A operação foi realizada com sucesso.'; }
  }
?>
  <BR><A href="inserir.php">Clique aqui para inserir um novo registro.</A>
  <BR><A href="lista.php">Clique aqui para visualizar os registros.</A>
