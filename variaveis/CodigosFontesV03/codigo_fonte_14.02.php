<?php
  
  // Conecta ao banco de dados
  if(!isset($_REQUEST["action"]) || $_REQUEST["action"] == "visualizar")
  {
	# Dados para a conexão com o banco de dados
	$servidor = 'localhost'; 		# Nome DNS ou IP do seu servidor HTTP
	$usuario = 'usuario';       # Nome de usuário para acesso ao MySQL
	$senha = '*****';      	    # Senha de acesso
	$banco = 'meuBanco';   		  # Nome do banco de dados
  
	# Executa a conexão com o MySQL
	$link = mysqli_connect($servidor, $usuario, $senha, $banco)
	 or die('Não foi possivel conectar: '.mysqli_error($link));
  }
  
  if(isset($_REQUEST["action"]) && $_REQUEST["action"] == "adicionar")
  {
    /* CÓDIGO DE ADICIONAR PRODUTO AO CARRINHO */
    
    header("location: ?action=visualizar");
  }
  else if(isset($_REQUEST["action"]) && $_REQUEST["action"] == "remover")
  {
    /* CÓDIGO DE REMOVER PRODUTO DO CARRINHO */
    
    header("location: ?action=visualizar");
  }
  else if(isset($_REQUEST["action"]) && $_REQUEST["action"] == "visualizar")
  {
    /* CÓDIGO DE VISUALIZAR O CARRINHO */
    
    echo "<BR><A href='?'>Retornar à lista de produtos</A>";
  }
  else 
  {
  	$sql = "SELECT * FROM PRODUTOS";
  	$result = mysqli_query($link, $sql);
  	while ($tbl = mysqli_fetch_array($result)) 
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
  
  mysqli_close($link);
  
?>
