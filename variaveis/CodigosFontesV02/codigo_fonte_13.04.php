<?PHP
 
  interface Locavel
  {
    public function locar($paraQuem);
    public function devolver();
  }
  
  class Pessoa
  {
    public $nome;
    public $idade;
    public $email;
    
    function __construct($nome, $idade, $email)
    {
      $this->nome  = $nome;
      $this->idade = $idade;
      $this->email = $email;
      
      echo "Um novo objeto Pessoa foi construído<BR>";
    }
  }
 
  class Veiculo implements Locavel
  {
    protected $chassis;
    protected $locado;
    protected $locadoParaQuem;
    
    function __construct($chassis)
    {
      $this->chassis  = $chassis;
      $this->locado = FALSE;
      echo "Um novo objeto Veículo foi construído<BR>";
    }
    
    public function locar($paraQuem)
    { 
      if($this->locado == FALSE && $paraQuem->idade >= 18)
      {
        $locadoParaQuem = $paraQuem;
        $this->locado = TRUE;
        return "Locação efetuada<BR>";
      }
      else
        return "Falha na operação<BR>";
    }
    
    public function devolver()
    {
      if($this->locado == TRUE)
      {
        $this->locadoParaQuem = null;
        $this->locado = FALSE;
        return "Devolução realizada<BR>";
      }
    }
  }
  
  $veiculo1 = new Veiculo("ABC1D234");
  $pessoa1 = new Pessoa("Andre", 27, "andre@dominio");
  
  echo "Tentativa 1: ".$veiculo1->locar($pessoa1);
  echo "Tentativa 2: ".$veiculo1->locar($pessoa1);
  echo   "Devolução: ".$veiculo1->devolver();
  echo "Tentativa 3: ".$veiculo1->locar($pessoa1);
  
  /* RESULTADO
  * 
  * Um novo objeto Veículo foi construído
  * Um novo objeto Pessoa foi construído
  * Tentativa 1: Locação efetuada
  * Tentativa 2: Falha na operação
  * Devolução: Devolução realizada
  * Tentativa 3: Locação efetuada
  *   
  */  
  
?>
