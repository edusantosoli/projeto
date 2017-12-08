<?PHP
 
  abstract class BancoDeDados
  {
    /*
    * Esta classe abstrata define os métodos que as classes que a herdarem
    * devem implementar de forma concreta, padronizando os nomes dos métodos
    * independente do banco de dados a ser implementado / utilizado.        
    */
        
    protected $server;    // Armazena o endereço do servidor
    protected $port;      // Armazena a porta de conexão
    protected $user;      // Armazena o nome de usuário para conexão
    protected $password;  // Armazena a senha de usuário para conexão
    protected $db;        // Armazena o nome do banco de dados
    protected $connection;  // Armazena os dados de uma conexão
    protected $resultSet;   // Armazena o ResultSet de uma consulta
  
    /* Define os dados de conexão com o banco de dados */         
    abstract public function setConfig($server, $port, $user, $password, $db);
    
    /* Conecta ao banco de dados */         
    abstract public function connect();
    
    /* Desconecta do banco de dados */
    abstract public function disconnect();
        
    /* Executa comandos sql */
    abstract public function executeCommand($sql);
    
    /* Retorna o próximo result set da consulta */
    abstract public function getNextResultSetPosition();
    
    /* Retorna o número de registros do último comando realizado */
    abstract public function getAffectedRows();
    
    /* Retorna se ocorreu algum erro no último comando realizado */
    abstract public function getError();
  }
  
?>
