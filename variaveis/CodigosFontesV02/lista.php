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


  # Cria a express�o SQL de consulta aos registros
  $sql = "SELECT * FROM LIVROS";
?>
<HTML>
  <TABLE border=1>
   <TR>
    <TD>C�d.</TD>
    <TD>Livro</TD>
    <TD>Autor</TD>
    <TD>Editora</TD>
   </TR>

<?
  # Exibe os resultados de novidades e not�cias
  $result = mysql_query($sql);
  while ($tbl = mysql_fetch_array($result)) 
  {
    $Codigo  = $tbl["ID"];
    $Livro   = $tbl["LIVRO"];
    $Autor   = $tbl["AUTOR"];
    $Editora = $tbl["EDITORA"];

    echo "<TR>";
    echo "<TD>$Codigo ";
    echo "<A href=\"inserir.php?acao=editar&buscacodigo=$Codigo\">";
    echo "(Editar)</A>";
    echo "<A href=\"gerencia-registro.php?acao=excluir&buscacodigo=$Codigo\">";
    echo "(Excluir)</A>";
    echo "</TD>";
    echo "<TD>$Livro</TD>";
    echo "<TD>$Autor</TD>";
    echo "<TD>$Editora</TD>";
    echo "</TR>";
  }
?>
  </TABLE>
  <BR><A href="inserir.php">Clique aqui para inserir um novo registro.</A>
</HTML>
