<?PHP
  # Dados para a conex�o com o banco de dados
  $servidor = 'localhost';
  $usuario = 'usuario';
  $senha = '*****';
  $banco = 'meuBanco';
   
  $link = mysql_connect($servidor, $usuario, $senha)
    or die('N�o foi possivel conectar: ' . mysql_error());
  
  $select = mysql_select_db($banco);
  
  if($_REQUEST["action"] == "votar")
  {
    /* C�DIGO DE VOTAR */
  }
  else if($_REQUEST["action"] == "resultados")
  {
    /* C�DIGO DE VISUALIZAR OS RESULTADOS */
  }
  else
  {
    /* C�DIGO DE VISUALIZAR A ENQUETE */
      
    // Seleciona a enquete mais recente
    $sql = "SELECT * FROM ENQUETES ORDER BY ID DESC LIMIT 1";
    $result = mysql_query($sql);
    if($tbl = mysql_fetch_array($result))
    {
      echo "<B>".$tbl["ENQUETE"]."</B>";
      
      // Navega pelas respostas
      echo "<FORM action='?action=votar' method='POST'>";
      $sql = "SELECT * FROM RESPOSTAS WHERE ENQUETES_ID = ".$tbl["ID"]." ORDER BY ID ASC";
      $result = mysql_query($sql);
      while($tbl = mysql_fetch_array($result))
      {
        echo "<BR><INPUT type='RADIO' name='VOTO' value='".$tbl["ID"]."'>".$tbl["RESPOSTA"]."";
      }
      echo "<BR><INPUT type='SUBMIT' value='Votar'>";
      echo "</FORM>";
    }
  }
 
?>
