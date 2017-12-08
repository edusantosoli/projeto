 <?php 
   # Dados para a conexão com o banco de dados
	 $servidor = 'localhost'; 		# Nome DNS ou IP do seu servidor HTTP
	 $usuario = 'usuario';       # Nome de usuário para acesso ao MySQL
	 $senha = '*****';      	    # Senha de acesso
	 $banco = 'meuBanco';   		  # Nome do banco de dados
 
   # Executa a conexão com o MySQL
   $link = mysqli_connect($servidor, $usuario, $senha, $banco)
    or die('Não foi possivel conectar: '.mysqli_error($link));

  # Cria a expressão SQL de consulta aos registros
  $sql = "SELECT * FROM LIVROS";
?>
<HTML>
  <TABLE border=1>
   <TR>
    <TD>Cód.</TD>
    <TD>Livro</TD>
    <TD>Autor</TD>
    <TD>Editora</TD>
   </TR>

<?php
  # Exibe os resultados de novidades e notícias
  $result = mysqli_query($link, $sql);
  while ($tbl = mysqli_fetch_array($result)) 
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
