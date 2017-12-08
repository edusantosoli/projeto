 <?PHP
   # Dados para a conex�o com o banco de dados
   $servidor = '...'; 		# Nome DNS ou IP do seu servidor HTTP
   $usuario = '...';       	# Nome de usu�rio para acesso ao MySQL
   $senha = '...';      	# Senha de acesso
   $banco = '...';   		# Nome do banco de dados
 
   # Executa a conex�o com o MySQL
   $link = mysql_connect($servidor, $usuario, $senha)
    or die('N�o foi possivel conectar: ' . mysql_error());

  # Seleciona o banco de dados que deseja utilizar
  $select = mysql_select_db($banco);

  if($_REQUEST["acao"] == "editar")
  {
    # Cria a express�o SQL de consulta ao registro a ser alterado
    $sql = "SELECT * FROM LIVROS WHERE ID = ".$_REQUEST['buscacodigo'];

    # Realiza a busca pelos dados do registro
    $result = mysql_query($sql);

    # Valida se o registro existe no banco de dados
    if($tbl = mysql_fetch_array($result)) 
    {
      # Armazena os dados para preencher no formul�rio a seguir
      $Codigo  = $tbl["ID"];
      $Livro   = $tbl["LIVRO"];
      $Autor   = $tbl["AUTOR"];
      $Editora = $tbl["EDITORA"];
    }

    # Exibe mensagem de erro se n�o existir
    else
    { echo "Registro n�o encontrado."; }
  }
?>

<HTML>
 <HEAD>
  <TITLE>Gerenciando Registros</TITLE>
 </HEAD>
 <BODY>
  Preencha os campos abaixo:
<?
    if($_REQUEST["acao"] == "editar")
    { $AcaoForm = "alterar"; }
    else
    { $AcaoForm = "adicionar"; }
?>
  <FORM method="POST" action="gerencia-registro.php?acao=<? echo $AcaoForm; ?>">
  <INPUT type="hidden" name="FormCodigoLivro" value="<? echo $Codigo; ?>">
   <TABLE>
    <TR>
     <TD>Nome do Livro:</TD>
     <TD>
      <INPUT name="FormNomeLivro" maxlength=64 value="<? echo $Livro; ?>">
     </TD>
    </TR>
    <TR>
     <TD>Nome do Autor:</TD>
     <TD>
      <INPUT name="FormNomeAutor" maxlength=32 value="<? echo $Autor; ?>">
     </TD>
    </TR>
    <TR>
     <TD>Nome da Editora:</TD>
     <TD>
      <INPUT name="FormNomeEditora" maxlength=16 value="<? echo $Editora; ?>">
     </TD>
    </TR>
    <TR>
     <TD colspan=2 align=right>
      <INPUT type="reset" value="Limpar">
<?
    if($_REQUEST["acao"] == "editar")
    { $NomeBotao = "Alterar"; }
    else
    { $NomeBotao = "Cadastrar"; }
?>
      <INPUT type="submit" value="<? echo $NomeBotao; ?>">
     </TD>
    </TR>
   </TABLE>
  </FORM>
 </BODY>
</HTML>
