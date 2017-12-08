<?PHP
  # Dados para a conexão com o banco de dados
	$servidor = 'localhost'; 		# Nome DNS ou IP do seu servidor HTTP
	$usuario = 'usuario';       # Nome de usuário para acesso ao MySQL
	$senha = '*****';      	    # Senha de acesso
	$banco = 'meuBanco';   		  # Nome do banco de dados

  # Executa a conexão com o MySQL
  $link = mysqli_connect($servidor, $usuario, $senha, $banco)
   or die('Não foi possivel conectar: '.mysqli_error($link));

  if(isset($_REQUEST["action"]) && $_REQUEST["action"] == "votar")
  {
    /* CÓDIGO DE VOTAR */
    
    if(isset($_POST["VOTO"]) && $_POST["VOTO"] != "")
    {
      $sql = "UPDATE RESPOSTAS SET VOTOS = VOTOS + 1 WHERE ID = ".$_POST["VOTO"];
      $result = mysqli_query($link, $sql);
    }
    
    header("location: ?action=resultados");
  }
  else if(isset($_REQUEST["action"]) && $_REQUEST["action"] == "resultados")
  {
    /* CÓDIGO DE VISUALIZAR OS RESULTADOS */
    
    // Seleciona a enquete mais recente
    $sql = "SELECT * FROM ENQUETES ORDER BY ID DESC LIMIT 1";
    $result = mysqli_query($link, $sql);
    if($tbl = mysqli_fetch_array($result))
    {
      echo "<B>".$tbl["ENQUETE"]."</B>";
      
      // Navega pelas respostas, exibindo em ordem de votos
      $sql = "SELECT * FROM RESPOSTAS WHERE ENQUETES_ID = ".$tbl["ID"]." ORDER BY VOTOS DESC";
      $result = mysqli_query($link, $sql);
      while($tbl = mysqli_fetch_array($result))
      {
        echo "<BR>".$tbl["RESPOSTA"]." (".$tbl["VOTOS"]." votos)";
      }
    }
  }
  else
  {
    /* CÓDIGO DE VISUALIZAR A ENQUETE */
      
    // Seleciona a enquete mais recente
    $sql = "SELECT * FROM ENQUETES ORDER BY ID DESC LIMIT 1";
    $result = mysqli_query($link, $sql);
    if($tbl = mysqli_fetch_array($result))
    {
      echo "<B>".$tbl["ENQUETE"]."</B>";
      
      // Navega pelas respostas
      echo "<FORM action='?action=votar' method='POST'>";
      $sql = "SELECT * FROM RESPOSTAS WHERE ENQUETES_ID = ".$tbl["ID"]." ORDER BY ID ASC";
      $result = mysqli_query($link, $sql);
      while($tbl = mysqli_fetch_array($result))
      {
        echo "<BR><INPUT type='RADIO' name='VOTO' value='".$tbl["ID"]."'>".$tbl["RESPOSTA"]."";
      }
      echo "<BR><INPUT type='SUBMIT' value='Votar'>";
      echo "</FORM>";
    }
  }
  
  mysqli_close($link);
 
?>
