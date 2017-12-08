 <?php
   # Dados para a conexão com o banco de dados
	 $servidor = 'localhost'; 		# Nome DNS ou IP do seu servidor HTTP
	 $usuario = 'usuario';       # Nome de usuário para acesso ao MySQL
	 $senha = '*****';      	    # Senha de acesso
	 $banco = 'meuBanco';   		  # Nome do banco de dados
  
   # Executa a conexão com o MySQL
   $link = mysqli_connect($servidor, $usuario, $senha, $banco)
    or die('Não foi possivel conectar: '.mysqli_error($link));
  
  if(isset($_REQUEST["acao"]) && $_REQUEST["acao"] == "editar")
  {
    # Cria a expressão SQL de consulta ao registro a ser alterado
    $sql = "SELECT * FROM LIVROS WHERE ID = ".$_REQUEST['buscacodigo'];
   
    # Realiza a busca pelos dados do registro
    $result = mysqli_query($sql);
   
    # Valida se o registro existe no banco de dados
    if($tbl = mysqli_fetch_array($result)) 
    {
      # Armazena os dados para preencher no formulário a seguir
      $Codigo  = $tbl["ID"];
      $Livro   = $tbl["LIVRO"];
      $Autor   = $tbl["AUTOR"];
      $Editora = $tbl["EDITORA"];
    }
   
    # Exibe mensagem de erro se não existir
    else
    { echo "Registro não encontrado."; }
  }
?>
   
<HTML>
 <HEAD>
  <TITLE>Gerenciando Registros</TITLE>
 </HEAD>
 <BODY>
  Preencha os campos abaixo:
<?php
    if(isset($_REQUEST["acao"]) && $_REQUEST["acao"] == "editar")
    { $AcaoForm = "alterar"; }
    else
    {
      $AcaoForm = "adicionar"; 
      $Codigo  = "";
      $Livro   = "";
      $Autor   = "";
      $Editora = "";
    }
?>
  <FORM method="POST" action="gerencia-registro.php?acao=<?php echo $AcaoForm; ?>">
  <INPUT type="hidden" name="FormCodigoLivro" value="<?php echo $Codigo; ?>">
   <TABLE>
    <TR>
     <TD>Nome do Livro:</TD>
     <TD>
      <INPUT name="FormNomeLivro" maxlength=64 value="<?php echo $Livro; ?>">
     </TD>
    </TR>
    <TR>
     <TD>Nome do Autor:</TD>
     <TD>
      <INPUT name="FormNomeAutor" maxlength=32 value="<?php echo $Autor; ?>">
     </TD>
    </TR>
    <TR>
     <TD>Nome da Editora:</TD>
     <TD>
      <INPUT name="FormNomeEditora" maxlength=16 value="<?php echo $Editora; ?>">
     </TD>
    </TR>
    <TR>
     <TD colspan=2 align=right>
      <INPUT type="reset" value="Limpar">
<?php
    if(isset($_REQUEST["acao"]) && $_REQUEST["acao"] == "editar")
    { $NomeBotao = "Alterar"; }
    else
    { $NomeBotao = "Cadastrar"; }
?>
      <INPUT type="submit" value="<?php echo $NomeBotao; ?>">
     </TD>
    </TR>
   </TABLE>
  </FORM>
 </BODY>
</HTML>
