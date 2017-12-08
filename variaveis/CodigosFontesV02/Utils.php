<?PHP
 
  class Utils
  {
    /*
    * Esta classe define algumas fun��es �teis para a aplica��o, como carregar
    * o banco de dados e arquivo de configura��es.    
    */
    
    public function getConfigVars()
    {
      /* 
      * Esta fun��o l� o arquivo de configura��es da aplica��o, definido pelo
      * usu�rio, em busca do valor de uma vari�vel espec�fica. Este m�todo
      * pode ser otimizado, lendo todas as vari�veis e disponibilizando-as
      * em um array armazenado em sess�o.   
      */
      
      // Caminho do arquivo de configura��es, em diret�rio que n�o possua
      // acesso externo (internet), mas sim, somente interno no servidor.
      $arquivo = file("config/properties.ini");
      
      $configVars = array();
      
      // L� o arquivo linha por linha
      for($i=0; $i < count($arquivo); $i++)
      {
        // Catura a posi��o do sinal '='
        $equals = strpos($arquivo[$i], '=');
        
        // Captura o nome da vari�vel
        $varName = substr($arquivo[$i], 0, $equals);
        
        // Captura o valor
        $varValue = substr($arquivo[$i], 
                           $equals+1, // Soma um para n�o conter o caracter '='
                           strlen($arquivo[$i]) - $equals - 3);
                           // Subtrai 3 do resto da string para remover
                           // caracteres de final de linha
                        
        $configVars[$varName] = $varValue;
      }            
      
      return $configVars;
    }
    
    public function getDatabaseConnection()
    {
      /*
      * Esta fun��o obtem as informa��es de banco de dados a ser utilizado em um
      * arquivo de configura��o criado pelo programador, para esta aplica��o.
      * Baseado nas informa��es, cria o objeto de acordo com o tipo desejado.        
      */
          
      // Captura os dados de um arquivo de configura��o, inclusive se � MYSQL, ou outros
      $configVars = $this->getConfigVars();
      
      $dbTempAddress = $configVars["DB_ADDRESS"];
      $dbTempPort = $configVars["DB_PORT"];
      $dbTempUser = $configVars["DB_USER"];
      $dbTempPassword = $configVars["DB_PASSWORD"];
      $dbTempName = $configVars["DB_NAME"];
      $dbTemp = null;
      $bdTempType = "MySQL";
      
      if($bdTempType == "MySQL")
        $dbTemp = new MySQL();
  
      else if($bdTempType == "PostgreSQL")
        $dbTemp = new PostgreSQL(); //� necess�rio implementar a classe PostgreSQL
  
      else if($bdServer == "SQLServer")
        $dbTemp = new SQLServer(); //� necess�rio implementar a classe SQLServer
  
      if($dbTemp != null)    
        $dbTemp->setConfig($dbTempAddress, $dbTempPort, 
                           $dbTempUser, $dbTempPassword, $dbTempName);
                           
      return $dbTemp;    
    }
  }
  
?>
