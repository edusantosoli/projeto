 <?php 
 
   # Dados para a conexão com o banco de dados
	 $servidor = 'localhost'; 		# Nome DNS ou IP do seu servidor HTTP
	 $usuario = 'usuario';       # Nome de usuário para acesso ao MySQL
	 $senha = '*****';      	    # Senha de acesso
	 $banco = 'meuBanco';   		  # Nome do banco de dados
 
   # Executa a conexão com o MySQL
   $link = mysqli_connect($servidor, $usuario, $senha, $banco)
    or die('Não foi possivel conectar: '.mysqli_error($link));

  # Verifica se o arquivo foi chamado a partir de um formulário
  if(isset($_REQUEST["acao"]) && $_REQUEST["acao"] == "adicionar")
  {
    # Cria a expressão SQL de inserção
    $sql = "INSERT INTO LIVROS (LIVRO, AUTOR, EDITORA) VALUES (";
    $sql .= "'".$_POST['FormNomeLivro']."', ";
    $sql .= "'".$_POST['FormNomeAutor']."', ";
    $sql .= "'".$_POST['FormNomeEditora']."' ";
    $sql .= ")";

    # Executa a expressão SQL no servidor, e armazena o resultado
    $result = mysqli_query($link, $sql);

    # Verifica o sucesso da operação
    if (!$result) 
    { die('Erro: '.mysqli_error($link)); }

    # Se a operação foi realizada com sucesso, informa na tela
    else
    { echo 'A operação foi realizada com sucesso.'; }
  }
  else if(isset($_REQUEST["acao"]) && $_REQUEST["acao"] == "alterar")
  {
    # Cria a expressão SQL de alteração
    $sql = "UPDATE LIVROS SET ";
    $sql .= "LIVRO = '".$_POST['FormNomeLivro']."', ";
    $sql .= "AUTOR = '".$_POST['FormNomeAutor']."', ";
    $sql .= "EDITORA = '".$_POST['FormNomeEditora']."'";
    $sql .= " WHERE ID = ".$_POST['FormCodigoLivro'];

    # Executa a expressão SQL no servidor, e armazena o resultado
    $result = mysqli_query($sql);

    # Verifica o sucesso da operação
    if (!$result) 
    { die('Erro: '.mysqli_error($link)); }

    # Se a operação foi realizada com sucesso, informa na tela
    else
    { echo 'A operação foi realizada com sucesso.'; }
  }
  else if(isset($_REQUEST["acao"]) && $_REQUEST["acao"] == "excluir")
  {
    # Cria a expressão SQL de exclusão
    $sql = "DELETE FROM LIVROS WHERE ID = ".$_REQUEST['buscacodigo'];

    # Executa a expressão SQL no servidor, e armazena o resultado
    $result = mysqli_query($sql);

    # Verifica o sucesso da operação
    if (!$result) 
    { die('Erro: '.mysqli_error($link)); }

    # Se a operação foi realizada com sucesso, informa na tela
    else
    { echo 'A operação foi realizada com sucesso.'; }
  }
?>
  <BR><A href="inserir.php">Clique aqui para inserir um novo registro.</A>
  <BR><A href="lista.php">Clique aqui para visualizar os registros.</A>
