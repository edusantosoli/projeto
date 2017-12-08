<?PHP
 
  class Utils
  {
    /*
    * Esta classe define algumas funções úteis para a aplicação, como carregar
    * o banco de dados e arquivo de configurações.    
    */
    
    public function getConfigVars()
    {
      /* 
      * Esta função lê o arquivo de configurações da aplicação, definido pelo
      * usuário, em busca do valor de uma variável específica. Este método
      * pode ser otimizado, lendo todas as variáveis e disponibilizando-as
      * em um array armazenado em sessão.   
      */
      
      // Caminho do arquivo de configurações, em diretório que não possua
      // acesso externo (internet), mas sim, somente interno no servidor.
      $arquivo = file("config/properties.ini");
      
      $configVars = array();
      
      // Lê o arquivo linha por linha
      for($i=0; $i < count($arquivo); $i++)
      {
        // Catura a posição do sinal '='
        $equals = strpos($arquivo[$i], '=');
        
        // Captura o nome da variável
        $varName = substr($arquivo[$i], 0, $equals);
        
        // Captura o valor
        $varValue = substr($arquivo[$i], 
                           $equals+1, // Soma um para não conter o caracter '='
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
      * Esta função obtem as informações de banco de dados a ser utilizado em um
      * arquivo de configuração criado pelo programador, para esta aplicação.
      * Baseado nas informações, cria o objeto de acordo com o tipo desejado.        
      */
          
      // Captura os dados de um arquivo de configuração, inclusive se é MYSQL, ou outros
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
        $dbTemp = new PostgreSQL(); //É necessário implementar a classe PostgreSQL
  
      else if($bdServer == "SQLServer")
        $dbTemp = new SQLServer(); //É necessário implementar a classe SQLServer
  
      if($dbTemp != null)    
        $dbTemp->setConfig($dbTempAddress, $dbTempPort, 
                           $dbTempUser, $dbTempPassword, $dbTempName);
                           
      return $dbTemp;    
    }
  }
  
?>
