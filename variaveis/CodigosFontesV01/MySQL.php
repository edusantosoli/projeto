<?PHP
  
  include_once("BancoDeDados.php");
  
  class MySQL extends BancoDeDados
  {
    /*
    * Esta classe foi implementada para interagir com o banco de dados MySQL,
    * herdando os métodos abstratos definidos na classe BancoDeDados.
    */
        
    /* Define os dados de conexão com o banco de dados */    
    public function setConfig($server, $port, $user, $password, $db)
    {
      $this->server = $server;
      $this->port = $port;
      $this->user = $user;
      $this->password = $password;
      $this->db = $db;
    }
  
    /* Conecta ao banco de dados */          
    public function connect()
    {
      // Formata o endereço e porta do servidor
      $address = $this->server;
      if($this->port != "")
        $address .= ":".$this->port;
  
      $this->connection = mysql_connect($address, $this->user, $this->password)
        or die('Não foi possivel conectar: ' . mysql_error());
      
      if($this->connection)
        return mysql_select_db($this->db);
    }
    
    /* Desconecta do banco de dados */
    public function disconnect()
    {
      if($this->connection)
        mysql_close($this->connection);
    }
        
    /* Executa comandos sql */
    public function executeCommand($sql)
    {
      if($this->connection)
        $this->resultSet = mysql_query($sql);
      else
        return FALSE;
    }
    
    /* Retorna o próximo result set da consulta */
    public function getNextResultSetPosition()
    {
      return mysql_fetch_array($this->resultSet);
    }
    
    /* Retorna o número de registros alterados no último comando realizado */
    public function getAffectedRows()
    {
      return mysql_affected_rows();
    }
    
    /* Retorna se ocorreu algum erro no último comando realizado */
    public function getError()
    {
      return mysql_error();
    }
  }
  
?>
