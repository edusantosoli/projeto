<?PHP
  
  // Conecta ao banco de dados
  if($_REQUEST["action"] == "" || $_REQUEST["action"] == "visualizar")
  {
    # Dados para a conexão com o banco de dados
    $servidor = 'localhost';
    $usuario = 'usuario';
    $senha = '*****';
    $banco = 'meuBanco';
    
    $link = mysql_connect($servidor, $usuario, $senha)
      or die('Não foi possivel conectar: ' . mysql_error());
    
    $select = mysql_select_db($banco);
  }
  
  if($_REQUEST["action"] == "adicionar")
  {
    /* CÓDIGO DE ADICIONAR PRODUTO AO CARRINHO */
    
    header("location: ?action=visualizar");
  }
  else if($_REQUEST["action"] == "remover")
  {
    /* CÓDIGO DE REMOVER PRODUTO DO CARRINHO */
    
    header("location: ?action=visualizar");
  }
  else if($_REQUEST["action"] == "visualizar")
  {
    /* CÓDIGO DE VISUALIZAR O CARRINHO */
    
    echo "<BR><A href='?'>Retornar à lista de produtos</A>";
  }
  else 
  {
  	$sql = "SELECT * FROM PRODUTOS";
  	$result = mysql_query($sql);
  	while ($tbl = mysql_fetch_array($result)) 
  	{
  		$ID = $tbl["ID"];
  		$PRODUTO = $tbl["PRODUTO"];
  		$VALOR = $tbl["VALOR"];
  		$QUANTIDADE = $tbl["QUANTIDADE"];
  
  		echo "<LI>".$PRODUTO." (R$ ".$VALOR.") (".$QUANTIDADE." em estoque) ";
  		echo "<A href='?action=adicionar&id=".$ID."'>COMPRAR</A>";
  	}
  	echo "<BR><A href='?action=visualizar'>Visualizar carrinho</A>";
  } 
  
?>
