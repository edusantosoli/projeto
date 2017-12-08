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
      
      echo "Um novo objeto Pessoa foi constru�do<BR>";
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
      echo "Um novo objeto Ve�culo foi constru�do<BR>";
    }
    
    public function locar($paraQuem)
    { 
      if($this->locado == FALSE && $paraQuem->idade >= 18)
      {
        $locadoParaQuem = $paraQuem;
        $this->locado = TRUE;
        return "Loca��o efetuada<BR>";
      }
      else
        return "Falha na opera��o<BR>";
    }
    
    public function devolver()
    {
      if($this->locado == TRUE)
      {
        $this->locadoParaQuem = null;
        $this->locado = FALSE;
        return "Devolu��o realizada<BR>";
      }
    }
  }
  
  $veiculo1 = new Veiculo("ABC1D234");
  $pessoa1 = new Pessoa("Andre", 27, "andre@dominio");
  
  echo "Tentativa 1: ".$veiculo1->locar($pessoa1);
  echo "Tentativa 2: ".$veiculo1->locar($pessoa1);
  echo   "Devolu��o: ".$veiculo1->devolver();
  echo "Tentativa 3: ".$veiculo1->locar($pessoa1);
  
  /* RESULTADO
  * 
  * Um novo objeto Ve�culo foi constru�do
  * Um novo objeto Pessoa foi constru�do
  * Tentativa 1: Loca��o efetuada
  * Tentativa 2: Falha na opera��o
  * Devolu��o: Devolu��o realizada
  * Tentativa 3: Loca��o efetuada
  *   
  */  
  
?>
