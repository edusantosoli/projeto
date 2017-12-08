<?PHP
  
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
    /* CÓDIGO DE ADICIONAR PRODUTO AO CARRINHO - SESSÃO */
    session_start();
    $productId = $_REQUEST["id"];
  
    // Cria o carrinho, caso não tenha sido criado ainda
    if(!isset($_SESSION["CARRINHO"]))
    {
      $_SESSION["CARRINHO"] = array();
    }
    
    // Verifica se já existe alguma unidade do produto no carrinho
    if(isset($_SESSION["CARRINHO"][$productId]))
    {
      // Se já existe, incrementa sua quantidade
      $_SESSION["CARRINHO"][$productId]++;
    }
    else
    {
      // Se não existe, adiciona a primeira unidade ao carrinho
      $_SESSION["CARRINHO"][$productId] = 1;
    }
    
    header("location: ?action=visualizar");
  }
  else if(isset($_REQUEST["action"]) && $_REQUEST["action"] == "remover")
  {
    /* CÓDIGO DE REMOVER PRODUTO DO CARRINHO - SESSÃO  */
    session_start();
    $productId = $_REQUEST["id"];
  
    // Verifica se o carrinho existe
    if(isset($_SESSION["CARRINHO"]))
    {
      // Verifica se há alguma unidade do produto no carrinho
      if(isset($_SESSION["CARRINHO"][$productId]))
      {
        // Se existir, remove uma unidade
        $_SESSION["CARRINHO"][$productId]--;
        
        // Remove as referências do produto se não tiver mais nenhum
        if($_SESSION["CARRINHO"][$productId] == 0)
          unset($_SESSION["CARRINHO"][$productId]);
          
        // Reseta o carrinho se estiver vazio
        if(sizeof($_SESSION["CARRINHO"]) == 0)
          unset($_SESSION["CARRINHO"]);
      }
    }
    header("location: ?action=visualizar");
  }
  else if(isset($_REQUEST["action"]) && $_REQUEST["action"] == "visualizar")
  {
    /* CÓDIGO DE VISUALIZAR O CARRINHO - SESSÃO  */
    session_start();
    
    echo "<B>Conteúdo do carrinho de compras</B><BR>";
    
    // Verifica se o carrinho não está vazio
    if(isset($_SESSION["CARRINHO"]))
    {
      $total = 0.00;
      $products = array_keys($_SESSION["CARRINHO"]);
      foreach($products as $productId)
      {
      	$sql = "SELECT * FROM PRODUTOS WHERE ID = ".$productId;
      	$result = mysqli_query($link, $sql);
      	if($tbl = mysqli_fetch_array($result))
      	{
      	 $qtd = $_SESSION["CARRINHO"][$productId];
      	 $value = $qtd * $tbl["VALOR"];
      	 $total += $value;
      	 echo $qtd."x ".$tbl["PRODUTO"]." (Unitário R$ ".$tbl["VALOR"].
              ") (Total R$ ".$value.") <A href='?action=remover&id=".
              $productId."'>Remover</A><BR>";
      	}
      }
      echo "Valor total da compra: R$ ".$total;
    }
    else
      echo "Não há produtos no carrinho.";
      
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
